<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    public function getIndex(){
        $articles = Article::where('status', 'A')->orderBy('created_at', 'desc')->paginate(5);

    	  return view('frontend.index', ['articles' => $articles]);
    }
}
