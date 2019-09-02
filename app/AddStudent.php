<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddStudent extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'facontact',
        'gurdian_id',
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'facontact',
        'date_of_birth',
        'picture',
        'contact_no',
        'language_id',
        'religion_id',
        'blood_id',
        'gender_id',
        'nationality_id',
        'registration_no',
        'present_address',
        'permanent_address',
        'active_id'

    ];
    public function religion()
	{
		return $this->belongsTo('App\Religion');
	}

    public function bloodgroup()
	{
		return $this->belongsTo('App\BloodGroup','blood_id','id');
	}
    public function active()
	{
		return $this->belongsTo('App\Active');
	}

    public function nation()
	{
		return $this->belongsTo('App\Nationality','nationality_id','id');
    }
    public function language()
	{
		return $this->belongsTo('App\Language');
	}
    public function subject()
	{
		return $this->belongsTo('App\Subject');
	}


    public function gender()
	{
		return $this->belongsTo('App\Gender');
	}

    public function academyinfo()
    {
    return $this->hasOne('App\Academyinfo');
    }
    public function studentattendance()
    {
    return $this->hasOne('App\StudentAttendance');
    }



    public function user()
    {
    return $this->belongsTo('App\User');
    }

    public function result()
    {
    return $this->belongsTo('App\Result');
    }

}
