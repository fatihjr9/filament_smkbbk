<?php

namespace App\Filament\Resources\RaportResource\Pages;

use App\Filament\Resources\RaportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRaport extends EditRecord
{
    protected static string $resource = RaportResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
    protected function getHeaderActions(): array
    {
        return [Actions\DeleteAction::make()];
    }
}
