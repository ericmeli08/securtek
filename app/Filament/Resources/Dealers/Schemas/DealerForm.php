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
        // Informations générales
        Section::make('Informations générales')
            ->description('Détails de base du dealer')
            ->icon('heroicon-m-information-circle')
            ->columns(2)
            ->schema([
                TextInput::make('name')
                    ->label('Nom du dealer')
                    ->placeholder('Ex: Garage ABC')
                    ->required(),

                TextInput::make('website')
                    ->label('Site web')
                    ->placeholder('https://example.com')
                    ->url()
                    ->suffixIcon('heroicon-m-globe-alt'),
            ]),

        // Adresse
        Section::make('Adresse')
            ->description('Localisation physique du dealer')
            ->icon('heroicon-m-map-pin')
            ->columns(2)
            ->schema([
                TextInput::make('address')
                    ->label('Adresse')
                    ->placeholder('123 Rue Principale')
                    ->required(),

                TextInput::make('city')
                    ->label('Ville')
                    ->required(),

                TextInput::make('province')
                    ->label('Province / État')
                    ->required(),

                TextInput::make('country')
                    ->label('Pays')
                    ->default('Canada')
                    ->required(),

                TextInput::make('postal_code')
                    ->label('Code postal')
                    ->placeholder('H2X 1Y4')
                    ->required(),
            ]),

        // Contact
        Section::make('Contact')
            ->description('Coordonnées de contact')
            ->icon('heroicon-m-phone')
            ->columns(2)
            ->schema([
                TextInput::make('phone')
                    ->label('Téléphone')
                    ->placeholder('+1 514-555-1234')
                    ->tel()
                    ->required()
                    ->suffixIcon('heroicon-m-phone'),

                TextInput::make('email')
                    ->label('Adresse email')
                    ->placeholder('contact@example.com')
                    ->email()
                    ->suffixIcon('heroicon-m-envelope'),
            ]),

        // Localisation GPS
        Section::make('Localisation GPS')
            ->description('Coordonnées pour Google Maps')
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

        // Statut
        Toggle::make('is_active')
            ->label('Actif ?')
            ->helperText('Décochez pour désactiver ce dealer')
            ->default(true),
    ]);
}
}
