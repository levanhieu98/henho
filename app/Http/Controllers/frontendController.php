<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Blog;
use App\category_blog;
use App\abum_blog;
use App\User;
use App\contact;
use App\review;
use App\Post;
use App\comment;
use App\Friend;
use App\Like;
use App\Image;
class frontendController extends Controller
{
  public function index()
  { 
    $review= DB::select("select * from users JOIN  review ON users.id =review.id where review.status=1 ORDER BY date DESC ");
    return view('index',compact('review'));
  }

  public function trangchu()
  {

    $trangchu= DB::select(
      "select * from users JOIN  post ON users.id =post.id where post.public=1 and post.id 
      in
      (select users.id from users where users.id in(select friends.user_id_1 as fr FROM friends WHERE friends.user_id_2 = ".Auth::id()." and friends.approved=1 union SELECT friends.user_id_2 as fr FROM friends WHERE friends.user_id_1 = ".Auth::id()." and friends.approved=1 union SELECT users.id FROM users WHERE users.id = ".Auth::id()."  ) )
      or (post.public=0 and post.id=".Auth::id().")  ORDER BY date DESC  ");



    $users=DB::select("select * from users where users.role=0 and users.id!=".Auth::id()." and users.id not in(select
      friends.user_id_1 as fr 

      FROM
      friends
      WHERE
      friends.user_id_2 = ".Auth::id()." and friends.approved=1 

      union

      SELECT
      friends.user_id_2 as fr 


      FROM
      friends
      WHERE
      friends.user_id_1 = ".Auth::id()." and friends.approved=1
    )");

    

    $like=Like::select('id_post','id_user')->get();
    $friend=Friend::select('user_id_2','user_id_1')->Where('approved',0)->get();
// dd($friend);

    return view('frontend.trangchu', compact(['trangchu','users','like','friend']));

  }

  public function lienhe()
  {
    return view('frontend.lienhe');

  }

  public function thongtinlienhe(Request $request)
  {

    $name=$request->name;
    $email=$request->email;
    $subject=$request->subject;
    $message=$request->message;
    $data=new contact();
    $data->name=$name;
    $data->email=$email;
    $data->subject=$subject;
    $data->message=$message;
    $data->date=now();
    $data->save();
    return redirect('/lienhe')->with('alert','Bạn đã gửi liên hệ thành công ');
    
  }

  public function blog()
  {
    $blog=Blog::where('status',1)->orderByDesc('datesubmitted')->paginate(4);
    $blogrd=Blog::where('status',1)->get()->random(4);
    $category=category_blog::where('Trangthai',1)->get();
    return view('frontend.blog',compact(['blog','category','blogrd']));

  }

  public function category_blog($id)
  {
   $blog=Blog::where('status',1)->where('Id_category',$id)->paginate(4);
   $blogrd=Blog::where('status',1)->get()->random(4);
   $category=category_blog::where('Trangthai',1)->get();
   return view('frontend.blog',compact(['blog','category','blogrd']));
 }

 public function detail_blog($id)
 { $blog=Blog::where('status',1)->where('id',$id)->get();
 $blognew=Blog::where('status',1)->get()->random(4);
 $abum=abum_blog::where('id',$id)->get();
 return view('frontend.detail_blog',compact(['blog','blognew','abum']));
}

public function gioithieu()
{
  return view('frontend.gioithieu');

}


public function chinhsachquyenriengtu()
{
  return view('frontend.chinhsachquyenriengtu');
  
}
public function dieukhoandichvu()
{
  return view('frontend.dieukhoandichvu');
  
}

}
