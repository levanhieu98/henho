<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class category_blog extends Controller
{
	public function loaiBlog()
	{
		$category=DB::table('category_blog')->get();
		return view('backend.category_blog',compact('category'));
	}

	public function themloaiBlog()
	{
		return view('backend.new_category');
	}

	public function dulieuloai(Request $request)
	{
		
		$request->validate([

			'category_blog'=>'required|unique:category_blog,Ten_category|min:4',

		],
		[

			'category_blog.required'=>'Vui lòng nhập loại blog',
			'category_blog.min'=>'Tên ít nhất 4 kí tự',
			 'category_blog.unique'=>"Thêm thất bại loại blog đã tồn tại",

		]);

		$data=array('Ten_category'=>$request->category_blog,'Trangthai'=>$request->AnHien);
		DB::table('category_blog')->insert($data);
		return redirect('/admin/themloaiBlog')->with('alert','Thêm thành công');
	}

	public function dulieusua(Request $request,$id)
	{
		$request->validate([

			'category_blog'=>'required|min:4',

		],
		[

			'category_blog.required'=>'Vui lòng nhập loại blog',
			'category_blog.min'=>'Tên ít nhất 4 kí tự',

		]);
		$data=array('Ten_category'=>$request->category_blog,'Trangthai'=>$request->AnHien);
		DB::table('category_blog')->where('Id_category',$id)->update($data);
		return	redirect('/admin/loaiBlog')->with('alert','Sữa thành công');
	}

	public function sualoai($id)
	{
		$loai=DB::table('category_blog')->where('Id_category',$id)->get();
		return view('backend.update_category',compact('loai'));
	}

	public function xoaloai($id)
	{
		$kt =DB::table('blog')->where('Id_category',$id)->first();
		if($kt != null)
		{
			return redirect('/admin/loaiBlog')->with('error','Không thể xóa loại blog này ');
		}
		else
		{
			DB::table('category_blog')->where('Id_category',$id)->delete();
			return redirect('/admin/loaiBlog')->with('alert','Xóa thành công');
		}
		
	}
}
