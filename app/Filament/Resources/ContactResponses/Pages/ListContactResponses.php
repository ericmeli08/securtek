<?php

namespace App\Filament\Resources\ContactResponses\Pages;

use App\Filament\Resources\ContactResponses\ContactResponseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactResponses extends ListRecords
{
    protected static string $resource = ContactResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
