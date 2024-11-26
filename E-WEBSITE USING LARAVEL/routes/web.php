<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

route::get('/',[HomeController::class,'index']);
Route::get('/userpage', function () {
    return view('home.userpage');
});
Route::get('/userpage', function () {
    return view('home.userpage_content');
});
Route::get('/shop', function () {
    return view('home.shop');
});
Route::get('/shop', function () {
    return view('home.shop_content');
});

Route::get('/crud', function () {
    return view('home.crud');
});
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route::get('/crud', function () {
//     return view('products.create');
// });
// Route::get('/crud', function () {
//     return view('products.edit');
// });
// Route::get('/crud', function () {
//     return view('products.index');
// });
Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/contact', function () {
    return view('home.contact_content');
});

Route::get('/product-details', function () {
    return view('home.product-details');
});

Route::resource('products', ProductController::class);



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
