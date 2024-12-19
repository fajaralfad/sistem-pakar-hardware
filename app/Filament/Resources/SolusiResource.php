<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SolusiResource\Pages;
use App\Models\Solusi;
use App\Models\Kerusakan;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class SolusiResource extends Resource
{
    protected static ?string $model = Solusi::class;

    // Ikon yang relevan dengan solusi
    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    // Label untuk navigasi
    protected static ?string $navigationLabel = 'Solusi';
    protected static ?string $modelLabel = 'Solusi';
    protected static ?string $pluralModelLabel = 'Solusi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_solusi')
                            ->label('Nama Solusi')
                            ->required()
                            ->placeholder('Masukkan nama solusi')
                            ->maxLength(255)
                            ->columnSpan('full'),

                        Textarea::make('langkah_solusi')
                            ->label('Langkah Solusi')
                            ->required()
                            ->placeholder('Masukkan langkah-langkah solusi')
                            ->rows(5)
                            ->columnSpan('full'),

                        Select::make('kerusakan_id')
                            ->label('Kerusakan Terkait')
                            ->options(Kerusakan::all()->pluck('nama_kerusakan', 'id'))
                            ->searchable()
                            ->placeholder('Pilih kerusakan terkait')
                            ->required(),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_solusi')
                    ->label('Nama Solusi')
                    ->sortable()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('langkah_solusi')
                    ->label('Langkah Solusi')
                    ->limit(50)
                    ->wrap(),

                TextColumn::make('kerusakan.nama_kerusakan')
                    ->label('Kerusakan Terkait')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
            ])
            ->defaultSort('nama_solusi', 'asc')
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
            'index' => Pages\ListSolusis::route('/'),
            'create' => Pages\CreateSolusi::route('/create'),
            'edit' => Pages\EditSolusi::route('/{record}/edit'),
        ];
    }
}
