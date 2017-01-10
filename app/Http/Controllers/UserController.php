<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Auth;
use Storage;
use Image;

class UserController extends Controller
{

    private function pictureCheck(){
        $user = Auth::user();

    	if(Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg')){
    		$filename = $user->name . '-' . $user->id . '.jpg';
            return $filename;
    	}elseif (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpeg')){
    		$filename = $user->name . '-' . $user->id . '.jpeg';
            return $filename;
    	}elseif (Storage::disk('local')->has($user->name . '-' . $user->id . '.png')){
    		$filename = $user->name . '-' . $user->id . '.png';
            return $filename;
    	}

        return "defaultProfile.jpg";
    }

    public function getProfile(){
    	$user = Auth::user();
        $filename = $this->pictureCheck();

    	return view('frontend.user.profile', ['user' => $user, 'filename' => $filename]);
    }

    public function getEditProfile(){
        $user = Auth::user();
        $filename = $this->pictureCheck();

        return view('frontend.user.editProfile', ['user' => $user, 'filename' => $filename]);
    }

    public function postUpdateProfile(Request $request){
        $this->validate($request, [
    		'image' => 'image|mimes:jpeg,jpg,png|max:2048'
    	]);

        $user = Auth::user();
        $user->height = $request['height'];
        $user->weight = $request['weight'];
        $user->bench_1rm = $request['bench'];
        $user->squat_1rm = $request['squat'];
        $user->deadlift_1rm = $request['deadlift'];
        $user->ohp_1rm = $request['ohp'];
        $user->save();

        $filename = $this->pictureCheck();

        if ($request->file('image')) {
            $file = $request->file('image');
        	$extension = $request->image->getClientOriginalExtension();
        	$filename = $user->name.'-'.$user->id.'.'.$extension;

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

            $resizedFile = Image::make($file)->resize(240,320);

    		Storage::disk('local')->put($filename, $resizedFile->stream());
        }

        return view('frontend.user.profile', ['user' => Auth::user(), 'filename' => $filename]);
    }

    public function getUserImage($filename){
    	$file = Storage::disk('local')->get($filename);

    	return new Response($file, 200);
    }
}
