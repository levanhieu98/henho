<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contact extends Controller
{
    public function contact()
    {
    	$contact=DB::table('contact')->get();
    	return view('backend.contact',compact('contact'));
    }
}
