<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\currentStatus;
use App\Http\Controllers\authController;
use App\Http\Controllers\jamsController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\statusController;
use App\Http\Controllers\sosialsController;
use App\Http\Controllers\interestController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\backgroundController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\otherskillController;
use App\Http\Controllers\portofolioController;

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

Route::get('/auth',[authController::class, "index"])->name('login')->middleware('guest');
Route::get('/auth/redirect',[authController::class, "redirect"])->middleware('guest');
Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');
Route::get('/auth/logout',[authController::class,"logout"]);



Route::get('/portofolio', [portofolioController::class, 'index']);

Route::prefix('dashboard')->middleware('auth')->group(
    function(){
        Route::get('/', function(){
        return view('dashboard.layout');
        });
        Route::resource('status',statusController::class);
        Route::resource('currentStatus', currentStatus::class);
        Route::resource('background', backgroundController::class);
        Route::resource('education', educationController::class);
        Route::resource('experience', experienceController::class);
        Route::resource('sosials', sosialsController::class);
        Route::resource('jams', jamsController::class);
        Route::resource('interest', interestController::class);
        Route::resource('otherskill', otherskillController::class);
    }
);
