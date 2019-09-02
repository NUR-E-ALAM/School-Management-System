<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=[
        'id',
        'department',     
        'active_id'        
    ];
    
    public function addstuduent()
	{
  
		return $this->hasMany('App\AddStudnet');
	}
}
