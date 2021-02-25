<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LangController;



    Route::prefix("emre")->group(function () {
        Route::get('/', [AdminController::class, "index"])->name('admin.index');
        Route::get('/logout', [AdminController::class, "index"])->name('admin.logout');




        Route::get('/projects', [AdminController::class, "index"])->name('admin.projects');
        Route::get('/project-add', [AdminController::class, "projectAddGet"])->name('admin.project.add');
        Route::post('/project-add', [AdminController::class, "projectAddPost"])->name('admin.project.add.post');


    });



    Route::get('/lang/{lang}', [LangController::class, "index"])->name('language');

    Route::get('/', [HomeController::class, "index"])->name('index');
    Route::get('/index', [HomeController::class, "index"])->name('index');

    Route::get('/about-us', [HomeController::class, "aboutUs"])->name('aboutUs');

    Route::get('/contact-us', [HomeController::class, "contactUs"])->name('contactUs');

    Route::get('/architectural-projects', [HomeController::class, "architecturalProjects"])->name('architecturalProjects');
    Route::get('/interior-design-projects', [HomeController::class, "interiorDesignProjects"])->name('interiorDesignProjects');
    Route::get('/application-projects', [HomeController::class, "applicationProjects"])->name('applicationProjects');

    Route::get('/project/{slug}', [HomeController::class, "project"])->name('project');

    Auth::routes();


