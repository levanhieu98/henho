<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $timestamps=false;
	protected $table='comment';
	protected $fillable = ['id_user','images', 'content','date','id_post','id_cha'];
	
}
