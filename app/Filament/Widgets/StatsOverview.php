<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Solusi;
use App\Models\Aturan;
use Carbon\Carbon;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '15s';

    protected function getStats(): array
    {
        $yesterday = Carbon::now()->subDay();
        
        return [
            Stat::make('Total Gejala', Gejala::count())
                ->description('Jumlah gejala yang terdaftar')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('success')
                ->chart([7, 4, 6, 8, 5, 9, 10])
                ->extraAttributes([
                    'class' => 'cursor-pointer transition hover:scale-105',
                ]),

            Stat::make('Total Kerusakan', Kerusakan::count())
                ->description('Kerusakan yang tercatat di sistem')
                ->descriptionIcon('heroicon-o-exclamation-triangle')
                ->color('danger')
                ->chart([3, 5, 4, 7, 5, 8, 6])
                ->extraAttributes([
                    'class' => 'cursor-pointer transition hover:scale-105',
                ]),

            Stat::make('Total Solusi', Solusi::count())
                ->description('Solusi yang tersedia')
                ->descriptionIcon('heroicon-o-light-bulb')
                ->color('info')
                ->chart([8, 6, 9, 7, 10, 8, 9])
                ->extraAttributes([
                    'class' => 'cursor-pointer transition hover:scale-105',
                ]),

            Stat::make('Total Aturan', Aturan::count())
                ->description('Basis aturan inferensi')
                ->descriptionIcon('heroicon-o-command-line')
                ->color('primary')
                ->chart([5, 7, 6, 8, 7, 9, 8])
                ->extraAttributes([
                    'class' => 'cursor-pointer transition hover:scale-105',
                ]),
        ];
    }

    protected function getColumns(): int
    {
        return 2;
    }
}