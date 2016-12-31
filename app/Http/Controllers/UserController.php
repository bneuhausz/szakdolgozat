<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Auth;
use Storage;
use File;

class UserController extends Controller
{
    public function getProfile(){
    	$user = Auth::user();

    	return view('frontend.user.profile', ['user' => $user]);
    }

    public function getUploadPicture(){
    	$user = Auth::user();

    	if(Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg')){
    		$filename = $user->name . '-' . $user->id . '.jpg';
    	}elseif (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpeg')){
    		$filename = $user->name . '-' . $user->id . '.jpeg';
    	}elseif (Storage::disk('local')->has($user->name . '-' . $user->id . '.png')){
    		$filename = $user->name . '-' . $user->id . '.png';
    	}

    	if (isset($filename)) {
    		return view('frontend.user.uploadPicture', ['user' => $user, 'filename' => $filename]);
    	}

    	return view('frontend.user.uploadPicture', ['user' => $user]);
    }

    public function postUploadPicture(Request $request){
    	$this->validate($request, [
    		'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    	]);

    	$user = Auth::user();
    	$file = $request->file('image');
    	$extension = $request->image->getClientOriginalExtension();
    	$filename = $user->name.'-'.$user->id.'.'.$extension;

    	if ($file) {
            if(Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg')){
                $oldFilename = $user->name . '-' . $user->id . '.jpg';
                Storage::disk('local')->delete($oldFilename);
            }elseif (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpeg')){
                $oldFilename = $user->name . '-' . $user->id . '.jpeg';
                Storage::disk('local')->delete($oldFilename);
            }elseif (Storage::disk('local')->has($user->name . '-' . $user->id . '.png')){
                $oldFilename = $user->name . '-' . $user->id . '.png';
                Storage::disk('local')->delete($oldFilename);
            }

    		Storage::disk('local')->put($filename, File::get($file));
    	}

    	return redirect()->route('profile');
    }

    public function getUserImage($filename){
    	$file = Storage::disk('local')->get($filename);

    	return new Response($file, 200);
    }
}
