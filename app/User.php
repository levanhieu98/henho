<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Blog;
use App\Friend;
use App\Like;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,'dob','gender','religion','phone' ,'city','district','ward','job','habit','intro','findlove','email','password','status','role','img','email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this->hasMany(Post::class,'id_post','id_post');
    }

    public function likes() {
        return $this->hasMany('App\Like');
    }

    public function friends() {
        return $this->hasMany('App\Friend', 'user_id_1','id');
    }
    public function friends1() {
        return $this->hasMany('App\Friend', 'user_id_2','id');
    }
}
