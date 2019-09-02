<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $fillable=[
        'id','nation_name'
            ];

  
      	public function teacherinfo()
	{

		return $this->hasMany('App\Teacherinfo');
	}

	public function addstuduent()
	{
  
	   return $this->hasMany('App\AddStudnet');
	}
  
}
