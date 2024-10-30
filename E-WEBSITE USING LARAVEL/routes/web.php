<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/',[HomeController::class,'index']);
Route::get('/userpage', function () {
    return view('home.userpage');
});
Route::get('/shop', function () {
    return view('home.shop');
});
Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/blog', function () {
    return view('home.blog');
});
Route::get('/about', function () {
    return view('home.about');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);
