<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getCalorieNeed(){
        return view('frontend.calculators.calorieNeed');
    }

    public function postCalorieNeed(){
        return view('frontend.calculators.calorieNeed');
    }
}
