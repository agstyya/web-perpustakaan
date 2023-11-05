<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\FormBukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource("/", LoginController::class);
Route::resource("/register", RegisterController::class);
Route::get('/forgotpassword',[ForgotPasswordController::class,'index']);
Route::get('/databuku', [DataBukuController::class, 'index']);
Route::get('/formbuku', [FormBukuController::class, 'index']);
Route::resource("/dashboard/books", BookController::class);
Route::post("/logout",[LoginController::class,"Logout"]);
