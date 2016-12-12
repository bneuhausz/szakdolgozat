<?php

namespace App\Http\Controllers\Lang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
use Redirect;
use Session;

class LanguageController extends Controller
{
    public function index(Request $request){
        if($request['user_id']){
            $user = User::find($request['user_id']);
            $user->language = $request['locale'];
            $user->update();
        }else{
            if(!\Session::has('locale')){
                \Session::put('locale', Input::get('locale'));
            }else{
                Session::set('locale', Input::get('locale'));
            }
        }
        return Redirect::back();
    }
}
