<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
	public $timestamps=false;
    protected $table='contact';
    protected $fillable = ['name', 'email', 'subject', 'message','date','status'];
}
