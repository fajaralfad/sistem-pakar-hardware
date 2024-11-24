<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KerusakanResource\Pages;
use App\Models\Kerusakan;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KerusakanResource extends Resource
{
    protected static ?string $model = Kerusakan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kerusakan')
                    ->label('Nama Kerusakan')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kerusakan')
                    ->label('Nama Kerusakan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50), // Batasi panjang teks untuk tampilan
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKerusakans::route('/'),
            'create' => Pages\CreateKerusakan::route('/create'),
            'edit' => Pages\EditKerusakan::route('/{record}/edit'),
        ];
    }
}
