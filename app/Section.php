<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
	protected $fillable=['id','session_id','class_id','shift_id','section_name','active_id'];
    public function student()
    {

        return $this->hasMany(Student::class);
    }
// public function classrooms()
// 	{
// 		//return $this->hasMany('App\Model\Admin\Classroom');
// 		return $this->hasMany(Classroom::class);
//     }

public function classroom()
{

    return $this->belongsTo('App\Classroom','class_id','id');
}
public function shift()
{

    return $this->belongsTo('App\Shift','shift_id','id');
}
public function session()
{

    return $this->belongsTo('App\Session','session_id','id');
}

    public function active()
	{
		//return $this->hasMany('App\Model\Admin\Classroom');
		return $this->belongsTo('App\Active');
    }
    public function addstuduent()
    {

       return $this->hasMany('App\AddStudnet');
    }


}
