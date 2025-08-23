<?php

namespace App\Filament\Resources\Dealers\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ToggleColumn;

class DealerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('address'),
                TextEntry::make('city'),
                TextEntry::make('province'),
                TextEntry::make('country'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('website'),
                
                 ToggleColumn::make('is_active')
                    ->label('Actif ?')
                    ->sortable()
                    ->alignCenter(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
