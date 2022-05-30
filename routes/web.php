<?php

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

Route::get('/', function () {
    return view('auth.login');
});

/*Route::view('home', 'home')
->name('home')
->middleware(['auth']);*/

Route::get('home', [App\Http\Controllers\MovieController::class, 'index'])
    ->name('home')
    ->middleware(['auth']);

Route::view('profile', 'profile.edit')
    ->name('profile.edit')
    ->middleware(['auth']);

Route::get('/home/movies', [App\Http\Controllers\MovieController::class, 'getMovies'])
    ->name('movie_list');
