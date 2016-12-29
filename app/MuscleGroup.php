<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MuscleGroup extends Model
{
    public function exercises(){
        return $this->hasMany('App\Exercise');
    }
}
