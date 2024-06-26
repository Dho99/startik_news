<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(ViewController::class)->middleware('web')->group(function(){
    Route::get('/','home');
    Route::get('/post','show');
    Route::get('/search','search');
});

Route::middleware('isAdmin')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard','index');
    });
});
