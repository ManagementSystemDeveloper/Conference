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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Client

Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('/client/{id}/changePassword', [App\Http\Controllers\ClientController::class, 'changePassword'])->name('clientChangePassword');
Route::get('/client/{id}/session', [App\Http\Controllers\ClientController::class, 'getSession'])->name('getClientSession');
Route::get('/client/{id}/history', [App\Http\Controllers\ClientController::class, 'getHistory'])->name('getClientHistory');
Route::get('/client/{id}/profile', [App\Http\Controllers\ClientController::class, 'getProfile'])->name('getClientProfile');
Route::get('/client/call', [App\Http\Controllers\ClientController::class, 'call'])->name('clientCall');

// Trainer

Route::get('/trainer', [App\Http\Controllers\TrainerController::class, 'index'])->name('trainer');
Route::get('/trainer/{id}/changePassword', [App\Http\Controllers\TrainerController::class, 'changePassword'])->name('trainerChangePassword');
Route::get('/trainer/{id}/history', [App\Http\Controllers\TrainerController::class, 'getHistory'])->name('getTrainerHistory');
Route::get('/trainer/{id}/profile', [App\Http\Controllers\TrainerController::class, 'getProfile'])->name('getTrainerProfile');
Route::get('/trainer/{id}/detail', [App\Http\Controllers\TrainerController::class, 'getDetail'])->name('getTrainerDetail');
Route::get('/trainer/call', [App\Http\Controllers\TrainerController::class, 'call'])->name('trainerCall');