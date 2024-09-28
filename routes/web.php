<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/{slug?}', [MainPageController::class, 'index'])->name('main-page');
Route::get('/{slug?}/news', [NewsController::class, 'news'])->name('news-page');
