<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
      public function dsuser()
    {
        return view('backend.listUser');
    }
}
