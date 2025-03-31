<?php

namespace App\Http\Responses;

use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
use Filament\Http\Responses\Auth\LoginResponse as BaseLoginResponse;

class LoginResponse extends BaseLoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {

        if (auth()->user()->role_id == 2) {
            return redirect()->to(Dashboard::getUrl(panel: 'patient'));
        }

        if (auth()->user()->role_id == 3) {
            return redirect()->to(Dashboard::getUrl(panel: 'specialist'));
        }

        if (auth()->user()->role_id == 4) {
            return redirect()->to(Dashboard::getUrl(panel: 'triad'));
        }

        return parent::toResponse($request);
    }
}
