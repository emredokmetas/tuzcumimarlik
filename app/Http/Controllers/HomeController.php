<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("frontEnd.index");
    }

    public function aboutUs()
    {
        return view("frontEnd.about-us");
    }

    public function contactUs()
    {
        return view("frontEnd.contact-us");
    }

    public function architecturalProjects()
    {
        $projects = Projects::select("slug","title", "cover")->where("type", 1)->where("state", "1")->get();

        return view("frontEnd.architectural-projects", compact("projects"));
    }

    public function interiorDesignProjects()
    {
        return view("frontEnd.interior-design-projects");
    }

    public function applicationProjects()
    {
        return view("frontEnd.application-projects");
    }

    public function project()
    {
        return view("frontEnd.project-single");
    }
}
