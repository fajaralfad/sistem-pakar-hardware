<?php

namespace App\Filament\Resources\KerusakanResource\Pages;

use App\Filament\Resources\KerusakanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKerusakan extends EditRecord
{
    protected static string $resource = KerusakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
