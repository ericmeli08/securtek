<?php

namespace App\Filament\Resources\ContactResponses\Pages;

use App\Filament\Resources\ContactResponses\ContactResponseResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactResponse extends EditRecord
{
    protected static string $resource = ContactResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
