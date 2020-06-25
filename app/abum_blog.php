<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abum_blog extends Model
{
    protected $table='abum_blog';
     protected $fillable = ['image_blog'];
      public function blog()
    {
    	$this->belongsTo(blog::class,'id');
    }
}
