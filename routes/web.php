<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\UserController;

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
// Route::view('/listing', 'listing');
// Route::view('/details', 'details');
// Route::view('/createhouse', 'createhouse');
Route::post('/create', [RegisterController::class, 'create']);
//house owner
Route::post('/createhouse', [AdminController::class, 'createhouse']);
Route::get('createhouse', [AdminController::class, 'housedetails']);
Route::post('/updatedetails/{id}', [AdminController::class, 'updatedetails']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
//customer
Route::get('/listing', [UserController::class, 'houselist']);
Route::post('booking', [UserController::class, 'booking']);
Route::get('/list/{id}', [UserController::class, 'list']);
Route::get('/bookinglist', [UserController::class, 'bookinglist']);
