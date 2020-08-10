<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Str;
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

 public function suathongtin()
 {
  $infor=User::where('id',Auth::id())->get();
  return view('backend.updateprofile',compact('infor'));
}

public function dulieusuathongtin(Request $request)
{
  $dc=User::select('city','district','ward')->where('id',Auth::id())->first();
  $image=User::select('img')->Where('id',Auth::id())->first();
  $names=$request->name;
  $dob=$request->date;
  $gender=$request->gt;
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

  if($request->hasFile('image'))
  {
    $hinh=($request->file('image'));
    $name=$hinh->getClientOriginalName(); 
    $ten='img/'.str::random(4)."_".$name;   
    // unlink("frontend/img/".$image->img);  
    $hinh->move("frontend/img/",$ten);

  }
  else
  {
    $ten=$image->img;
  }
  User::where('id',Auth::id())->update(['name'=>$names,'dob'=>$dob,'gender'=>$gender,'city'=>$tp,'district'=>$qu,'ward'=>$ph,'img'=>$ten]);
  return redirect('admin/home');
}
}
