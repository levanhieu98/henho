<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blog extends Controller
{
    public function blog()
    {
    	return view('backend.blog');
    }

    public function themblog()
    {
    	return view('backend.new_blog');
    }
}
