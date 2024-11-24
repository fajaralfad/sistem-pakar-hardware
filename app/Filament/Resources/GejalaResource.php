<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GejalaResource\Pages;
use App\Models\Gejala;
use Filament\Forms;
use Filament\Forms\Components\Card;
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

    // Ikon yang lebih relevan
    protected static ?string $navigationIcon = 'heroicon-o-exclamation-circle';

    // Mengubah label navigasi
    protected static ?string $navigationLabel = 'Gejala';
    protected static ?string $modelLabel = 'Gejala';
    protected static ?string $pluralModelLabel = 'Gejala';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_gejala')
                            ->label('Nama Gejala')
                            ->required()
                            ->placeholder('Masukkan nama gejala')
                            ->columnSpan('full'),

                        Textarea::make('keterangan')
                            ->label('Keterangan')
                            ->placeholder('Tambahkan keterangan (opsional)')
                            ->rows(4)
                            ->columnSpan('full'),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_gejala')
                    ->label('Nama Gejala')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                    
                TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50)
                    ->wrap(),
            ])
            ->defaultSort('nama_gejala', 'asc')
            ->actions([
                Tables\Actions\EditAction::make()
                    ->iconButton(),
                Tables\Actions\DeleteAction::make()
                    ->iconButton(),
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
