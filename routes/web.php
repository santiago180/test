<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('compania', App\Http\Controllers\CompanyController::class)->middleware('auth');
Route::resource('proyecto', App\Http\Controllers\ProjectController::class)->middleware('auth');
Route::resource('historia', App\Http\Controllers\HistoryController::class)->middleware('auth');
Route::resource('ticket', App\Http\Controllers\TicketController::class)->middleware('auth');
