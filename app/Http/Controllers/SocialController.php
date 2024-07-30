<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $users = User::where(['email' => $userSocial->getEmail()])->first();

        if ($users) {

            $user = User::where('provider_id', $userSocial->id)->first();
            Auth::login($users);
            return redirect('/');

        } else {

            $user = User::create([
                'fullname' => $userSocial->getName(),
                'name' => $userSocial->getName(),
                'username' => $userSocial->getName() . rand(10, 100. . '2024'),
                'email' => $userSocial->getEmail(),
                'photo' => $userSocial->getAvatar(),
                'provider_id' => $userSocial->getId(),
                'provider' => $provider,
                'is_activated' => 1,
            ]);
            Session::put('provider_id', $userSocial->id);

            return redirect('/');
        }

    }

}
