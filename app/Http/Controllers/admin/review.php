<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class review extends Controller
{
    public function review()
    {	$review=DB::table('review')->get();
    	return view('backend.review',compact('review'));
    }
}
