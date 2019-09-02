<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//for soft delete
use Illuminate\Database\Eloquent\SoftDeletes;
//for slug
use Cviebrock\EloquentSluggable\Sluggable;

class User extends Authenticatable
{
    //for soft delete
    use SoftDeletes;
    //for slug
    use Sluggable;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','role_id', 'slug', 'email', 'password','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       // 'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    //for soft delete
    protected $dates = ['deleted_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
           'slug' => [
               'source' => 'name',
           ],
       ];
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function teacherinfo()
    {
    return $this->hasOne('App\Teacherinfo');
    }
    public function addstudent()
    {
    return $this->hasOne('App\AddStudent');
    }

    public function academyinfo()
    {
    return $this->hasOne('App\Academyinfo');
    }
  

}
