<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class contact extends Controller
{
    public function contact()
    {
    	$contact=DB::table('contact')->get();
    	return view('backend.contact',compact('contact'));
    }

    public function xuly(Request $request)
    {
    	$id=$request->id;
        $email=DB::table('contact')->select('email')->where('id',$id)->first();
        DB::table('contact')->where('id',$id)->update(['status'=>1]);
        foreach ($email as $value) {

            Mail::send('backend.mailcontact',['name'=>'Dear bạn','content'=>'HenhoSTU.online đã nhận được liên hệ của bạn và đã được chúng tôi xử lý thành công.Bạn có thể liên hệ trực tiếp với chúng tôi thông qua Email:hieu.dh51601561@gmail.com.Cảm ơn bạn chúc bạn một ngày tốt lành! '], function($message) use($value){
                $message->to($value);
                $message->subject('HenhoSTU.online phản hồi!');
            });
        }

        return response()->json($email);
        // return redirect('/admin/contact');

    }

    public function xoalienhe($id)
    {    DB::table('contact')->where('id',$id)->where('status',0)->delete();
        return redirect('admin/contact');
    }
}
