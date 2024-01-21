<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;

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

Route::get('/registration', [UserController::class, 'registrationIndex']);
Route::post('/registration', [UserController::class, 'registration']);
Route::get('/login', [UserController::class, 'loginIndex'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/news', [NewsController::class, 'index'])->middleware('auth');
Route::post('/news', [NewsController::class, 'createNews'])->middleware('auth');
Route::post('/comment', [NewsController::class, 'createComment'])->middleware('auth');