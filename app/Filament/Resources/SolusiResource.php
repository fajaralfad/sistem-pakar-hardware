<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SolusiResource\Pages;
use App\Models\Solusi;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SolusiResource extends Resource
{
    protected static ?string $model = Solusi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama_solusi')
                    ->label('Nama Solusi')
                    ->required()
                    ->maxLength(255),
                Textarea::make('langkah_solusi')
                    ->label('Langkah Solusi')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_solusi')
                    ->label('Nama Solusi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('langkah_solusi')
                    ->label('Langkah Solusi')
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
            'index' => Pages\ListSolusis::route('/'),
            'create' => Pages\CreateSolusi::route('/create'),
            'edit' => Pages\EditSolusi::route('/{record}/edit'),
        ];
    }
}
