<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MuscleGroup;
use App\CustomExercise;
use App\ExerciseType;
use App\User;
use Auth;
use Config;

class CustomExerciseController extends Controller
{
    public function getCustomExercises(){
        $user = Auth::user();
        $exercises = CustomExercise::where('user_id', $user->id)->orderBy('name')->get();

        $locale = Config::get('app.locale');
        if ($locale == 'hu') {
            $musclegroups = MuscleGroup::orderBy('name_hu')->get();
            $exercisetypes = ExerciseType::orderBy('name_hu')->get();
        }elseif ($locale == 'en') {
            $musclegroups = MuscleGroup::orderBy('name_en')->get();
            $exercisetypes = ExerciseType::orderBy('name_en')->get();
        }

        return view('frontend.exercise.customExercises', ['exercises' => $exercises, 'musclegroups' => $musclegroups, 'exercisetypes' => $exercisetypes]);
    }

    public function postAddCustomExercise(Request $request){
        $user = Auth::user();

        $locale = Config::get('app.locale');
        if ($locale == 'hu') {
            $musclegroup = MuscleGroup::where('name_hu', $request['musclegroup'])->first();
            $exerciseType = ExerciseType::where('name_hu', $request['exerciseType'])->first();
        }elseif ($locale == 'en') {
            $musclegroup = MuscleGroup::where('name_en', $request['musclegroup'])->first();
            $exerciseType = ExerciseType::where('name_en', $request['exerciseType'])->first();
        }

        $exercise = new CustomExercise();
        $exercise->name = $request['name'];
        $exercise->musclegroup_id = $musclegroup->id;
        $exercise->exercisetype_id = $exerciseType->id;
        $exercise->user_id = $user->id;
        $exercise->save();

        $exercises = CustomExercise::where('user_id', $user->id)->orderBy('musclegroup_id')->orderBy('name')->get();

        return $exercises;
    }

    public function postDeleteCustomExercise(Request $request){
        $user = Auth::user();
        $cstExerciseId = $request["id"];

        $exercise = $user->customExercises->find($cstExerciseId);
        $exercise->delete();

        $exercises = CustomExercise::where('user_id', $user->id)->orderBy('musclegroup_id')->orderBy('name')->get();

        return $exercises;
    }
}
