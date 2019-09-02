<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    //
    protected $fillable=[
        'id',
        'shift_name',
        'session_id',
        'class_id',
        'active_id',
    ];
    public function classroom()
    {

        return $this->belongsTo('App\Classroom','class_id','id');
    }
    public function session()
	{
		return $this->belongsTo('App\Session');
	}

    public function addstuduent()
    {

       return $this->hasMany('App\AddStudnet');
    }
    public function section()
    {
        return $this->hasMany('App\Section');
    }


}
