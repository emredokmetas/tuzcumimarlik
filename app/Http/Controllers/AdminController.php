<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("backEnd.home");
    }

    public function projectAddGet()
    {
        return view("backEnd.project-add");
    }

    public function projectAddPost(Request $request)
    {

        var_dump($_POST);
        dd($request->all());
//        return view("backEnd.project-add");
    }
}
