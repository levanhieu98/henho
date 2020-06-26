<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Blog;
use App\category_blog;
use App\abum_blog;
use App\User;
use App\contact;
use App\review;
use App\Profile;
class frontendController extends Controller
{
    public function index()
    { 
      $review= DB::select("select * from users JOIN  review ON users.id =review.id ORDER BY date DESC ");
    	return view('index',compact('review'));
    }

    public function trangchu()
    {
    	return view('layouts.home');
    	
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
      $data->save();
     return redirect('/lienhe')->with('alert','Bạn đã gửi liên hệ thành công ');

      
    }

    public function blog()
    {
      $blog=Blog::orderByDesc('datesubmitted')->paginate(4);
      $blogrd=Blog::get()->random(4);
     $category=category_blog::all();
      return view('frontend.blog',compact(['blog','category','blogrd']));
      
    }

    public function category_blog($id)
    {
       $blog=Blog::where('Id_category',$id)->paginate(4);
        $blogrd=Blog::get()->random(4);
         $category=category_blog::all();
        return view('frontend.blog',compact(['blog','category','blogrd']));
    }

    public function detail_blog($id)
    { $blog=Blog::where('id',$id)->get();
      $blognew=Blog::get()->random(4);
      $abum=abum_blog::where('id',$id)->get();
      return view('frontend.detail_blog',compact(['blog','blognew','abum']));
    }

    public function gioithieu()
    {
      return view('frontend.gioithieu');
      
    }

    public function canhan()
    {
      $profile=User::where('id',Auth::id())->get();
      $profile1=Profile::where('id',Auth::id())->get();
    	return view('frontend.trangcanhan',compact(['profile','profile1']));
    	
    }

     public function banbe(Request $rq)
    {
    	return view('frontend.banbe');
    	
    }

     public function thuvienanh(Request $rq)
    {
    	return view('frontend.thuvienanh');
    	
    }

    public function status(Request $rq)
    {
    	return view('frontend.status');
    	
    }

     public function caidat(Request $rq)
    {
    	return view('frontend.caidat');
    	
    }

     public function doimk()
    {
    	 return view('auth.passwords.changepassword');
    	
    }
       function capnhat(Request $requests)
    {
      $requests->validate([
       'password'=>'required|min:8|confirmed',
       'password_confirmation'=>'required' ,
       'mkcu'=>'required',
     ],
     [
     'password.min'=>'Mật khẩu mới ít nhất 8 kí tự',
      'password.confirmed'=>'Mật khẩu không trùng khớp ',  
      'password.required'=>'Chưa nhập mật khẩu mới ', 
      'mkcu.required'=>'Chưa nhập mật khẩu cũ ',
      'password_confirmation.required'=>'Chưa nhập mật khẩu mới ', 
      
    ]);
      
      $mkmoi=Hash::make($requests->password);
      $mkcu=$requests->mkcu; 
      if(Hash::check($mkcu,Auth::user()->password))
      {
         $reset=DB::table('users')->where('id',Auth::id())->update(['password'=>$mkmoi]);
            return redirect('/logout');
      }
      else
      {
         return redirect('doimk')->with('error','Mật khẩu cũ không chính xác');
       
      }

    }


}
