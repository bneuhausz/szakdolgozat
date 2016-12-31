<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactMessage;

class ContactMessageController extends Controller
{
    public function getMessages(){
        $messages = ContactMessage::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.messages.messages', ['messages' => $messages]);
    }

    public function getMessage($messageId){
        $message = ContactMessage::find($messageId);

        if (!$message) {
            return redirect()->back()->with(['fail' => trans('article.article').' '.trans('general.notFound')]);
        }

        return view('admin.messages.message', ['message' => $message]);
    }

    public function postMessageSearchResults(Request $request){
        $name = $request['name'];
        
        $messages = ContactMessage::where('subject', 'LIKE', '%'. $name .'%')->paginate(5);

        if (count($messages) < 1) {
            return view('admin.messages.messageSearchResults', ['fail' => $name.' '.trans('general.notFound'), 'name' => $name]);
        }

        return view('admin.messages.messageSearchResults', ['messages' => $messages, 'name' => $name]);
    }

    public function getDeleteMessage($id){
        $message = ContactMessage::find($id);
        $message->delete();

        $messages = ContactMessage::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.messages.messages', ['messages' => $messages]);
    }
}
