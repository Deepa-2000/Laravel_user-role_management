<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::view('/loan','loan');
Route::view('/cards','cards');
Route::view('/tables','tables');
Route::view('/charts','charts');
Route::view('/forgot','forgot-password');
Route::view('/404','404');
Route::view('/blank','blank');
Route::view('/buttons','buttons');
Route::view('/colorutilies','utilities-color');


Route::get('/',[UserController::class,'index'])->name('register');
Route::post('/validate_register',[UserController::class,'validate_register'])->name('sample.validate_register');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/validate_login',[UserController::class,'validate_login'])->name('sample.validate_login');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::get('/edit_profile/{id}',[UserController::class,'edit_profile'])->name('edit_profile');
Route::put('/validate_profile/{id}',[UserController::class,'validate_profile'])->name('sample.validate_profile');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

