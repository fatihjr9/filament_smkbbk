<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganisasiResource\Pages;
use App\Filament\Resources\OrganisasiResource\RelationManagers;
use App\Models\Organisasi;
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

class OrganisasiResource extends Resource
{
    protected static ?string $model = Organisasi::class;
    protected static ?string $navigationGroup = "Pemberkasan";
    protected static ?string $navigationLabel = "Struktur Organisasi Sekolah";

    protected static ?string $navigationIcon = "heroicon-m-cube-transparent";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Program keahlian")->schema([
                TextInput::make("nama")->required()->label("Nama Guru"),
                TextInput::make("nidn")->required()->label("NIDN"),
                TextInput::make("posisi")
                    ->required()
                    ->label("Posisi / Kedudukan"),
                Select::make("jurusan_id")
                    ->label("Jurusan ( tidak wajib )")
                    ->relationship("jurusan", "nama")
                    ->preload(),
                FileUpload::make("foto")
                    ->image()
                    ->directory("Thumbnail-foto-organisasi")
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
                ImageColumn::make("foto")->label("Foto Guru / Staff"),
                TextColumn::make("nama")
                    ->label("Nama Guru / Staff")
                    ->searchable(),
                TextColumn::make("nidn")
                    ->label("NIDN Guru / Staff")
                    ->searchable(),
                TextColumn::make("jurusan.nama")->label("Jurusan Guru / Staff"),
                TextColumn::make("posisi")->label("Posisi Guru / Staff"),
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
            "index" => Pages\ListOrganisasis::route("/"),
            "create" => Pages\CreateOrganisasi::route("/create"),
            "edit" => Pages\EditOrganisasi::route("/{record}/edit"),
        ];
    }
}
