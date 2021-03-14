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
})->name('welcome');

//Auth
Route::get('/google/redirect', [AuthController::class, 'googleRedirect'])->name('google.redirect');
Route::get('/google/callback', [AuthController::class, 'googleCallback'])->name('google.callback');

//Dashboard
Route::get('/dashboard/responses/{id}', [HomeController::class, 'response'])->name('response')->middleware('auth');
Route::get('/dashboard/responses', [HomeController::class, 'responses'])->name('responses')->middleware('auth');

//App
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile')->middleware('auth');

//Items
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create')->middleware('auth');
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

Route::post('/items/{item}/communication',[ItemController::class,'communicationStore'])->name('communication.share');
// Search
Route::get('/search',[HomeController::class,'index'])->name('search');
