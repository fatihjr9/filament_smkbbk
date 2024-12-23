<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;
    protected static ?string $navigationGroup = "Profil Sekolah";
    protected static ?string $navigationLabel = "Produk Kami";

    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Program keahlian")->schema([
                TextInput::make("nama")->required()->label("Nama Produk"),
                TextInput::make("deskripsi")->label(
                    "Deskripsi Produk ( tidak wajib )"
                ),
                Select::make("jurusan_id")
                    ->label("Dari Jurusan")
                    ->relationship("jurusan", "nama")
                    ->preload(),
                FileUpload::make("foto")
                    ->image()
                    ->directory("Thumbnail-foto-produk")
                    ->maxSize(10240)
                    ->required()
                    ->label("Thumbnail Produk ( Maksimal 10 Mb )"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("foto")->label("Foto Produk"),
                TextColumn::make("nama")->label("Nama Produk")->searchable(),
                TextColumn::make("deskripsi")->label("Deskripsi Produk"),
                TextColumn::make("jurusan.nama")->label("Produk dari jurusan"),
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
            "index" => Pages\ListProduks::route("/"),
            "create" => Pages\CreateProduk::route("/create"),
            "edit" => Pages\EditProduk::route("/{record}/edit"),
        ];
    }
}
