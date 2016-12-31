<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class UserController extends Controller
{
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

    public function getGetAdmin($id){
        if (Auth::check() && Auth::user()->id == 1) {
            $user = User::find($id);
            $user->admin = true;
            $user->update();

            return redirect()->back();
        }
        
        return view('admin.index');
    }

    public function getLoseAdmin($id){
        if (Auth::check() && Auth::user()->id == 1) {
            $user = User::find($id);
            $user->admin = false;
            $user->update();

            return redirect()->back();
        }
        
        return view('admin.index');
    }
}
