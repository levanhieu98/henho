<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cache;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
	public function userOnlineStatus()
	{
		$users = DB::table('users')->get();

		foreach ($users as $user) 
		{
			if (Cache::has('user-is-online-' . $user->id))
				echo "User " . $user->name . " is online.";
			else
				echo "User " . $user->name . " is offline.";
		}
	}
}
