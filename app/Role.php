<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[
        'id','name'
            ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    
  public function teacherinfo()
  {

      return $this->hasMany('App\teacherinfo');
  }

  public function addstuduent()
  {

     return $this->hasMany('App\AddStudnet');
  }

}
