<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{	public $timestamps=false;
	protected $table='post';
	protected $fillable = ['content', 'image','public','date','id'];
	public function User()
	{
		return $this->belongsTo(User::class, 'id');
	}
}
