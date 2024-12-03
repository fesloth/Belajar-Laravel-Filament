<?php

namespace App\Filament\Resources\MapelPilihanResource\Pages;

use App\Filament\Resources\MapelPilihanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMapelPilihans extends ListRecords
{
    protected static string $resource = MapelPilihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
