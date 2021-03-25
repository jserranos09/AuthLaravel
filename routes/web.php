<?php

use Illuminate\Support\Facades\Route;



// makes a get request to view the "welcome" view
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//if a visitor visits /home, load the HomeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
