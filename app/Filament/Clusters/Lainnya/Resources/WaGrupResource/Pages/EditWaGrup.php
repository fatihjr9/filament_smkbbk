<?php

namespace App\Filament\Clusters\Lainnya\Resources\WaGrupResource\Pages;

use App\Filament\Clusters\Lainnya\Resources\WaGrupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWaGrup extends EditRecord
{
    protected static string $resource = WaGrupResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
    protected function getHeaderActions(): array
    {
        return [Actions\DeleteAction::make()];
    }
}
