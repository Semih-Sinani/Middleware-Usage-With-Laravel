<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\EnsureTokenIsValid;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will`
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {  
    return view('loginF');
})->middleware('tokenValid');

Route::get('/midd', function () {
    return view('login');
})->name('loginPage');
