<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable =[
        'id','subject_name','class_id','active_id'
            ];



 public function classroom()
  {

      return $this->belongsTo('App\Classroom','class_id','id');
  }
  public function teacherinfo()
  {

      return $this->hasMany('App\teacherinfo');
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
