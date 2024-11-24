<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GejalaResource\Pages;
use App\Models\Gejala;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Table;

class GejalaResource extends Resource
{
    protected static ?string $model = Gejala::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama_gejala')
                    ->label('Nama Gejala')
                    ->required(),
                Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_gejala')
                    ->label('Nama Gejala')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50),
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
            'index' => Pages\ListGejalas::route('/'),
            'create' => Pages\CreateGejala::route('/create'),
            'edit' => Pages\EditGejala::route('/{record}/edit'),
        ];
    }
}
