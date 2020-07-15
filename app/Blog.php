<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   	protected $table='blog';
    protected $fillable = ['title', 'content', 'img', 'author','datesubmitted','status'];

    public function category_blog()
    {
    	$this->belongsTo(category_blog::class,'Id_category');
    }

    public function abum_blog()
    {
    	$this->hasMany(abum_blog::class,'id','id');
    }
}

