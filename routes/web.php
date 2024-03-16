<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/layout', function () {
    return view('layout/layout');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/account', [AccountController::class, 'show'])->name('account');
Route::get('/home', [HomeController::class, 'show'])->name('home');