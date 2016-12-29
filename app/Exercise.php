<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function exerciseType(){
        return $this->belongsTo('App\ExerciseType');
    }

    public function muscleGroup(){
        return $this->belongsTo('App\MuscleGroup');
    }
}
