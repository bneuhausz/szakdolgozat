<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseType extends Model
{
    public function exercises(){
        return $this->hasMany('App\Exercise');
    }
}
