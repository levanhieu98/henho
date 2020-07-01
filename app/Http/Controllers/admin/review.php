<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class review extends Controller
{
    public function review()
    {
    	return view('backend.review');
    }
}
