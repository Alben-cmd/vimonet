<?php

namespace App\Filament\Specialist\Resources\SpecialistResource\Pages;

use App\Filament\Specialist\Resources\SpecialistResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecialists extends ListRecords
{
    protected static string $resource = SpecialistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
