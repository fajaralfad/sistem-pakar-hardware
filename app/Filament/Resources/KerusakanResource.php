<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KerusakanResource\Pages;
use App\Models\Kerusakan;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Table;

class KerusakanResource extends Resource
{
    protected static ?string $model = Kerusakan::class;

    // Ganti ikon dengan ikon yang sesuai
    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle'; // Ikon yang relevan dengan kerusakan

    // Mengubah label di navigasi
    protected static ?string $navigationLabel = 'Kerusakan';
    protected static ?string $modelLabel = 'Kerusakan';
    protected static ?string $pluralModelLabel = 'Kerusakan';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_kerusakan')
                            ->label('Nama Kerusakan')
                            ->required()
                            ->placeholder('Masukkan nama kerusakan')
                            ->maxLength(255)
                            ->columnSpan('full'),

                        Textarea::make('deskripsi')
                            ->label('Deskripsi')
                            ->required()
                            ->placeholder('Masukkan deskripsi kerusakan')
                            ->rows(5)
                            ->columnSpan('full'),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kerusakan')
                    ->label('Nama Kerusakan')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                    
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->wrap(),
            ])
            ->defaultSort('nama_kerusakan', 'asc')
            ->actions([
                Tables\Actions\EditAction::make()
                    ->iconButton(),
                Tables\Actions\DeleteAction::make()
                    ->iconButton(),
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
