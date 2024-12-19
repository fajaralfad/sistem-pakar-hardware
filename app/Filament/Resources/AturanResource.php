<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AturanResource\Pages;
use App\Models\Aturan;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class AturanResource extends Resource
{
    protected static ?string $model = Aturan::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Aturan';
    protected static ?string $modelLabel = 'Aturan';
    protected static ?string $pluralModelLabel = 'Aturan';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('gejala_id')
                            ->label('Gejala')
                            ->relationship('gejala', 'nama_gejala')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->placeholder('Pilih gejala')
                            ->columnSpan('full'),
                            
                        Select::make('kerusakan_id')
                            ->label('Kerusakan')
                            ->relationship('kerusakan', 'nama_kerusakan')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->placeholder('Pilih kerusakan')
                            ->columnSpan('full'),
                            
                        TextInput::make('nilai_kepercayaan')
                            ->label('Nilai Kepercayaan')
                            ->numeric()
                            ->rule('between:0,1')
                            ->required()
                            ->placeholder('Masukkan nilai antara 0 dan 1')
                            ->hint('Nilai harus di antara 0 dan 1')
                            ->columnSpan('full'),
                    ])
                    ->columns(1)
            ]);
    }
    
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('kerusakan.nama_kerusakan')
                    ->label('Kerusakan')
                    ->sortable()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('gejala.nama_gejala')
                    ->label('Gejala')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                    
                TextColumn::make('nilai_kepercayaan')
                    ->label('Nilai Kepercayaan')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => number_format($state, 2))
                    ->alignment('center'),
            ])
            ->defaultSort('kerusakan.nama_kerusakan', 'asc')
            ->filters([
                //
            ])
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
            'index' => Pages\ListAturans::route('/'),
            'create' => Pages\CreateAturan::route('/create'),
            'edit' => Pages\EditAturan::route('/{record}/edit'),
        ];
    }
}
