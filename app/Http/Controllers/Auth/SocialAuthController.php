<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::where('email', $googleUser->getEmail())->first();

        if (! $user) {
            $user = User::create([
                'name'              => $googleUser->getName() ?? $googleUser->getNickname(),
                'email'             => $googleUser->getEmail(),
                'avatar'            => $googleUser->getAvatar(),  
                'email_verified_at' => now(),
                'password'          => bcrypt(Str::random(24)),
            ]);

             // Assign default role
        if ($user->wasRecentlyCreated) {
            $user->assignRole('user'); // or 'super-admin' for first user
        }

        if (is_null($user->email_verified_at)) {
            $user->markEmailAsVerified();
           }
        }

         Auth::login($user, true);

         if ($user->hasRole('editor') || $user->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
        }else {
        return redirect()->route('home');
      }
        
    }
}