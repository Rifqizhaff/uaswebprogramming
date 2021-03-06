<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/logout', function () {
    Session::forget('user');
    return view('pages.login');
})->name('logout');

Route::post("/login",[UserController::class,'login']);
Route::get("/home",[HomeController::class,'index']);
Route::get("detail/{id}",[HomeController::class,'detail']);
Route::post("order_book",[HomeController::class,'orderbook']);
Route::get("order_list",[HomeController::class,'orderlist']);
Route::get("removeorder/{id}",[HomeController::class,'removeorder']);

Route::get('/register', function () {
    return view('pages.register');
})->name('register');
