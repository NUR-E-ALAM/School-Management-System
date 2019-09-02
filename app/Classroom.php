<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable=[
        'id',
        'class_name ',
        'session_id',
        'active_id'

    ];
    public function subject()
	{
		return $this->hasMany('App\Subject');
    }

    public function shift()
	{
		return $this->belongsTo('App\Shift');
	}

	public function session()
	{
		return $this->belongsTo('App\Session');
	}

	public function section()
    {
        return $this->hasMany('App\Section');
    }

	public function addstuduent()
	{

		return $this->hasMany('App\AddStudnet');
    }

    public function result()
	{
		return $this->hasMany('App\Result');
	}
}
