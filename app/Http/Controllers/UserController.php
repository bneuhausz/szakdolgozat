<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Auth;
use Storage;
use Image;
use Illuminate\Support\Facades\Event;
use App\Events\EmailChanged;
use App\EmailChangeLog;

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
      		'image' => 'image|mimes:jpeg,jpg,png|max:2048',
          'email' => 'email|max:255|unique:users',
      	]);

        $user = Auth::user();
        if (($request['email'] != "") && ($request['email'] != $user->email)) {
            Event::fire(new EmailChanged($user, $request['email']));
        }

        $user->height = $request['height'] != "" ? $request['height'] : 0;
        $user->weight = $request['weight'] != "" ? $request['weight'] : 0;
        $user->bench_1rm = $request['bench'] != "" ? $request['bench'] : 0;
        $user->squat_1rm = $request['squat'] != "" ? $request['squat'] : 0;
        $user->deadlift_1rm = $request['deadlift'] != "" ? $request['deadlift'] : 0;
        $user->ohp_1rm = $request['ohp'] != "" ? $request['ohp'] : 0;
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

        if (isset($request['email'])) {
            return view('frontend.user.profile', ['user' => Auth::user(), 'filename' => $filename])->with(trans('email.emailChangeWarning'));
        }

        return view('frontend.user.profile', ['user' => Auth::user(), 'filename' => $filename]);
    }

    public function getUserImage($filename){
    	$file = Storage::disk('local')->get($filename);

    	return new Response($file, 200);
    }

    public function getEmailChange($confirmationToken){
        $user = Auth::user();
        $emailChange = EmailChangeLog::where('confirmationToken', $confirmationToken)->where('user_id', $user->id)->where('status', 'A')->first();
        $filename = $this->pictureCheck();

        if ($emailChange) {
            $user->email = $emailChange->new_email;
            $user->save();

            $emailChange->status = 'D';
            $emailChange->save();



        	  return view('frontend.user.profile', ['user' => $user, 'filename' => $filename])->with(trans('emailChangeSuccessful'));
        }

        return view('frontend.user.profile', ['user' => $user, 'filename' => $filename])->with(trans('emailChangeFailed'));
    }
}
