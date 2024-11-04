<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\TeamController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\WebDevController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/team',[TeamController::class,'index'])->name('team');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/web-development',[WebDevController::class,'index'])->name('web-dev');