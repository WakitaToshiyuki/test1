<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/',[ContactController::class,'index']);
Route::post('/',[ContactController::class,'create']);
// Route::post('/',[CategoryController::class,'create']);

Route::get('/confirm',[ContactController::class,'index']);
Route::post('/confirm',[ContactController::class,'store']);
// Route::post('/confirm',[CategoryController::class,'store']);

Route::get('/register',[UserController::class,'index']);
Route::post('/register',[UserController::class,'create']);

Route::get('/admin',[CategoryController::class,'index']);

