<?php

namespace App\Http\Middleware;

use App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Closure;
use App\User;
use Auth;

class LanguageSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language=Config::get('app.locale');
        if(Auth::check()){
            $language = Auth::user()->language;
            Session::forget('locale');
        }
        App::setLocale(Session::has('locale') ? Session::get('locale') : $language);
        return $next($request);
    }
}
