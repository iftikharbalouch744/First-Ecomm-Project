<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReminderEmailController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});
Route:: view('/signup','signup');
Route::post("/signup",[UserController::class,'signup']);
Route::post("/login",[UserController::class,'login']);
Route:: get('/',[ProductController:: class, 'index']);
Route:: get('details/{id}',[ProductController:: class, 'details']);
Route:: get('/search',[ProductController:: class, 'search']);
Route:: post("add-to-cart",[ProductController:: class, 'AddtoCart']);
Route:: get("cartlist",[ProductController:: class, 'cartlist']);
Route:: get("delitem/{id}",[ProductController:: class, 'delItem']);
Route:: get("ordernow",[ProductController:: class, 'orderNow']);
Route:: post("orderplace",[ProductController:: class, 'OrderPlace']);
Route:: get("myorderlist",[ProductController:: class, 'myorderlist']);

Route::get("/send-reminder-email", [ReminderEmailController:: class, 'SendReminderEmail']);

