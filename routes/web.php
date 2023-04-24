<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminController;
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



Auth::routes();
Route::view('/', 'login');
Route::view('/register', 'register');
Route::view('/house', 'house');
Route::view('/listing', 'listing');

Route::post('/create', [RegisterController::class, 'create']);
Route::post('/index', [LoginController::class, 'login']);
Route::view('/index', [LoginController::class, 'index']);

Route::post('createhouse', [AdminController::class, 'createhouse']);
Route::get('createhouse', [AdminController::class, 'housedetails']);
Route::post('/updatedetails/{id}', [AdminController::class, 'updatedetails']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
