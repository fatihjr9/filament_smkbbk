<?php

namespace App\Filament\Clusters\Lainnya\Resources;

use App\Filament\Clusters\Lainnya;
use App\Filament\Clusters\Lainnya\Resources\TahunAjaranResource\Pages;
use App\Filament\Clusters\Lainnya\Resources\TahunAjaranResource\RelationManagers;
use App\Models\TahunAjaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;

class TahunAjaranResource extends Resource
{
    protected static ?string $model = TahunAjaran::class;
    protected static ?string $navigationLabel = "Tahun Ajaran";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    protected static ?string $cluster = Lainnya::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Tahun Ajaran")->schema([
                TextInput::make("nama")->required()->label("Tahun Ajaran"),
                TextInput::make("status")
                    ->required()
                    ->label("Status Tahun Ajaran"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([TextColumn::make("nama"), TextColumn::make("status")])
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
            "index" => Pages\ListTahunAjarans::route("/"),
            "create" => Pages\CreateTahunAjaran::route("/create"),
            "edit" => Pages\EditTahunAjaran::route("/{record}/edit"),
        ];
    }
}
