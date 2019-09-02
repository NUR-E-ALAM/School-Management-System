<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//for slug
use Cviebrock\EloquentSluggable\Sluggable;

class Teacherinfo extends Model
{

    //for slug
    use Sluggable;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'picture',
        'date_of_birth',
        'gender_id',
        'contact_no',
        'subject_id',
        'present_address',
        'permanent_address',
        'religion_id',
        'blood_id',
        'nationaliti_id',
        'national_idcard',
        'language_id',
        'joining_date',
        'active_id'
    ];
    public function sluggable()
    {
        return [
           'slug' => [
               'source' => 'first_name',
           ],
       ];
    }

    public function religion()
	{
		return $this->belongsTo('App\Religion');
	}

    public function bloodgroup()
	{
		return $this->belongsTo('App\BloodGroup','blood_id','id');
	}
    public function nation()
	{
		return $this->belongsTo('App\Nationality','nationaliti_id','id');
    }

    public function gender()
	{
		return $this->belongsTo('App\Gender');
    }
    public function language()
	{
		return $this->belongsTo('App\Language');
    }
    public function subject()
	{
		return $this->belongsTo('App\Subject');
    }

    public function active()
	{
		return $this->belongsTo('App\Active');
    }
    public function user()
    {
    return $this->belongsTo('App\User');
    }
   
   
}
