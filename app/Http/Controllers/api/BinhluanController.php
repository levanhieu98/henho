<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\comment;
use Illuminate\Support\Facades\Auth;

class BinhluanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index()
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

      $data=new comment();
      $data->content=$request->content;
      $data->id_post=$request->id_post;
      $data->date=now();
      $data->id_user=$request->id_user;
      $data->images=$request->img;
      $data->save();
      $binhluan=comment::where('id_cha',null)->where('id_post',$request->id_post)->skip($request->kq)->take(5)->get();
        return response()->json($binhluan);

  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $binhluan=comment::where('id_cha',null)->where('id_post',$id)->skip($request->kq)->take(5)->get();
        return response()->json($binhluan);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
