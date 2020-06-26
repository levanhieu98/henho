<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table='profile';
	protected $fillable = ['job', 'religion','habit','phone','intro','findlove'];

	public function User()
	{
		return $this->belongsTo(User::class, 'id');
	}
}
