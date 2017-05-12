<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkoutDay;
use App\Workout;
use App\Exercise;
use App\CustomExercise;
use App\MuscleGroup;
use Auth;
use Config;

class WorkoutController extends Controller
{
    public function getWorkoutLogger(Request $request){
        $user = Auth::user();

        $date = $request['date'] ? $request['date'] : $date = date('Y-m-d');
        /*if ($date == null) {
            $date = date('Y-m-d');
        }*/

        $workoutDay = WorkoutDay::where('user_id', $user->id)->where('date', $date)->first();
        $loggedExercises = array();
        if (count($workoutDay) > 0) {
            $loggedExercises = unserialize($workoutDay->exercises);
        }
        //dd($loggedExercises);
        $muscleGroups = MuscleGroup::get();
        $exercises = Exercise::get();
        $customExercises = CustomExercise::where('user_id', $user->id)->get();

        return view('frontend.workoutLogger.workoutLog', ['muscleGroups' => $muscleGroups, 'exercises' => $exercises, 'customExercises' => $customExercises, 'loggedExercises' => $loggedExercises, 'date' => $date])->render();
    }

    public function getExercisesByMuscleGroup(Request $request){
        $id = $request['id'];
        $exercises = Exercise::where('musclegroup_id', $id)->get();
        //dd($exercises);
        //$customExercises = CustomExercise::where('user_id', $user->id)->where('musclegroup_id', $id)->get();
        $customExercises = Auth::user()->customExercises()->where('musclegroup_id', $id)->get();
        return view('frontend.partials.exerciseSelects', ['exercises' => $exercises, 'customExercises' => $customExercises]);
    }

    public function getAddExercise(Request $request){
        $exercise_id = $request['id'];
        if(strpos($exercise_id, "c") === false){
            $exercise = Exercise::find($exercise_id);
            $locale = Config::get('app.locale');
            if ($locale == 'hu') {
                $exerciseName = $exercise->name_hu;
            }elseif ($locale == 'en') {
                $exerciseName = $exercise->name_en;
            }
        }else{
            $custom_exercise_id = substr($exercise_id, 1);
            $exercise = CustomExercise::find($custom_exercise_id);
            $exerciseName = $exercise->name;
        }

        $user = Auth::user();
        $date = $request['date'];
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
            $workout = new Workout($exercises);
        }

        $workout->add($exercise_id, $exerciseName, $weights, $reps);

        $workoutDay->user_id = $user->id;
        $workoutDay->date = $date;
        $workoutDay->exercises = serialize($workout);
        $workoutDay->save();
        //return view('frontend.partials.workoutSets', ['loggedExercises' => unserialize($workoutDay->exercises)]);
        return view('frontend.partials.workoutSets', ['loggedExercises' => $workout]);

        // TODO: return view, wire up routes, make views
    }
}
