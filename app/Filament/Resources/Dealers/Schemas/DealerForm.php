<?php

namespace App\Filament\Resources\Dealers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class DealerForm
{
    public static function configure(Schema $schema): Schema
    {
       return $schema
    ->components([
    // General Information
    Section::make('General Information')
        ->description('Basic details of the dealer')
        ->icon('heroicon-m-information-circle')
        ->columns(2)
        ->schema([
            TextInput::make('name')
                ->label('Dealer Name')
                ->placeholder('Ex: ABC Garage')
                ->required(),

            TextInput::make('website')
                ->label('Website')
                ->placeholder('https://example.com')
                ->url()
                ->suffixIcon('heroicon-m-globe-alt'),
        ]),

    // Address
    Section::make('Address')
        ->description('Physical location of the dealer')
        ->icon('heroicon-m-map-pin')
        ->columns(2)
        ->schema([
            TextInput::make('address')
                ->label('Address')
                ->placeholder('123 Main Street')
                ->required(),

            TextInput::make('city')
                ->label('City')
                ->required(),

            TextInput::make('province')
                ->label('Province / State')
                ->required(),

            TextInput::make('country')
                ->label('Country')
                ->default('Canada')
                ->required(),

            TextInput::make('postal_code')
                ->label('Postal Code')
                ->placeholder('H2X 1Y4')
                ->required(),
        ]),

    // Contact
    Section::make('Contact')
        ->description('Contact details')
        ->icon('heroicon-m-phone')
        ->columns(2)
        ->schema([
            TextInput::make('phone')
                ->label('Phone')
                ->placeholder('+1 514-555-1234')
                ->tel()
                ->required()
                ->suffixIcon('heroicon-m-phone'),

            TextInput::make('email')
                ->label('Email Address')
                ->placeholder('contact@example.com')
                ->email()
                ->suffixIcon('heroicon-m-envelope'),
        ]),

    // GPS Location
    Section::make('GPS Location')
        ->description('Coordinates for Google Maps')
        ->columns(2)
        ->icon('heroicon-m-map')
        ->schema([
            TextInput::make('latitude')
                ->label('Latitude')
                ->numeric()
                ->step(0.000001)
                ->placeholder('45.5017')
                ->required(),

            TextInput::make('longitude')
                ->label('Longitude')
                ->numeric()
                ->step(0.000001)
                ->placeholder('-73.5673')
                ->required(),
        ]),

    // Status
    Toggle::make('is_active')
        ->label('Active?')
        ->helperText('Uncheck to deactivate this dealer')
        ->default(true),
]);

}
}
