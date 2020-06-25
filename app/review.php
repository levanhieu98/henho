<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table='review';
    protected $fillable = ['name', 'date','content','status'];

 public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }
}