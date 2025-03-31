<?php

namespace App\Filament\Triad\Resources\TriadResource\Pages;

use App\Filament\Triad\Resources\TriadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTriads extends ListRecords
{
    protected static string $resource = TriadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
