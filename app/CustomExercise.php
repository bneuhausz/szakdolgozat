<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomExercise extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function exerciseType(){
        return $this->belongsTo('App\ExerciseType', 'exercisetype_id');
    }

    public function muscleGroup(){
        return $this->belongsTo('App\MuscleGroup', 'musclegroup_id');
    }
}
