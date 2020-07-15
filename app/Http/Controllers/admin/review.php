<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class review extends Controller
{
	public function review()
	{	$review=DB::table('review')->get();
	return view('backend.review',compact('review'));
}

public function duyetreview($id)
{
	DB::table('review')->where('Id_review', $id)->update(['status'=>1]);
	return redirect('admin/review')->with('alert', 'Đã duyệt bình luận');
}

public function xoareview($id)
{
	DB::table('review')->where('Id_review', $id)->delete();
	return redirect('admin/review')->with('alert', 'Xóa thành công');
}

}
