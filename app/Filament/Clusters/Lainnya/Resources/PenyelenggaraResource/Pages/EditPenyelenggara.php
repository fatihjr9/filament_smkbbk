<?php

namespace App\Filament\Clusters\Lainnya\Resources\PenyelenggaraResource\Pages;

use App\Filament\Clusters\Lainnya\Resources\PenyelenggaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyelenggara extends EditRecord
{
    protected static string $resource = PenyelenggaraResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
    protected function getHeaderActions(): array
    {
        return [Actions\DeleteAction::make()];
    }
}
