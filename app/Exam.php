<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable=[
        'id',
        'classexamname',
        'examstart',
        'examend' ,       
        'active_id'        
    ];

    public function addstuduent()
	{
  
		return $this->hasMany('App\AddStudnet');
	}
}
