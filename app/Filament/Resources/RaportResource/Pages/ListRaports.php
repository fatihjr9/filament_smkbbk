<?php

namespace App\Filament\Resources\RaportResource\Pages;

use App\Filament\Resources\RaportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListRaports extends ListRecords
{
    protected static string $resource = RaportResource::class;
    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }
}
