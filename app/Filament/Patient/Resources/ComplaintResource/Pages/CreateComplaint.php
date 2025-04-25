<?php

namespace App\Filament\Patient\Resources\ComplaintResource\Pages;

use App\Filament\Patient\Resources\ComplaintResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateComplaint extends CreateRecord
{
    protected static string $resource = ComplaintResource::class;

    // Automatically set the patient_id to the authenticated user's ID
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['patient_id'] = Auth::id(); 
        return $data;
    }
}
