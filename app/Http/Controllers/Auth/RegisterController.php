<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
    {

        if(Auth::user()->role==1){
            return '/admin/home';
        }elseif(Auth::user()->role==0){
            return '/trangchu';
        }   

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation'=> 'required|string',
            'name'=>'required|string|max:255',
            'dob'=>'required',
            'check'=>'required',
            'job'=>'required',
            'habit'=>'required',
            'intro'=>'required',
            
        ],[
           'email.required'=>'Email không được để trống',
           'check.required'=>'Chưa đồng ý điều khoản',
           'email.email'=>'Email không đúng định dạng ',
           'email.unique'=>'Email đã tồn tại',
           'password.required'=>'Mật khẩu không được để trống',
           'password.confirmed'=>'Mật khẩu không trùng khớp',
           'password.min'=>'Mật khẩu it nhất 8 kí tự',
           'password_confirmation.required'=>'Vui lòng nhập lại nhập khẩu',
           'name.required'=>'Tên không được để trống',
           'dob.required'=>'Ngày tháng năm sinh chưa có',
           'job.required'=>'Công việc không được để trống',
           'habit.required'=>'Sở thích không được để trống',
           'intro.required'=>'Giới thiệu bản thân không được để trống',
       ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    { 
        return User::create([
            'name' => $data['name'],
            'dob'=>$data['dob'],
            'gender'=>$data['sex'],
            'city'=>$data['thanhpho'],
            'district'=>$data['quan'],
            'ward'=>$data['phuong'],
            'job'=>$data['job'],
            'habit'=>$data['habit'],
            'intro'=>$data['intro'],
            'findlove'=>$data['findlove'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status'=>0,
            'role'=>0,
            'img'=>'img/user.jpg',

        ]);
    }
}
