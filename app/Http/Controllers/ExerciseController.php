<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getExercises(){
        return view('admin.exercise.exercises');
    }

    public function getAddExercise(){
        return view('admin.exercise.addExercise');
    }
}
