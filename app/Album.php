<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $table='albums';
	protected $fillable = ['name_album', 'dateCreated', 'description', 'id'];
	
	public function User()
	{
		return $this->belongsTo(User::class, 'id');
	}
	public function album_image()
	{
		$this->hasMany(Image::class,'id_album','id_album');
	}
}
