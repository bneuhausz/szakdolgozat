<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class CalculatorController extends Controller
{
    public function getCalorieNeed(){
        return view('frontend.calculators.calorieNeed');
    }

    public function postCalorieNeed(Request $request){
        $user = Auth::user();
        $user->bmr = $request->input('bmr');
        $user->save();
    }

    public function get1rm(){
        return view('frontend.calculators.1RM');
    }
}
