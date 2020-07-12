<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class blog extends Controller
{
    public function blog()
    {
    	$bl=DB::table('blog')->get();
    	return view('backend.blog',compact('bl'));
    }

    public function themblog()
    {
    	return view('backend.new_blog');
    }
}
