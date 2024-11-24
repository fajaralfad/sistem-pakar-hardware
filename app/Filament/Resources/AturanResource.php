<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AturanResource\Pages;
use App\Models\Aturan;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Table;

class AturanResource extends Resource
{
    protected static ?string $model = Aturan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Select::make('gejala_id')
                    ->label('Gejala')
                    ->relationship('gejala', 'nama_gejala') // Relasi ke model Gejala
                    ->required(),
                Select::make('kerusakan_id')
                    ->label('Kerusakan')
                    ->relationship('kerusakan', 'nama_kerusakan') // Relasi ke model Kerusakan
                    ->required(),
                TextInput::make('nilai_kepercayaan')
                    ->label('Nilai Kepercayaan')
                    ->numeric() // Pastikan input berupa angka
                    ->rule('between:0,1') // Validasi angka di antara 0 dan 1
                    ->required(),
            ]);
    }
    
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('gejala.nama_gejala')
                    ->label('Gejala')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kerusakan.nama_kerusakan')
                    ->label('Kerusakan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nilai_kepercayaan')
                    ->label('Nilai Kepercayaan')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAturans::route('/'),
            'create' => Pages\CreateAturan::route('/create'),
            'edit' => Pages\EditAturan::route('/{record}/edit'),
        ];
    }
}
