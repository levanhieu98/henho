<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Message;
use Pusher\Pusher;

class messagesController extends Controller
{
	public function messages()
	{
		// $users= DB::select("select users.id, users.name, users.img, users.email, count(is_read) as unread 
  //     from users  LEFT JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = ".Auth::id() ."
  //     where role= 0 and users.id != " . Auth::id().  " and users.gender!=".Auth::user()->gender."
  //     group by users.id, users.name, users.img, users.email");

   $users=DB::select(" select users.id, users.name, users.img, users.email, count(is_read) as unread  from users LEFT JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to =".Auth::id()."
     where  users.id in(select
     friends.user_id_1 as fr 

     FROM
     friends
     WHERE
     friends.user_id_2 = ".Auth::id()." and friends.approved=1 and friends.block=0

     union

     SELECT
     friends.user_id_2 as fr 


     FROM
     friends
     WHERE
     friends.user_id_1 = ".Auth::id()." and friends.approved=1 and friends.block=0

   ) group by users.id, users.name, users.img, users.email");

   // dd($users);

    return view('frontend/messages',compact('users'));
 }

 public function contentmassage($user_id)
 {	 $my_id = Auth::id();
    	 // $messages =Message::where(function ($query) use ($user_id, $my_id) {
      //       $query->where('from', $user_id)->where('to', $my_id);
      //   })->oRwhere(function ($query) use ($user_id, $my_id) {
      //       $query->where('from', $my_id)->where('to', $user_id);
      //   })->get();
   Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);
   $messages=Message::where('from', $user_id)->where('to', $my_id)->orwhere('from', $my_id)->where('to', $user_id)->get();
   return view('frontend.contentMessage',compact('messages'));
 }

 public function sendmassges(Request $request)
 {
  $from = Auth::id();
  $to =$request->receiver_id;
  $message = $request->message;
  $data = new Message();
  $data->from = $from;
  $data->to =(int)$to;
  $data->message =$message;
  $data->is_read = 0; 
  $data->save();	
		//pusher
        // pusher
  $options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );

  $pusher = new Pusher(
    env('PUSHER_APP_KEY'),
    env('PUSHER_APP_SECRET'),
    env('PUSHER_APP_ID'),
    $options
  );

        $data = ['from' =>$from, 'to' =>(int)$to]; // sending from and to user id when pressed enter
         // return response()->json( $pusher->trigger('my-channel','my-event', $data));
        $pusher->trigger('my-channel','my-event', $data);
        
      }

      public function ketquatimkiem(Request $request)
      {  $output='';
       // $data =User::where('name','like','%'.$request->key.'%')->where('role',0)->where('id','!=',Auth::id())->get();
       // $output = ' <ul class="users"  >';
       //      foreach($data as $row)
       //      {
       //       $output .=
       //       '<li class="user" id="'.$row->id.'">'. '<div class="media" >'.'<div class="media-left">'.
       //         // if (strpos($row->img, 'https://graph.facebook.com') !== false) 
       //         // {
       //         //  '<img src="'.$row->img.'" class="media-object" alt="">';
       //         // }
       //         // else{
       //       '<img src="'.'frontend/'.$row->img.'"class="img-fluid">'.'</div>'.
       //        // }
       //       '<div class="media-body">'.
       //       '<p class="name">'.$row->name.'</p>'.
       //       ' <p class="email">'.$row->email.'</p>'.
       //       ' </div>'.'</div>'.
       //       '</li>';


       //      }
       //     $output .= '</ul>';
       //    return response($output)  ;
    }  

  }
