<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class category_blog extends Controller
{
    public function loaiBlog()
    {
    	return view('backend.category_blog');
    }

    public function themloaiBlog()
    {
    	return view('backend.new_category');
    }
}
