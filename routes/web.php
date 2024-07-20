<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('admin')->name("admin.")->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/eror404', [HomeController::class, 'eror404'])->name('eror404');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
});
