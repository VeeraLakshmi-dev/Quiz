<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

class CheckLoginAfterAuth
{
    public function handle(Login $event): void
    {
        $user = $event->user;

        if ($user->role === 'user' && (int)$user->can_login === 0) {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            redirect('/submitted')->send(); // Force redirect now
            exit; // Stop further execution
        }
    }
}
