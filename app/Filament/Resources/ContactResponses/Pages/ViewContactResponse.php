<?php

namespace App\Filament\Resources\ContactResponses\Pages;

use App\Filament\Resources\ContactResponses\ContactResponseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactResponse extends ViewRecord
{
    protected static string $resource = ContactResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
