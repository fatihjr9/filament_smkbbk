<?php

namespace App\Filament\Clusters\Lainnya\Resources\WaGrupResource\Pages;

use App\Filament\Clusters\Lainnya\Resources\WaGrupResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWaGrup extends CreateRecord
{
    protected static string $resource = WaGrupResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
}
