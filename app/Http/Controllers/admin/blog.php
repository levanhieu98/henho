<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\category_blog;
class blog extends Controller
{
	public function blog()
	{
		$bl=DB::table('blog')->get();
		return view('backend.blog',compact('bl'));
	}

	public function themblog()
	{	$category_blog=category_blog::all();
		return view('backend.new_blog',compact('category_blog'));
	}

	public function dulieublog(Request $request)
	{
		$request->validate([
			'Tieude'=>'required|unique:blog,title|min:10|max:255',
			'Hinhdaidien'=>'image|required',
			'Mota'=>'required|min:10|max:255',
			'Noidung'=>'required|min:10',
			'Ngaydangtin'=>'required',
			'Tacgia'=>'required',
		],
		[

			'Tieude.required'=>"Thêm thất bại tiều đề chưa nhập",
			'Hinhdaidien.required'=>"Thêm thất bại hình đại diện chưa có",
			'Hinhdaidien.image'=>' Thêm thất bại File hình không hợp lệ',
			'Mota.required'=>"Thêm thất bại mô tả chưa nhập",
			'Noidung.required'=>"Thêm thất bại nội dung chưa nhập",
			'Ngaydangtin.required'=>"Thêm thất bại ngày chưa được chọn",
			'Tacgia.required'=>"Thêm thất bại tác giả chưa nhập",
			'Tieude.unique'=>"Thêm thất bại tiêu đề đã tồn tại",
			'Tieude.min'=>"Thêm thất bại tiều đề ít nhất 10 kí tự",
			'Noidung.min'=>"Thêm thất bại nội dung ít nhất 100 kí tự",
			'Mota.min'=>"Thêm thất bại mô tả ít nhất 10 kí tự",
		]);
		$id=$request->id;
		$td=$request->Tieude;
		$mt=$request->Mota;
		$nd=$request->Noidung;
		$ngay=$request->Ngaydangtin;
		$tg=$request->Tacgia;
		$trangthai=$request->AnHien;
		if($request->hasFile('Hinhdaidien'))
		{
			$hinh=($request->file('Hinhdaidien'));
			$name=$hinh->getClientOriginalName();
			$ten='img/'.str::random(4)."_".$name;      
			$hinh->move("frontend/img/",$ten);
		}
		$data=array('title'=>$td,'img'=>$ten,'descriptive'=>$mt,'content'=>$nd,'datesubmitted'=>$ngay,'author'=>$tg,'Id_category'=>$id,'status'=>$trangthai);
		DB::table('blog')->insert($data);
		return redirect('admin/blog')->with('alert','Thêm thành công');
	}


	public function suablog($id)
	{	$category_blog=category_blog::all();
		$category_id=DB::table('blog')->where('id',$id)->get();
		return view('backend.update_blog',compact(['category_blog','category_id']));
	}

	public function dulieusuab(Request $request,$id)
	{
		$image=DB::table('blog')->select('img')->Where('id',$id)->first();
		$request->validate([
			'Tieude'=>'required|min:10|max:255',
			'Hinhdaidien'=>'image',
			'Mota'=>'required|min:10|max:255',
			'Noidung'=>'required|min:10',
			'Ngaydangtin'=>'required',
			'Tacgia'=>'required',
		],
		[

			'Tieude.required'=>"Thêm thất bại tiều đề chưa nhập",
			'Hinhdaidien.image'=>' Thêm thất bại File hình không hợp lệ',
			'Mota.required'=>"Thêm thất bại mô tả chưa nhập",
			'Noidung.required'=>"Thêm thất bại nội dung chưa nhập",
			'Ngaydangtin.required'=>"Thêm thất bại ngày chưa được chọn",
			'Tacgia.required'=>"Thêm thất bại tác giả chưa nhập",
			'Tieude.unique'=>"Thêm thất bại tiêu đề đã tồn tại",
			'Tieude.min'=>"Thêm thất bại tiều đề ít nhất 10 kí tự",
			'Noidung.min'=>"Thêm thất bại nội dung ít nhất 100 kí tự",
			'Mota.min'=>"Thêm thất bại mô tả ít nhất 10 kí tự",
		]);
		$id=$request->id;
		$td=$request->Tieude;
		$mt=$request->Mota;
		$nd=$request->Noidung;
		$ngay=$request->Ngaydangtin;
		$tg=$request->Tacgia;
		$trangthai=$request->AnHien;
		if($request->hasFile('Hinhdaidien'))
		{
			$hinh=($request->file('Hinhdaidien'));
			$name=$hinh->getClientOriginalName();
			$ten='img/'.str::random(4)."_".$name;      
			$hinh->move("frontend/img/",$ten);
		}
		else
		{
			$ten=$image->img;
		}
		$data=array('title'=>$td,'img'=>$ten,'descriptive'=>$mt,'content'=>$nd,'datesubmitted'=>$ngay,'author'=>$tg,'Id_category'=>$id,'status'=>$trangthai);
		DB::table('blog')->where('id',$id)->update($data);
		return redirect('admin/blog')->with('alert','Sửa thành công');
	}

	public function xoablog($id,$idloai)
	{
		$dem=DB::table('blog')->where('Id_category',$idloai)->count('id'); 
		if($dem>1)
		{ 
			DB::table('blog')->where('id',$id)->delete();
			return redirect('admin/blog')->with('alert','Xóa thành công');
		}
		else
		{
			return redirect('admin/blog')->with('error','Xóa thất bại blog không thể rỗng');
		}
	}
}
