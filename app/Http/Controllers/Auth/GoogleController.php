<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class GoogleController extends Controller
{
     public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
/**
     * Return a callback method from google api.
     *
     * @return callback URL from google
     */
    public function callback()
    {
        $user = Socialite::driver('google')->user();
      $user = User::firstOrCreate([
                    'email' => $user->email
                ], [
                    'name' => $user->name,
                    'password' => Hash::make(Str::random(24)),
                    'email_verified_at' =>now(),
                    'img'=>$user->avatar,
                    'role'=>0,
                    'status'=>0,
                ]);
                Auth::login($user, true);
                return redirect('/trangchu');
        
    }
}
