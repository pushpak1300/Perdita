<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Inertia\Inertia;
use Inertia\Response;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function login(): Response
    {
        return Inertia::render('Auth/Login');
    }

    public function googleRedirect(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('logout');
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::firstOrCreate([
            'oauth_id' => $googleUser->getId(),
            'oauth_provider' => 'google',
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'avatar' => $googleUser->getAvatar()
        ]);
        Auth::login($user);
        return redirect('/');
    }
}
