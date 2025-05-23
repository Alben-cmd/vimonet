<?php

namespace App\Http\Responses;

use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Filament\Http\Responses\Auth\LogoutResponse as BaseLogoutResponse;


class LogoutResponse extends BaseLogoutResponse
{
    public function toResponse($request): RedirectResponse
    {
        if (Filament::getCurrentPanel()->getId() === 'patient' || Filament::getCurrentPanel()->getId() === 'specialist'  || Filament::getCurrentPanel()->getId() === 'triad') {
            return redirect()->to(Filament::getLoginUrl());
        }

        return parent::toResponse($request);
    }

}
