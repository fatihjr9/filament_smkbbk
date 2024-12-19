<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MateriResource\Pages;
use App\Filament\Resources\MateriResource\RelationManagers;
use App\Models\Materi;
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

class MateriResource extends Resource
{
    protected static ?string $model = Materi::class;
    protected static ?string $navigationGroup = "Dokumen Penilaian dan Guru";
    protected static ?string $navigationLabel = "Data Materi Siswa";
    protected static ?string $navigationIcon = "heroicon-o-book-open";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Data Penilaian Siswa")->schema([
                TextInput::make("nama")->required()->label("Nama"),
                FileUpload::make("file")
                    ->directory("file-materi")
                    ->required()
                    ->label("Masukkan file materi"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama")
                    ->label("Nama File Materi")
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
            ->actions([Tables\Actions\EditAction::make()])
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
            "index" => Pages\ListMateris::route("/"),
            "create" => Pages\CreateMateri::route("/create"),
            "edit" => Pages\EditMateri::route("/{record}/edit"),
        ];
    }
}
