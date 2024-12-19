<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RaportResource\Pages;
use App\Filament\Resources\RaportResource\RelationManagers;
use App\Models\Raport;
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

class RaportResource extends Resource
{
    protected static ?string $model = Raport::class;
    protected static ?string $navigationGroup = "Dokumen Penilaian dan Guru";
    protected static ?string $navigationLabel = "Data Raport Siswa";
    protected static ?string $navigationIcon = "heroicon-o-book-open";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Data Raport Siswa")->schema([
                TextInput::make("nama")->required()->label("Nama"),
                FileUpload::make("file")
                    ->directory("file-raport")
                    ->required()
                    ->label("Masukkan file Raport"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama")
                    ->label("Nama File Raport")
                    ->searchable(),
                TextColumn::make("file")
                    ->label("File")
                    ->url(
                        fn($record) => $record->file
                            ? asset("storage/" . $record->file)
                            : null
                    )
                    ->openUrlInNewTab()
                    ->description("Klik untuk unduh")
                    ->toggleable(),
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
            "index" => Pages\ListRaports::route("/"),
            "create" => Pages\CreateRaport::route("/create"),
            "edit" => Pages\EditRaport::route("/{record}/edit"),
        ];
    }
}
