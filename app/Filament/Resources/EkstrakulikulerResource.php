<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstrakulikulerResource\Pages;
use App\Filament\Resources\EkstrakulikulerResource\RelationManagers;
use App\Models\Ekstrakulikuler;
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
use Filament\Tables\Columns\ImageColumn;

class EkstrakulikulerResource extends Resource
{
    protected static ?string $model = Ekstrakulikuler::class;
    protected static ?string $navigationGroup = "Profil Sekolah";
    protected static ?string $navigationLabel = "Ekstrakulikuler Sekolah";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Ekstrakulikuler")->schema([
                TextInput::make("nama")
                    ->required()
                    ->label("Nama Ekstrakulikuler"),
                TextInput::make("deskripsi")->label("Deskripsi"),
                FileUpload::make("foto")
                    ->image()
                    ->directory("Thumbnail-foto-fasilitas")
                    ->maxSize(10240)
                    ->required()
                    ->label("Thumbnail Ekstrakulikuler ( Maksimal 10 Mb )"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("foto")->label("Foto Ekstrakulikuler"),
                TextColumn::make("nama")
                    ->label("Nama Ekstrakulikuler")
                    ->searchable(),
                TextColumn::make("deskripsi")->label(
                    "Deskripsi Ekstrakulikuler"
                ),
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
            "index" => Pages\ListEkstrakulikulers::route("/"),
            "create" => Pages\CreateEkstrakulikuler::route("/create"),
            "edit" => Pages\EditEkstrakulikuler::route("/{record}/edit"),
        ];
    }
}
