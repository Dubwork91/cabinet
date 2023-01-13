<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthentController;
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
    return view('welcome');
});
Route::get('/sara', [AdminController::class,'displayTemplate'])->name('dashboard');
Route::get('/auth', [AuthentController::class, 'displaySignup'])->name('sign');
Route::get('/doc', [AuthentController::class, 'displayLog']);
Route::get('/log', [AuthentController::class, 'displayLogin']);