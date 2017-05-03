<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class ProgramController extends Controller
{
    public function getPrograms(){
        $locale = Config::get('app.locale');
        if ($locale == 'hu') {

        }elseif ($locale == 'en') {

        }

        return view('frontend.program.programs');
    }
}
