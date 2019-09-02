<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $fillable =[
        'id','active_name'
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
