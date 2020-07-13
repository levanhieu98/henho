<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function doimatkhau()
    {
    	return view ('backend.resetpassword');
    }

    public function matkhaumoi(Request $request)
    {
    	$request->validate([
       'password'=>'required|confirmed' ,
       'password_confirmation'=>'required|min:8' ,
       'password_cu'=>'required'
     ],
     [
      'password.required'=>'Chưa nhập mật khẩu ', 
      'password_cu.required'=>'Chưa nhập mật khẩu cũ ',
      'password_confirmation.required'=>'Chưa nhập mật khẩu ', 
      'password_confirmation.min'=>'Mật khẩu mới ít nhất 8 kí tự',
      'password.confirmed'=>'Không trùng khớp ',  
    ]);
    	  $mkmoi=Hash::make($request->password);
      $mkcu=$request->password_cu; 
      if(Hash::check($mkcu,Auth::user()->password))
      {
         $reset=DB::table('users')->where('id',Auth::id())->update(['password'=>$mkmoi]);
            return redirect('/logout');
      }
      else
      {
         return redirect('admin/doimatkhau')->with('error','Mật khẩu cũ không chính xác');
       
      }
    }
}
