<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class userController extends Controller
{
	public function dsuser()
	{
		$user=DB::table('users')->where('role',0)->get();
		return view('backend.listUser',compact('user'));
	}

	public function khoataikhoan($id)
	{
		user::where('id',$id)->delete();
		return redirect('admin/dsuser')->with('alert','Đã xóa tài khoản');
	}

	public function dsadmin()
	{
		$user=DB::table('users')->where('id','!=',Auth::id())->where('role',1)->get();
		return view('backend.listAdmin',compact('user'));
	}

	public function themquantri()
	{
		return view('backend.new_admin');
	}

	public function dthemquantri(Request $request)
	{
		$request->validate([

			'email'=>'required|unique:users,email',
			'name'=>'required',
			'date'=>'required',
			'password'=>'required|confirmed' ,
			'password_confirmation'=>'required|min:8' ,


		],
		[

			'email.required'=>'Chưa nhập email',
			'email.unique'=>'Email đã tồn tại',
			'date.required'=>'Chưa nhập ngày sinh',
			'name.required'=>'Chưa nhập tên',
			'password.required'=>'Chưa nhập mật khẩu ', 
			'password_confirmation.required'=>'Chưa nhập mật khẩu ', 
			'password_confirmation.min'=>'Mật khẩu mới ít nhất 8 kí tự',
			'password.confirmed'=>'Không trùng khớp ',  


		]);
		$data=new User();
		$data->email=$request->email;
		$data->name=$request->name;
		$data->dob=$request->date;
		$data->gender=$request->gt;
		$data->password=Hash::make($request->password);
		// $data->email_verified_at=now();
		$data->role=1;
		$data->save();
		return redirect('admin/themquantri')->with('alert','Thêm thành công');


	}

	public function xoaadmin($id)
	{
		User::where('id',$id)->where('role',1)->delete();
		return redirect('admin/dsadmin')->with('alert','Xóa thành công');
	}
}
