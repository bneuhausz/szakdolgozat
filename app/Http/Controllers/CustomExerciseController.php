<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MuscleGroup;
use App\CustomExercise;
use App\ExerciseType;
use App\User;
use Auth;

class CustomExerciseController extends Controller
{
    public function getCustomExercises(){
        $user = Auth::user();
        $exercises = CustomExercise::where('user_id', $user->id);

        return view('frontend.exercise.customExercises', ['exercises' => $exercises]);
    }
}
