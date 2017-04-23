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
        /*
            BMR
            BMR = 10 * weight(kg) + 6.25 * height(cm) - 5 * age(y) + 5         (man)
            BMR = 10 * weight(kg) + 6.25 * height(cm) - 5 * age(y) - 161     (woman)
        */
    }
}
