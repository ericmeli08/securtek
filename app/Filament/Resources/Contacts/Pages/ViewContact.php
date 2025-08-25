<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Filament\Resources\ContactResponses\ContactResponseResource;
use App\Filament\Resources\Contacts\ContactResource;
use App\Mail\ResponseContactMail;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Mail;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    public function mount($record): void
    {
        parent::mount($record);

        if (is_null($this->record->read_at)) {
            $this->record->update(['read_at' => now()]);
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('repondre')
                ->label('Answer')
                ->icon('heroicon-m-envelope')
                ->color('primary')
                ->form([TextInput::make('subject')->label('Subject')->required()->maxLength(255), Textarea::make('content')->label('Response Message')->required()->rows(5)->maxLength(2000)])
                ->action(function (array $data) {
                    try {
                        DB::beginTransaction();
                        $response = ContactResponseResource::getModel()::create([
                            'contact_id' => $this->record->id,
                            'user_id' => auth()->id(),
                            'subject' => $data['subject'],
                            'content' => $data['content'],
                        ]);
                        Mail::to($this->record->email)->send(new ResponseContactMail($response));
                        Notification::make()
                            ->title('Response email sent to ' . $this->record->email)
                            ->success()
                            ->send();
                        DB::commit();
                        response()->redirectTo(route('filament.admin.resources.contacts.index'));
                    } catch (\Exception $e) {
                        DB::rollBack();
                        Notification::make()
                            ->title('Error sending response email: ' . $e->getMessage())
                            ->danger()
                            ->send();
                        Log::error('Error sending response email: ' . $e->getMessage());
                    }
                }),
        ];
    }
}
