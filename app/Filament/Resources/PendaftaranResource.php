<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;
use App\Models\Pendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;
    protected static ?string $navigationLabel = "Informasi PPDB";
    protected static ?string $navigationGroup = "Pemberkasan";
    protected static ?string $navigationIcon = "heroicon-o-document-text";
    public static function canCreate(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form->schema([
            //
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama_siswa")->searchable(),
                TextColumn::make("tmpt_lahir_siswa"),
                TextColumn::make("tgl_lahir_siswa")->date(),
                TextColumn::make("jurusan")->searchable(),
                TextColumn::make("tgl_daftar")->date(),
                TextColumn::make("no_registrasi"),
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
            "index" => Pages\ListPendaftarans::route("/"),
            "create" => Pages\CreatePendaftaran::route("/create"),
            "edit" => Pages\EditPendaftaran::route("/{record}/edit"),
        ];
    }
}
