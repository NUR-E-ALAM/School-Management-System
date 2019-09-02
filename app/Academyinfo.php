<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academyinfo extends Model
{
    protected $fillable=[

        'id','student_id', 'user_id', 'session_id', 'section_id', 'class_id', 'shift_id', 'reg_no', 'roll_no'

];
    // public function addstudent()
    // {
    // return $this->hasMany('App\Student');
    // }

    public function addstuduent()
    {

       return $this->hasMany('App\AddStudnet');
    }

    public function user()
    {

       return $this->belongsTo('App\User');
    }
    public function result()
    {

       return $this->hasMany('App\Result');
    }
    public function session()
	{
		return $this->belongsTo('App\Session','session_id','id');
	}

    public function subject()
	{
		return $this->belongsTo('App\Session','session_id','id');
	}


}
