<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable =[
'gender_name','id'
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
