<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;


    protected function beforeFill(): void
    {
        // Runs before the form fields are populated with their default values.
    }
 
    protected function afterFill(): void
    {
        // Runs after the form fields are populated with their default values.
    }
 
    protected function beforeValidate(): void
    {
        // Runs before the form fields are validated when the form is submitted.
    }
 
    protected function afterValidate(): void
    {
        // Runs after the form fields are validated when the form is submitted.
    }
 
    protected function beforeCreate(): void
    {
        // Runs before the form fields are saved to the database.
    }
 
    protected function afterCreate(): void
    {
        // Runs after the form fields are saved to the database.
    }

}
