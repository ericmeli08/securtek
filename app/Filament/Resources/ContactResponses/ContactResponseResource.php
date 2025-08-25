<?php

namespace App\Filament\Resources\ContactResponses;

use App\Filament\Resources\ContactResponses\Pages\CreateContactResponse;
use App\Filament\Resources\ContactResponses\Pages\EditContactResponse;
use App\Filament\Resources\ContactResponses\Pages\ListContactResponses;
use App\Filament\Resources\ContactResponses\Pages\ViewContactResponse;
use App\Filament\Resources\ContactResponses\Schemas\ContactResponseForm;
use App\Filament\Resources\ContactResponses\Schemas\ContactResponseInfolist;
use App\Filament\Resources\ContactResponses\Tables\ContactResponsesTable;
use App\Models\ContactResponse;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactResponseResource extends Resource
{
    protected static ?string $model = ContactResponse::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'subject';

    public static function form(Schema $schema): Schema
    {
        return ContactResponseForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactResponseInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactResponsesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactResponses::route('/'),
            'create' => CreateContactResponse::route('/create'),
            'view' => ViewContactResponse::route('/{record}'),
            'edit' => EditContactResponse::route('/{record}/edit'),
        ];
    }
}
