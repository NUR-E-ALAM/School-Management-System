<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
     protected $fillable = [
      'id','graden', 'gradep', 'markform', 'markupto'
   ];

   public function addstuduent()
	{
  
		return $this->hasMany('App\AddStudnet');
	}
}
 