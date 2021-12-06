<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// fontstore
Route::get('/', function () {
    return view('estore.index');
});

Route::get('/dashboard', function () {
    return view('estore.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// owner store
Route::get('/createstore', function () {
    return view('ownerstore.createstore');
});
Route::get('/mystore', function () {
    return view('ownerstore.mystore');
});
Route::get('/single', function () {
    return view('ownerstore.single');
});
Route::get('/cart', function () {
    return view('ownerstore.cart');
});
Route::get('/checkout', function () {
    return view('ownerstore.checkout');
});
Route::get('/email', function () {
    return view('ownerstore.email');
});