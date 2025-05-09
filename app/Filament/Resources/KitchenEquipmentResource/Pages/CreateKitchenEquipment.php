<?php

namespace App\Filament\Resources\KitchenEquipmentResource\Pages;

use App\Filament\Resources\KitchenEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKitchenEquipment extends CreateRecord
{
    protected static string $resource = KitchenEquipmentResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
