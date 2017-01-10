<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactMessage;
use App\Article;

class AdminController extends Controller
{
    public function getIndex(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        $messages = ContactMessage::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.index', ['articles' => $articles, 'messages' => $messages]);
    }
}
