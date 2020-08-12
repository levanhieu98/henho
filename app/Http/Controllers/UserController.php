<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cache;
use Illuminate\Support\Facades\Hash;
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
class UserController extends Controller
{
	public function userOnlineStatus()
	{
		$users = DB::table('users')->get();

		foreach ($users as $user) 
		{
			if (Cache::has('user-is-online-' . $user->id))
				echo "User " . $user->name . " is online.";
			else
				echo "User " . $user->name . " is offline.";
		}
	}

	public function danhgia()
	{
		$review =review::all();
		return view('frontend.review',compact('review'));
	}

	public function dulieudanhgia(Request $request)
	{
		$request->validate([

			'text'=>'required',

		],
		[

			'text.required'=>' Vui lòng nhập đánh giá',

		]);
		$data=new review();
		$data->date=now();
		$data->content=$request->text;
		$data->status=0;
		$data->id=Auth::id();
		$data->save();
		return redirect('/danhgia')->with('alert','Cảm ơn bạn đã gửi cảm nhận của mình về website');

	}

	public function canhan()
	{
		$profile=User::where('id',Auth::id())->get();
		$post= DB::select("select * from users JOIN  post ON users.id =post.id where users.id=".Auth::id()."   ORDER BY date DESC ");
		$like=Like::select('id_post','id_user')->get();
		
		return view('frontend.trangcanhan',compact(['profile','post','like']));

	}

	public function chitietcanhan($id)
	{
		if($id==Auth::id())
		{
			return redirect('/canhan');
		}
		else
		{
			$profile=User::where('id',$id)->get();
			$post= DB::select("select * from users JOIN  post ON users.id =post.id where users.id=".$id." and public=1   ORDER BY date DESC ");
			$like=Like::select('id_post','id_user')->get();
			$friend=Friend::select('user_id_2','user_id_1')->Where('approved',0)->get();
			$friends=Friend::select('user_id_2','user_id_1')->Where('approved',1)->get();
			return view('frontend.chitietcanhan',compact(['profile','post','like','friend','friends']));
		}
	}

	public function doianhdaidien( request $request )
	{
		$request->validate([

			'anhdaidien'=>'image',
			
		],
		[

			'hinhdaidien.image'=>' Thêm thất bại File hình không hợp lệ',

		]);
		$image=User::select('img')->Where('id',Auth::id())->first();
		if($request->hasFile('anhdaidien'))
		{
			$hinh=($request->file('anhdaidien'));
			$name=$hinh->getClientOriginalName(); 
			$ten='img/'.str::random(4)."_".$name;   
    // unlink("frontend/img/".$image->img);  
			$hinh->move("frontend/img/",$ten);

		}
		else
		{
			$ten=$image->img;
		}
		User::where('id',Auth::id())->update(['img'=>$ten]);
		return redirect('/canhan');
	}
	public function suathongtin()
	{
		$infor=User::where('id',Auth::id())->get();
		return view('frontend.suathongtin',compact('infor'));
	}

	public function dulieusua(Request $request)
	{
		$dc=User::select('city','district','ward')->where('id',Auth::id())->first();
		$name=$request->name;
		$dob=$request->dob;
		$gender=$request->sex;
		$job=$request->job;
		$habit=$request->habit;
		$intro=$request->intro;
		$findlove=$request->findlove;
		$phone=$request->phone;
		$religion=$request->religion;
		if($request->thanhpho!=""&&$request->quan!=""&&$request->phuong!="")
		{
			$tp=$request->thanhpho;
			$qu=$request->quan;
			$ph=$request->phuong;
		}
		else
		{
			$tp=$dc->city;
			$qu=$dc->district;
			$ph=$dc->ward;
		}
		User::where('id',Auth::id())->update(['name'=>$name,'dob'=>$dob,'gender'=>$gender,'job'=>$job,'habit'=>$habit,'intro'=>$intro,'findlove'=>$findlove,'phone'=>$phone,'city'=>$tp,'district'=>$qu,'ward'=>$ph,'religion'=>$religion]);
		return redirect('/canhan');
	}

	public function banbe()
	{
		$yc=DB::select("select * from users where users.id in(select
			friends.user_id_1 as fr 

			FROM
			friends
			WHERE
			friends.user_id_2 = ".Auth::id()." and friends.approved=0
		)");

		$fr=DB::select("select * from users where users.id in(select
			friends.user_id_1 as fr 

			FROM
			friends
			WHERE
			friends.user_id_2 =".Auth::id()." and friends.approved=1

			union

			SELECT
			friends.user_id_2 as fr 


			FROM
			friends
			WHERE
			friends.user_id_1 = ".Auth::id()." and friends.approved=1
		)");
   // dd($yc);
		return view('frontend.banbe',compact(['yc','fr']));

	}

	public function thuvienanh(Request $rq)
	{
		$albums=DB::table('albums')->where('id',Auth::id())->get();
		

		return view('frontend.thuvienanh',compact('albums'));

	}

	public function hienthiAlbum(Request $request)
	{
		$image=image::where('id_album',$request->id_album)->get();
		return response()->json($image);
	}

	public function taoAlbum(Request $request)
	{
		$request->validate([

			'albumName'=>'required|min:6',
			'albumDescription'=>'required|min:10',
			'img_logo'=>'image',  
			'img_logo'=>'required',
		],[

			'img_logo.image'=>'Vui lòng chọn đúng file hình',
			'albumDescription.required'=>'Vui lòng nhập nội dung mô tả',
			'albumName.required'=>'Vui lòng nhập  tên album',
			'img_logo.required'=>'Vui lòng chọn ảnh cho  album',
			'albumDescription.min'=>'Nhập nội dung mô tả ít nhất 10 kí tự',
			'albumName.min'=>'Nhập tên album ít nhất 6 kí tự',
		]);

		$id_album=DB::table('albums')->insertGetId(['name_album'=>$request->albumName,'dateCreated'=>now(),'description'=>$request->albumDescription,'id'=>Auth::id()]);

		if($request->hasFile('img_logo'))
		{

			foreach ($request->file('img_logo') as $key => $value) {
				$name=$value->getClientOriginalName(); 
				$ten=str::random(4)."_".$name;   
				$value->move("frontend/img/ima2",$ten);
				$image=new Image();
				$image->name_image=$ten;
				$image->id_album=$id_album;
				$image->save();
			}
		}

		return redirect('/thuvienanh');
	}


	public function status(Request $rq)
	{
		return view('frontend.status');

	}

	public function baidang(Request $request)
	{
		$request->validate([

			'status'=>'required',
			'anhstatus'=>'image',
			
		],
		[

			'status.required'=>'Nhập nội dung bài viết',
			'anhstatus.image'=>'Vui lòng chọn đúng file hình'

		]);
		if($request->hasFile('anhstatus'))
		{
			$hinh=($request->file('anhstatus'));
			$name=$hinh->getClientOriginalName(); 
			$ten='img/'.str::random(4)."_".$name;   
			$hinh->move("frontend/img/",$ten);

		}
		else
		{
			$ten="";
		}

		$data=new Post();
		$data->image=$ten;
		$data->content=$request->status;
		$data->date=now();
		$data->public=$request->bangtin;
		$data->id=Auth::id();
		$data->save();
		return redirect('/trangchu');
	}

	public function suabaidang($id,$id_user)
	{
		$kt =DB::table('post')->where('id',$id_user)->where('id_post',$id)->first();
		if($kt!=null)
		{
			$sua=Post::where('id_post',$id)->get();
			return view('frontend.suabaidang',compact('sua'));
		}
		else
		{
			return redirect('/trangchu');
		}
	}

	public function dulieusuabaidang( Request $request,$id)
	{
		$image=DB::table('post')->select('image')->Where('id_post',$id)->first();
		$request->validate([

			'status'=>'required',
			'anhstatus'=>'image',
			
		],
		[

			'status.required'=>'Nhập nội dung bài viết',
			'anhstatus.image'=>'Vui lòng chọn đúng file hình'

		]);
		if($request->hasFile('anhstatus'))
		{
			$hinh=($request->file('anhstatus'));
			$name=$hinh->getClientOriginalName(); 
			$ten='img/'.str::random(4)."_".$name;  
    // unlink("frontend/".$image->image);   
			$hinh->move("frontend/img/",$ten);

		}
		else
		{
			$ten=$image->image;
		}
		$data=array('image'=>$ten,'content'=>$request->status,'date'=>now(),'public'=>$request->bangtin,'id'=>Auth::id());
		DB::table('post')->where('id_post',$id)->update($data);
		return redirect('/trangchu');
	}

	public function xoabaidang($id)
	{
		$kt =DB::table('comment')->where('id_post',$id)->first();
		$ktlike=DB::table('likes')->where('id_post',$id)->first();
		if($kt!=null && $ktlike!=null ||$kt!=null && $ktlike==null ||$kt==null && $ktlike!=null)
		{
			$xoalike=Like::where('id_post',$id)->delete();
			$xoabl=comment::where('id_post',$id)->delete();
			$xoa=Post::where('id',Auth::id())->where('id_post',$id)->delete();

			return redirect('/trangchu');
		}
		else
		{
			$xoa=Post::where('id',Auth::id())->where('id_post',$id)->delete();
			return redirect('/trangchu');
		}

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
			return redirect('doimatkhau')->with('error','Mật khẩu cũ không chính xác');

		}

	}

}
