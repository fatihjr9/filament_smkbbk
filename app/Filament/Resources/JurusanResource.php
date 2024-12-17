<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurusanResource\Pages;
use App\Filament\Resources\JurusanResource\RelationManagers;
use App\Models\Jurusan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;
    protected static ?string $navigationGroup = "Profil Sekolah";
    protected static ?string $navigationLabel = "Program Keahlian";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Program keahlian")->schema([
                TextInput::make("nama")->required()->label("Nama Jurusan"),
                RichEditor::make("deskripsi")
                    ->required()
                    ->label("Detail Jurusan"),
                FileUpload::make("thumbnail")
                    ->image()
                    ->directory("Thumbnail-Jurusan")
                    ->maxSize(1024)
                    ->required()
                    ->label("Thumbnail Jurusan ( Maksimal 1 Mb )"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("thumbnail"),
                TextColumn::make("nama")->searchable(),
                TextColumn::make("deskripsi")
                    ->formatStateUsing(fn($state) => strip_tags($state))
                    ->limit(50),
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
            "index" => Pages\ListJurusans::route("/"),
            "create" => Pages\CreateJurusan::route("/create"),
            "edit" => Pages\EditJurusan::route("/{record}/edit"),
        ];
    }
}
