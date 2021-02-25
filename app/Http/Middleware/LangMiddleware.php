<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = Session::get("lang");
        $languages = config("app.languages");

        if(in_array($locale, $languages))
        {
            app()->setLocale($locale);
        }else{
            config("app.locale", "tr");
        }
        return $next($request);
    }
}
