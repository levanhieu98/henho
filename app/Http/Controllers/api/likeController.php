<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Like;

class likeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    	$kt = Like::where('id_user',$request->id_user)->where('id_post', $request->id_post)->first();
    	$data=new Like();
    	$data->id_post=$request->id_post;
    	$data->id_user=$request->id_user;
    	if($kt)
    	{
    		Like::where('id_user',$request->id_user)->where('id_post', $request->id_post)->delete();
    	}
    	else
    	{
    		$data->save();
    	}

        $count=Like::where('id_post',$request->id_post)->count('id_post');

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $count=Like::where('id_post',$id)->count('id_post');
           return response()->json($count);
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

    }
}
