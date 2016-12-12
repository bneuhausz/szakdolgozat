<?php

namespace App\Http\Controllers\Lang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function index(){
        if(!\Session::has('locale')){
            \Session::put('locale', Input::get('locale'));
        }else{
            Session::set('locale', Input::get('locale'));
        }
        return Redirect::back();
    }
}
