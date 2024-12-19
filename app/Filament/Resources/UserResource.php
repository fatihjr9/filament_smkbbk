<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationLabel = "User Management";
    protected static ?string $navigationGroup = "Dokumen Penilaian dan Guru";

    protected static ?string $navigationIcon = "heroicon-o-user-group";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make("name")
                ->label("Nama Guru / Staff")
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make("email")
                ->label("Email")
                ->email()
                ->required()
                ->unique(User::class, "email"),

            Forms\Components\TextInput::make("password")
                ->label("Password")
                ->password()
                ->required()
                ->minLength(8),

            Forms\Components\Select::make("roles")
                ->label("Role")
                ->relationship("roles", "name")
                ->required(),
        ]);
    }
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        // Hash password sebelum menyimpan
        $data["password"] = Hash::make($data["password"]);

        return $data;
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")
                    ->searchable()
                    ->label("Nama Guru / Staff"),
                TextColumn::make("email")->label("Email Guru / Staff"),
                TextColumn::make("roles.name")->badge(),
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
            "index" => Pages\ListUsers::route("/"),
            "create" => Pages\CreateUser::route("/create"),
            "edit" => Pages\EditUser::route("/{record}/edit"),
        ];
    }
}
