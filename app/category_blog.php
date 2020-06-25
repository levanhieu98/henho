<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_blog extends Model
{
	protected $table='category_blog';
	protected $fillable = ['Ten_category', 'Trangthai'];
	public function blog()
    {
    	$this->hasMany(blog::class,'Id_category','Id_category');
    }

}
