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
        $exercise = Exercise::find($request['id']);
        dd($request['id']);
        $user = Auth::user();
        $date = $request['date'];
        $weights = explode(',', $request['weights']);
        $sets = $request['sets'];
        $workoutDay = WorkoutDay::where('user_id', $user->id)->where('date', $date)->get();
        //dd($workoutDay);
        if (count($workoutDay) == 0) {
            $workout = new Workout(null);
            $workoutDay = new WorkoutDay();
        }else{
            $workout = new Workout($workoutDay->exercises);
        }
        $workout->add($exercise->id, $weights, $sets);

        $workoutDay->user_id = $user->id;
        $workoutDay->date = $date;
        $workoutDay->exercises = serialize($workout);
        $workoutDay->save();

        dd($workoutDay);

        // TODO: return view, wire up routes, make views
    }
}
