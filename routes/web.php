<?php

use App\Http\Controllers\dashboard\postcontroller;
use App\Http\Controllers\dashboard\categoriescontroller;
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

Route::resource('categories', categoriescontroller::class);
Route::resource('post', PostController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home');
