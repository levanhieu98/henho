<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Friend;

class friendsController extends Controller
{
    public function ketban(Request $request)
    {
    	 $fr=new Friend();
    	 $fr->user_id_1=$request->id_user1;
    	 $fr->user_id_2=$request->id_user2;
    	 $user = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->first();
    	 if($user )
    	 {
    	 	 $fr=Friend::where('user_id_2', '=', Auth::user()->id)->update(['approved'=>1]);
    	 }
    	 else
    	 {
    	 	 $fr->save();
    	 }
    	 return response()->json($fr);
    }

    // 
}
