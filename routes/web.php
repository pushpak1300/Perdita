<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('App');
});

//Auth
Route::get('/google/redirect', [AuthController::class, 'googleRedirect'])->name('google.redirect');
Route::get('/google/callback', [AuthController::class, 'googleCallback'])->name('google.callback');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//App
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//Items
Route::get('/items/create', [ItemController::class,'create'])->name('post.create');
