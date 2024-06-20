<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

//Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Route for "About Me" page
Route::get('/about_me', [AboutMeController::class, 'show']);

// Route for "Skills" page
Route::get('/skills', [SkillsController::class, 'show']);

// Route for "Hobbies" page
Route::get('/hobbies', [HobbiesController::class, 'show']);

