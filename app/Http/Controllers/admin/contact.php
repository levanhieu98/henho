<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact extends Controller
{
    public function contact()
    {
    	return view('backend.contact');
    }
}
