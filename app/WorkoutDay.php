<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkoutDay extends Model
{
    public function muscleGroup(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
