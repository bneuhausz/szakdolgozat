<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getCalorieNeed(){
        return view('frontend.calculators.calorieNeed');
    }

    public function postCalorieNeed(Request $request){
        $age = $request->input('age');
        $gender = $request->input('gender');
        $height = $request->input('height');
        $weight = $request->input('weight');

        $bmr = 0;

        if ($gender == "Férfi" || $gender == "Male") {
            $bmr = 10 * $weight + 6.25 * $height - 5 * $age + 5;
        }else{
            $bmr = 10 * $weight + 6.25 * $height - 5 * $age - 161;
        }

        return trans('calculator.calorieResponse') . " " . $bmr . " " . trans('calculator.calories');
        /*
            BMR
            BMR = 10 * weight(kg) + 6.25 * height(cm) - 5 * age(y) + 5         (man)
            BMR = 10 * weight(kg) + 6.25 * height(cm) - 5 * age(y) - 161     (woman)
        */
    }
}
