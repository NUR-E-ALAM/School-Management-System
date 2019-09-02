<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable=[
        
        'languagename',
        'id'

            ];

            
  public function teacherinfo()
  {

     return $this->hasMany('App\teacherinfo');
  }
           
  public function addstudent()
  {

     return $this->hasMany('App\AddStudnet');
  }


}
