<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'id',
        'session_name',
        'active',
    ];
    public function classrooms()
	{
		//return $this->hasMany('App\Model\Admin\Classroom');
		return $this->hasMany(Classroom::class);
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
