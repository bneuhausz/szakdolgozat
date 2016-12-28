<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function getIndex(){
        return view('admin.index');
    }

    public function getUsers(){
        $users = User::orderBy('name')->paginate(10);

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
        $users = User::where('name', 'LIKE', '%'. $name .'%')->paginate(10);

        return view('admin.user.userSearchResults', ['users' => $users, 'name' => $name]);
    }
}
