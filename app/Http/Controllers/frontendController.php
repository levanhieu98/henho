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
class frontendController extends Controller
{
  public function index()
  { 
    $review= DB::select("select * from users JOIN  review ON users.id =review.id where review.status=1 ORDER BY date DESC ");
    return view('index',compact('review'));
  }

  public function trangchu()
  {
   
    $trangchu= DB::select("select * from users JOIN  post ON users.id =post.id where public=1 or (public=0 and post.id=".Auth::id().") ORDER BY date DESC ");
    $banbe=User::where('id','!=',Auth::id())->where('role',0)->get();

    return view('frontend.trangchu', compact(['trangchu','banbe']));

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
  return view('frontend.trangcanhan',compact('profile'));

}

public function chitietcanhan($id)
{
  $profile=User::where('id',$id)->get();
  $post= DB::select("select * from users JOIN  post ON users.id =post.id where users.id=".$id." and public=1   ORDER BY date DESC ");
  return view('frontend.chitietcanhan',compact(['profile','post']));
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

public function banbe(Request $rq)
{
 return view('frontend.banbe');

}

public function thuvienanh(Request $rq)
{
 return view('frontend.thuvienanh');

}

public function dulieuanh(Request $request)
{
  // $request->validate([


  //   'abumanh'=>'image',  
  // ],[

  //   'abumanh.image'=>'Vui lòng chọn đúng file hình'
  // ]);
 

 if($request->hasFile('abumanh'))
 {
  $hinh = $request->file('abumanh');
  foreach ($hinh as $file) {
   $name=$file->getClientOriginalName(); 
   $ten='img/'.str::random(4)."_".$name;   
    // unlink("frontend/img/".$image->img);  
    // $hinh->move("frontend/img/",$ten);
   var_dump($ten);
 }
}
 // return redirect('/thuvienanh');
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
  if($kt!=null)
  {
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
   return redirect('doimatkhau')->with('error','Mật khẩu cũ không chính xác');

 }

}

public function trangtimkiem()
{
  return view('frontend.ketquatimkiem');
  
}

public function search(Request $request)
{
  $keyword=$request->search;
  if ($request->ajax()) {
    $output = '';
    $result = DB::table('users')->where('habit', 'LIKE', '%' . $keyword . '%')->where('role',0)->where('id','!=',Auth::id())->get();
    if ($result->count()>0) {
      foreach ($result as $key => $value) {
       if (strpos($value->img, 'img/') !== false)
       {
        $img='frontend/'. $value->img;
      }
      else
      {
        $img=$value->img;
      }
      $output .= '<tr>
      <td>' .'<img src='.$img.' width="100" height="100"' .'>'. '</td>
      <td>' . $value->name . '</td>
      <td>' . $value->job . '</td>
      <td>' . $value->intro . '</td>
      <td>' . $value->habit . '</td>
      <td>' . $value->findlove . '</td>
      <td>' . '<button class="btn btn-outline-info sm-1 bt" onclick="test(event)" id="'.$value->id.'" >Kết bạn</button>'
      . '</td>
      </tr>'; 
    }
  }
  else
  {
    echo "'<td colspan=7 style='text-align:center;font-size:20px;color:red '>Không tìm thấy </td>'";
  }

  return Response($output);
}

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
