<?php

namespace JolanUK\FilamentGutenberg;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentGutenberg implements Plugin
{
    public function getId(): string
    {
        return 'filament-gutenberg';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('filament-gutenberg', __DIR__ . '/../resources/dist/filament-gutenberg.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('filament-gutenberg');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
