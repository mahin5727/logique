<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\TeamController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\WebDevController;
use App\Http\Controllers\website\SeoController;
use App\Http\Controllers\website\ShopifyController;
use App\Http\Controllers\website\ApiController;
use App\Http\Controllers\website\WebDesignControlller;
use App\Http\Controllers\website\MobileAppsController;
use App\Http\Controllers\website\OfficeController;
use App\Http\Controllers\website\UiuxController;
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
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/post-message',[ContactController::class,'postmessage'])->name('post-message');
Route::post('/post-url',[ContactController::class,'posturl'])->name('post-url');
Route::get('/web-development-services',[WebDevController::class,'index'])->name('web-dev');
Route::get('/seo-services',[SeoController::class,'index'])->name('seo');
Route::get('/shopify',[ShopifyController::class,'index'])->name('shopify');
Route::get('/api=integration',[ApiController::class,'index'])->name('api');
Route::get('/web-design',[WebDesignControlller::class,'index'])->name('webdes');
Route::get('/office-automation',[OfficeController::class,'index'])->name('office');
Route::get('/uiux-design',[UiuxController::class,'index'])->name('uiux');
Route::get('/mobile-apps',[MobileAppsController::class,'index'])->name('mobile-apps');
