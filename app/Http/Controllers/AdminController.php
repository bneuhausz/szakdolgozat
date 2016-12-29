<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exercise;
use Config;
use App\MuscleGroup;
use App\ExerciseType;

class AdminController extends Controller
{
    public function getIndex(){
        return view('admin.index');
    }

    public function getUsers(){
        $users = User::orderBy('name')->paginate(5);

        return view('admin.user.users', ['users' => $users]);
    }

    public function getUser($userId){
        $user = User::find($userId);

        if (!$user) {
            return redirect()->back()->with(['fail' => 'User not found!']);
        }

        return view('admin.user.user', ['user' => $user]);
    }

    public function postUserSearchResults(Request $request){
        $name = $request['name'];
        $users = User::where('name', 'LIKE', '%'. $name .'%')->paginate(5);

        if (count($users) < 1) {
            return view('admin.user.userSearchResults', ['fail' => $name.' '.trans('general.notFound'), 'name' => $name]);
        }

        return view('admin.user.userSearchResults', ['users' => $users, 'name' => $name]);
    }

    public function getExercises(){
        $locale = Config::get('app.locale');
        if ($locale == 'hu') {
            $exercises = Exercise::orderBy('name_hu')->paginate(5);
        }elseif ($locale == 'en') {
            $exercises = Exercise::orderBy('name_en')->paginate(5);
        }

        return view('admin.exercise.exercises', ['exercises' => $exercises]);
    }

    public function postExerciseSearchResults(Request $request){
        $name = $request['name'];

        if (Config::get('app.locale') == 'hu') {
            $exercises = Exercise::where('name_hu', 'LIKE', '%'. $name .'%')->paginate(5);
        }elseif (Config::get('app.locale') == 'en') {
            $exercises = Exercise::where('name_en', 'LIKE', '%'. $name .'%')->paginate(5);
        }

        if (count($exercises) < 1) {
            return view('admin.exercise.exerciseSearchResults', ['fail' => $name.' '.trans('general.notFound'), 'name' => $name]);
        }

        return view('admin.exercise.exerciseSearchResults', ['exercises' => $exercises, 'name' => $name]);
    }

    public function getAddExercise(){
        $musclegroups = MuscleGroup::all();

        $exerciseTypes = ExerciseType::all();

        return view('admin.exercise.addExercise', ['musclegroups' => $musclegroups, 'exerciseTypes' => $exerciseTypes]);
    }

    public function postAddExercise(Request $request){
        $this->validate($request, [
            'name_hu' => 'required|max:50',
            'name_en' => 'required|max:50',
            'description_hu' => 'required|max:500',
            'description_en' => 'required|max:500',
        ]);

        $locale = Config::get('app.locale');
        if ($locale == 'hu') {
            $musclegroup = MuscleGroup::where('name_hu', $request['musclegroup'])->first();
            $exerciseType = ExerciseType::where('name_hu', $request['exerciseType'])->first();
        }elseif ($locale == 'en') {
            $musclegroup = MuscleGroup::where('name_en', $request['musclegroup'])->first();
            $exerciseType = ExerciseType::where('name_en', $request['exerciseType'])->first();
        }

        $exercise = new Exercise();
        $exercise->name_hu = $request['name_hu'];
        $exercise->name_en = $request['name_en'];
        $exercise->description_hu = $request['description_hu'];
        $exercise->description_en = $request['description_en'];
        $exercise->musclegroup_id = $musclegroup->id;
        $exercise->exercisetype_id = $exerciseType->id;
        $exercise->video = $request['video'];
        $exercise->save();

        if ($locale == 'hu') {
            $exercises = Exercise::orderBy('name_hu')->paginate(5);
        }elseif ($locale == 'en') {
            $exercises = Exercise::orderBy('name_en')->paginate(5);
        }

        return view('admin.exercise.exercises', ['exercises' => $exercises]);
    }

    public function getDeleteExercise($id){
        $exercise = Exercise::find($id);
        $exercise->delete();

        $exercises = Exercise::orderBy('musclegroup_id')->paginate(5);

        return view('admin.exercise.exercises', ['exercises' => $exercises]);
    }

    public function getEditExercise($id){
        $exercise = Exercise::find($id);

        $musclegroups = MuscleGroup::all();

        $exerciseTypes = ExerciseType::all();

        return view('admin.exercise.editExercise', ['exercise' => $exercise, 'musclegroups' => $musclegroups, 'exerciseTypes' => $exerciseTypes]);
    }

    public function postUpdateExercise(Request $request){
        $this->validate($request, [
            'name_hu' => 'required|max:50',
            'name_en' => 'required|max:50',
            'description_hu' => 'required|max:500',
            'description_en' => 'required|max:500',
        ]);

        $locale = Config::get('app.locale');
        if ($locale == 'hu') {
            $musclegroup = MuscleGroup::where('name_hu', $request['musclegroup'])->first();
            $exerciseType = ExerciseType::where('name_hu', $request['exerciseType'])->first();
        }elseif ($locale == 'en') {
            $musclegroup = MuscleGroup::where('name_en', $request['musclegroup'])->first();
            $exerciseType = ExerciseType::where('name_en', $request['exerciseType'])->first();
        }

        $exercise = Exercise::find($request['id']);
        $exercise->name_hu = $request['name_hu'];
        $exercise->name_en = $request['name_en'];
        $exercise->description_hu = $request['description_hu'];
        $exercise->description_en = $request['description_en'];
        $exercise->musclegroup_id = $musclegroup->id;
        $exercise->exercisetype_id = $exerciseType->id;
        $exercise->video = $request['video'];
        $exercise->update();

        return redirect()->route('admin.exercises');
    }
}
