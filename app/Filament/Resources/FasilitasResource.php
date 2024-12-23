<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FasilitasResource\Pages;
use App\Filament\Resources\FasilitasResource\RelationManagers;
use App\Models\Fasilitas;
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

class FasilitasResource extends Resource
{
    protected static ?string $model = Fasilitas::class;
    protected static ?string $navigationGroup = "Profil Sekolah";
    protected static ?string $navigationLabel = "Fasilitas Sekolah";

    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Fasilitas")->schema([
                TextInput::make("nama")->required()->label("Nama Fasilitas"),
                TextInput::make("deskripsi")->label("Deskripsi"),
                FileUpload::make("foto")
                    ->image()
                    ->directory("Thumbnail-foto-fasilitas")
                    ->maxSize(1024)
                    ->required()
                    ->label("Thumbnail Fasilitas ( Maksimal 1 Mb )"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("foto")->label("Foto Fasilitas"),
                TextColumn::make("nama")->label("Nama Fasilitas")->searchable(),
                TextColumn::make("deskripsi")->label("Deskripsi Fasilitas"),
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
            "index" => Pages\ListFasilitas::route("/"),
            "create" => Pages\CreateFasilitas::route("/create"),
            "edit" => Pages\EditFasilitas::route("/{record}/edit"),
        ];
    }
}
