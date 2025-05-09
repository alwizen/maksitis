<?php

namespace App\Filament\Resources\KitchenEquipmentResource\Pages;

use App\Filament\Resources\KitchenEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKitchenEquipment extends EditRecord
{
    protected static string $resource = KitchenEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
