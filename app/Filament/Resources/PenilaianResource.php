<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenilaianResource\Pages;
use App\Filament\Resources\PenilaianResource\RelationManagers;
use App\Models\Penilaian;
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

class PenilaianResource extends Resource
{
    protected static ?string $model = Penilaian::class;
    protected static ?string $navigationGroup = "Dokumen Penilaian dan Guru";
    protected static ?string $navigationLabel = "Data Penilaian Siswa";
    protected static ?string $navigationIcon = "heroicon-o-book-open";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Data Penilaian Siswa")->schema([
                TextInput::make("nama")->required()->label("Nama"),
                FileUpload::make("file")
                    ->directory("file-penilaian")
                    ->required()
                    ->label("Masukkan file Penilaian"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama")
                    ->label("Nama File Penilaian")
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
            "index" => Pages\ListPenilaians::route("/"),
            "create" => Pages\CreatePenilaian::route("/create"),
            "edit" => Pages\EditPenilaian::route("/{record}/edit"),
        ];
    }
}
