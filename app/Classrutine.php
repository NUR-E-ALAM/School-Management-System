<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classrutine extends Model
{
    protected $fillable=['id','session_id','class_id','shift_id','subject_id','professor_id','day_id','s_hour_id','s_minute_id','e_hour_id','e_minute_id'];
}
