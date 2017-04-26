<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\MuscleGroup;
use App\Exercise;

class ExerciseController extends Controller
{
    public function getExercises(){
        $locale = Config::get('app.locale');
        if ($locale == 'hu') {
            $musclegroups = MuscleGroup::orderBy('name_hu')->get();
            $exercises = Exercise::orderBy('name_hu')->get();
        }elseif ($locale == 'en') {
            $musclegroups = MuscleGroup::orderBy('name_en')->get();
            $exercises = Exercise::orderBy('name_en')->get();
        }
        
        return view('frontend.exercise.exercises', ['exercises' => $exercises, 'musclegroups' => $musclegroups]);
    }
}
