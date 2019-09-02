<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
   protected $fillable =[
       'id',
       'blood_name',
       'active_id'
   ];

  
   public function teacherinfo()
   {

       return $this->hasMany('App\teacherinfo');
   }

   public function addstudent()
   {
 
       return $this->hasMany('App\AddStudent');
   }
}


