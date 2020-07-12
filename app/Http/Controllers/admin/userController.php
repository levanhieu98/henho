<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
      public function dsuser()
    {
    	$user=DB::table('users')->where('role',0)->get();
        return view('backend.listUser',compact('user'));
    }
}
