<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    //
    public function index($lang)
    {
        $languages = config("app.languages");
        if(in_array($lang, $languages))
        {
           Session::put("lang", $lang);
        }else
        {
           Session::put("lang", config("app.locale", "tr"));
        }

        return Redirect::back();
    }
}
