<?php

namespace App\Filament\Clusters\Lainnya\Resources;

use App\Filament\Clusters\Lainnya;
use App\Filament\Clusters\Lainnya\Resources\WaGrupResource\Pages;
use App\Filament\Clusters\Lainnya\Resources\WaGrupResource\RelationManagers;
use App\Models\Jurusan;
use App\Models\WaGrup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\Select;

class WaGrupResource extends Resource
{
    protected static ?string $model = WaGrup::class;
    protected static ?string $navigationLabel = "Whatsapp Group";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    protected static ?string $cluster = Lainnya::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Grup Whatsapp")->schema([
                TextInput::make("nama")->required()->label("Nama Grup"),
                Select::make("jurusan")
                    ->options(Jurusan::all()->pluck("nama", "id")->toArray())
                    ->label("Jurusan"),
                TextInput::make("link")->required()->label("Link"),
            ]),
        ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama")->searchable(),
                TextColumn::make("jurusan"),
                TextColumn::make("link"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
                //
            ];
    }

    public static function getPages(): array
    {
        return [
            "index" => Pages\ListWaGrups::route("/"),
            "create" => Pages\CreateWaGrup::route("/create"),
            "edit" => Pages\EditWaGrup::route("/{record}/edit"),
        ];
    }
}
