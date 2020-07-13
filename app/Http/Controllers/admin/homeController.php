<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lienhe= DB::select('select date from contact where Date(date)= ?',[date("Y-m-d")]);
        $danhgia= DB::select('select date from review where Date(date)= ?',[date("Y-m-d")]);
        return view('backend.home')->with(['lienhe'=>count( $lienhe),'danhgia'=>count($danhgia)]);
    }


}
