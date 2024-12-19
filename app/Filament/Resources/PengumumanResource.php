<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengumumanResource\Pages;
use App\Filament\Resources\PengumumanResource\RelationManagers;
use App\Models\Pengumuman;
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
use Filament\Forms\Components\Textarea;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;
    protected static ?string $navigationLabel = "Pengumuman";
    protected static ?string $navigationGroup = "Profil Sekolah";

    protected static ?string $navigationIcon = "heroicon-m-inbox-arrow-down";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Pengumuman")->schema([
                TextInput::make("nama")->required()->label("Judul Pengumuman"),
                Textarea::make("deskripsi")
                    ->required()
                    ->label("Detail Pengumuman"),
                FileUpload::make("thumbnail")
                    ->image()
                    ->directory("Thumbnail-Pengumuman")
                    ->maxSize(1024)
                    ->required()
                    ->label("Thumbnail Pengumuman ( Maksimal 1 Mb )"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("thumbnail"),
                TextColumn::make("nama"),
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
            "index" => Pages\ListPengumumen::route("/"),
            "create" => Pages\CreatePengumuman::route("/create"),
            "edit" => Pages\EditPengumuman::route("/{record}/edit"),
        ];
    }
}
