<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

// use App\Http\Controllers\AdminController;

// use App\Http\Controllers\TestController;
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

Route::get('/',[ContactController::class,'index']);
Route::post('/contacts/confirm',[ContactController::class,'confirm']);
Route::post('/contacts',[ContactController::class,'store']);
Route::get('/contacts/register',[AuthController::class,'showRegistrationForm'])->name('register');
Route::post('/contacts/register',[AuthController::class,'register']);
Route::get('/contacts/login',[AuthController::class,'login'])->name('login');
Route::post('/contacts/register',[RegisterController::class,'register']);
Route::get('contacts/admin',[AdminController::class,'admin']);




// Route::get('/', [ContactController::class, 'index']);
// // Route::get('/confirm',[ContactController::class,'confirm']);
// Route::post('/contacts/confirm',[ContactController::class,'confirm']);
// Route::post('/contacts',[ContactController::class,'store']);


// Route::get('/register',[TestController::class,'register']);
// Route::get('/login',[TestController::class,'login']);
// Route::get('/admin',[TestController::class,'admin']);
// Route::get('/contact',[TestController::class,'contact']);
// Route::get('/confirm',[TestController::class,'confirm']);
// Route::get('/thanks',[TestController::class,'thanks']);