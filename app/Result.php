<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
 protected $fillable=[
        'id',
        'student_id',
        'session_id',
        'class_id',
        'section_id',
        'shift_id',
        'mark',
        'user_id',
        'exam_id',
        'subject_id'

            ];
            public function session()
            {
                return $this->belongsToMany('App\Session','session_id','id');
            }

            public function classroom()
            {
                return $this->belongsToMany('App\Classroom','class_id','id');
            }

            public function subject()
	{
		return $this->belongsToMany('App\Subject');
	}

}
