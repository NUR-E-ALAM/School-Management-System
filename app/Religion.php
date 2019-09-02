<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable=[
'id','religion_name'
    ];
  
	public function teacherinfo()
	{

		return $this->hasMany('App\teacherinfo');
	}
	public function addstuduent()
	{
  
	   return $this->hasMany('App\AddStudnet');
	}
  
}
