<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label(__('fields.name')),
                // TextInput::make('created_at')
                //     ->disabled()
                //     ->label(__('fields.created_at')),
                // TextInput::make('updated_at')
                //     ->disabled()
                //     ->label(__('fields.updated_at')),
            ]);
    }
}
