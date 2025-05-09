<?php

namespace App\Filament\Resources\KitchenEquipmentResource\Pages;

use App\Filament\Resources\KitchenEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKitchenEquipment extends ListRecords
{
    protected static string $resource = KitchenEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
