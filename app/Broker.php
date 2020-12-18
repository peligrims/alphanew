<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    
	protected $fillable = ['id','first_name','last_name','phone','email','description','created_at','updated_at'];
}
