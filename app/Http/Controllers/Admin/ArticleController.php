<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Config;

class ArticleController extends Controller
{
    public function getArticles(){
        $articles = Article::where('status', 'A')->orderBy('created_at', 'desc')->paginate(5);

        return view('admin.article.articles', ['articles' => $articles]);
    }

    public function getArticle($articleId){
        $article = Article::where('status', 'A')->find($articleId);

        if (!$article) {
            return redirect()->back()->with(['fail' => trans('article.article').' '.trans('general.notFound')]);
        }

        return view('admin.article.article', ['article' => $article]);
    }

    public function postArticleSearchResults(Request $request){
        $name = $request['name'];

        if (Config::get('app.locale') == 'hu') {
            $articles = Article::where('status', 'A')->where('title_hu', 'LIKE', '%'. $name .'%')->paginate(5);
        }elseif (Config::get('app.locale') == 'en') {
            $articles = Article::where('status', 'A')->where('title_en', 'LIKE', '%'. $name .'%')->paginate(5);
        }

        if (count($articles) < 1) {
            return view('admin.article.articleSearchResults', ['fail' => $name.' '.trans('general.notFound'), 'name' => $name]);
        }

        return view('admin.article.articleSearchResults', ['articles' => $articles, 'name' => $name]);
    }

    public function getAddArticle(){
        return view('admin.article.addArticle');
    }

    public function postAddArticle(Request $request){
        $this->validate($request, [
            'title_hu' => 'required|max:100',
            'title_en' => 'required|max:100',
            'content_hu' => 'required|max:1000',
            'content_en' => 'required|max:1000',
        ]);

        $article = new Article();
        $article->title_hu = $request['title_hu'];
        $article->title_en = $request['title_en'];
        $article->body_hu = $request['content_hu'];
        $article->body_en = $request['content_en'];
        $article->save();

        $articles = Article::where('status', 'A')->orderBy('created_at', 'desc')->paginate(5);

        return view('admin.article.articles', ['articles' => $articles]);
    }

    public function getDeleteArticle($id){
        $article = Article::find($id);
        if ($article) {
            $article->status = 'D';
            $article->save();
        }

        $articles = Article::where('status', 'A')->orderBy('created_at', 'desc')->paginate(5);

        return view('admin.article.articles', ['articles' => $articles]);
    }

    public function getEditArticle($id){
        $article = Article::where('status', 'A')->find($id);

        return view('admin.article.editArticle', ['article' => $article]);
    }

    public function postUpdateArticle(Request $request){
        $this->validate($request, [
            'title_hu' => 'required|max:100',
            'title_en' => 'required|max:100',
            'content_hu' => 'required|max:1000',
            'content_en' => 'required|max:1000',
        ]);

        $article = Article::where('status', 'A')->find($request['id']);
        $article->title_hu = $request['title_hu'];
        $article->title_en = $request['title_en'];
        $article->body_hu = $request['content_hu'];
        $article->body_en = $request['content_en'];
        $article->update();

        return redirect()->route('admin.articles');
    }
}
