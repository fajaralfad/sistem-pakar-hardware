<?php

namespace App\Filament\Resources\KerusakanResource\Pages;

use App\Filament\Resources\KerusakanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKerusakans extends ListRecords
{
    protected static string $resource = KerusakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
