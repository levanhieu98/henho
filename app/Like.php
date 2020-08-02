<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

	public $timestamps=false;
	protected $table='likes';
	protected $fillable = ['id_post', 'id_user'];
	public function user() {
		return $this->belongsTo(User::class,'id_user');
	}
	public function post() {
		return $this->belongsTo(Post::class,'id_post');
	}
}
