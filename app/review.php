<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{	public $timestamps=false;
    protected $table='review';
    protected $fillable = ['name', 'date','content','status','id'];

 public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }
}