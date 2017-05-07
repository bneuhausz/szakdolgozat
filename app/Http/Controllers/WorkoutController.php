<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkoutDay;
use App\Workout;
use App\Exercise;
use Auth;

class WorkoutController extends Controller
{
    public function getWorkoutLogger(){
        return view('frontend.workoutLogger.workoutLog');
    }

    public function getAddExercise(Request $request){
        $exercise_id = $request['id'];
        $exercise = Exercise::find($exercise_id);
        $user = Auth::user();
        $date = $request['date'];
        $date = date('Y-m-d');
        $weights = $request['weights'];
        $weights = explode(',', $weights);
        $reps = $request['reps'];
        $reps = explode(',', $reps);

        $workoutDay = WorkoutDay::where('user_id', $user->id)->where('date', $date)->first();

        if (count($workoutDay) == 0) {
            $workout = new Workout(null);
            $workoutDay = new WorkoutDay();
        }else{
            $exercises = unserialize($workoutDay->exercises);
            dd($exercises);
            $workout = new Workout($exercises);
        }
        //dd($workout);
        //return view('frontend.workoutLogger.workoutLog', ['workout' => $workout]);
        $workout->add($exercise->id, $weights, $reps);
        //dd($workout);

        $workoutDay->user_id = $user->id;
        $workoutDay->date = $date;
        $workoutDay->exercises = serialize($workout);
        $workoutDay->save();

        return view('frontend.workoutLogger.workoutLog', ['workout' => $workoutDay]);

        // TODO: return view, wire up routes, make views
    }
}
