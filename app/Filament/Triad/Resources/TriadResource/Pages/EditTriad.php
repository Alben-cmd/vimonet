<?php

namespace App\Filament\Triad\Resources\TriadResource\Pages;

use App\Filament\Triad\Resources\TriadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTriad extends EditRecord
{
    protected static string $resource = TriadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
