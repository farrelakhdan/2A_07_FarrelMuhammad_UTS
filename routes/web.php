<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('logout', [HomeController::class, 'logout']);
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('Llogin', [LoginController::class, 'index']);

//HOME
Route::get('Det_Home/{id?}', [HomeController::class, 'show']);
Route::PUT('Upd_Home/{id?}', [HomeController::class, 'update']);
Route::PUT('Del_Home/{id?}', [HomeController::class, 'destroy']);

//JOB
Route::get('show_wp', [JobController::class, 'show_wp']);
Route::get('show_mp', [JobController::class, 'show_mp']);
Route::get('show_wd', [JobController::class, 'show_wd']);
Route::get('Det_Job/{id?}', [JobController::class, 'show']);
Route::PUT('Upd_Job/{id?}', [JobController::class, 'update']);
Route::PUT('Del_Job/{id?}', [JobController::class, 'destroy']);

//PRODUCT
Route::get('show_product', [ProductController::class, 'index'])->name('show_product');
Route::get('Det_Pro/{id?}', [ProductController::class, 'show']);
Route::PUT('Upd_Pro/{id?}', [ProductController::class, 'update']);
Route::PUT('Del_Pro/{id?}', [ProductController::class, 'destroy']);

//CONTACT
Route::get('show_contact', [ContactController::class, 'index'])->name('show_contact');
Route::get('Det_Con/{id?}', [ContactController::class, 'show']);
Route::PUT('Upd_Con/{id?}', [ContactController::class, 'update']);
Route::PUT('Del_Con/{id?}', [ContactController::class, 'destroy']);

Route::get('tes', function(){
    return view('navbar');
});