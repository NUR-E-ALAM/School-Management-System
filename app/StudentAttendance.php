<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{

    protected $fillable=[

        'id','date', 'class_id','session_id', 'section_id', 'student_id', 'status', 'user_id','shift_id',

];
public function addstuduent()
{

   return $this->hasMany('App\AddStudnet');
}
public function academyinfo()
{

   return $this->hasMany('App\Academyinfo');
}
}
