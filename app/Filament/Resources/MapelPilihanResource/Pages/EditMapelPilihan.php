<?php

namespace App\Filament\Resources\MapelPilihanResource\Pages;

use App\Filament\Resources\MapelPilihanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMapelPilihan extends EditRecord
{
    protected static string $resource = MapelPilihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
