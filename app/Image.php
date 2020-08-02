<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public $timestamps=false;
	protected $table='images';
	protected $fillable = ['name_image', 'id_album'];

	public function Album()
	{
		return $this->belongsTo(Album::class, 'id_album');
	}
}
