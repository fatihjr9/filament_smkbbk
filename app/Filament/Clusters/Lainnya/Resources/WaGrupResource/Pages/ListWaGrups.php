<?php

namespace App\Filament\Clusters\Lainnya\Resources\WaGrupResource\Pages;

use App\Filament\Clusters\Lainnya\Resources\WaGrupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWaGrups extends ListRecords
{
    protected static string $resource = WaGrupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
