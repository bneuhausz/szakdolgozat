<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkoutPlan;

class ProgramController extends Controller
{
    public function getPrograms(){
        $programs = WorkoutPlan::orderBy('name')->get();

        return view('frontend.program.programs', ['programs' => $programs]);
    }

    public function postSearchPrograms(Request $request){
        $type = $request['type'];
        $difficulty = $request['difficulty'];
        $numOfDays = $request['numOfDays'];

        //echo $type;

        $programs = WorkoutPlan::orderBy('name');

        if ($numOfDays > 0) {
            $programs->where('num_of_days', $numOfDays);
        }

        if ($difficulty != "All") {
            $programs = $programs->where('difficulty', $difficulty);
        }

        if ($type != "All") {
            $programs = $programs->where('type', $type);
        }

        $programs = $programs->get();
        return view('frontend.program.partials.programList', ['programs' => $programs]);
    }

    public function getProgram($programID){
        $program = WorkoutPlan::find($programID);

        if (!$program) {
            return redirect()->back()->with(['fail' => 'Exercise not found!']);
        }

        return view('frontend.program.program', ['program' => $program]);
    }
}
