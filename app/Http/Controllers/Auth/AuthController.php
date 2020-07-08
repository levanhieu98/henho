<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Socialite;
use Laravel\Socialite\Facades\Socialite;
use User;

class AuthController extends Controller
{
	public function redirectToFacebook()
	{
		return Socialite::driver('facebook')->redirect();
	}

	public function handleFacebookCallback()
	{
		
		$user = Socialite::driver('facebook')->user();
		// dd($user);
		$user = User::firstOrCreate([
			'email' => $user->email
		], [
			'name' => $user->name,
			'password' => Hash::make(Str::random(24)),
			'email_verified_at' =>now(),
			'img'=>$user->avatar,
			'role'=>0,
		]);
		Auth::login($user, true);
		return redirect('/trangchu');
	}
}
