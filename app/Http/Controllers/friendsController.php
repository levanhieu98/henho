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
    $fr->block=0;
    $user = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->first();
    $unrequest = Friend::where('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',0)->first();
    $unfriend = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->first();
    if($unfriend)
    {
     $fr=Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->delete();
    } 
  
   else if($user )
    {
    $fr=Friend::where('user_id_2', Auth::user()->id)->where('user_id_1', '=', $request->id_user2)->update(['approved'=>1]);
    }
  else
    {
    $fr->save();
    }
  return response()->json($fr);
}

public function huyketban(Request $request)
{
 $unfriend = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->first();
 if($unfriend)
 {
   $fr=Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->delete();
 } 
 return response()->json($fr);
}

public function huyyeucau(Request $request)
{
   $fr=Friend::where('user_id_1',$request->id_user1)->where('user_id_2', $request->id_user2)->where('approved',0)->delete();
  return response()->json($fr);
}

public function huybo(Request $request)
{
   $fr=Friend::where('user_id_1',$request->id_user2)->where('user_id_2', $request->id_user1)->where('approved',0)->delete();
  return response()->json($fr);
}


public function chan(Request $request)
{
  $block = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->first();
  if($block)
  {
     $block = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->update(['block'=>Auth::id()]);
  }
  
  return response()->json('chan');

}

public function huychan(Request $request)
{
  $block = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->first();
  if($block)
  {
     $block = Friend::where('user_id_2',Auth::id())->where('user_id_1', '=', $request->id_user2)->where('approved',1)->orwhere('user_id_1',Auth::id())->where('user_id_2', '=', $request->id_user2)->where('approved',1)->update(['block'=>0]);
  }
  
  return response()->json('huychan');

}

}
