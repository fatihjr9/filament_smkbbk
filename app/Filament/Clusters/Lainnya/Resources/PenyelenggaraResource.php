<?php

namespace App\Filament\Clusters\Lainnya\Resources;

use App\Filament\Clusters\Lainnya;
use App\Filament\Clusters\Lainnya\Resources\PenyelenggaraResource\Pages;
use App\Filament\Clusters\Lainnya\Resources\PenyelenggaraResource\RelationManagers;
use App\Models\Penyelenggara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class PenyelenggaraResource extends Resource
{
    protected static ?string $model = Penyelenggara::class;
    protected static ?string $navigationLabel = "Penyelenggara PPDB";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    protected static ?string $cluster = Lainnya::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make("Penyelenggara")->schema([
                TextInput::make("nama")
                    ->required()
                    ->label("Nama Penyelenggara"),
                TextInput::make("jabatan")
                    ->required()
                    ->label("Jabatan Penyelenggara"),
                FileUpload::make("ttd")
                    ->image()
                    ->directory("penyelenggara-signature")
                    ->maxSize(1024)
                    ->required()
                    ->label("TTD Penyelenggara ( Maksimal 1 Mb )"),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("ttd"),
                TextColumn::make("nama")->searchable(),
                TextColumn::make("jabatan")->searchable(),
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
            "index" => Pages\ListPenyelenggaras::route("/"),
            "create" => Pages\CreatePenyelenggara::route("/create"),
            "edit" => Pages\EditPenyelenggara::route("/{record}/edit"),
        ];
    }
}
