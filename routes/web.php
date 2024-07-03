<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/audio',[\App\Http\Controllers\PagesController::class,'music'])->name('audio');
Route::post('/audio',[\App\Http\Controllers\PagesController::class,'searchMusic'])->name('search-audio');
Route::get('/rules',[\App\Http\Controllers\PagesController::class,'rules'])->name('rules');
Route::get('login/vkontakte', [AuthController::class, 'redirectToProvider'])->name('login.vk');
Route::get('login/vkontakte/callback', [AuthController::class, 'handleProviderCallback']);
Route::get('logout',[AuthController::class,'logout'])->name('logout');
