<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactMessage;
use App\Article;

class AdminController extends Controller
{
    public function getIndex(){
        $articles = Article::where('status', 'A')->orderBy('created_at', 'desc')->paginate(5);
        $messages = ContactMessage::where('status', 'A')->orderBy('created_at', 'desc')->paginate(5);

        return view('admin.index', ['articles' => $articles, 'messages' => $messages]);
    }
}
