<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/Login', [UserController::class, 'Login']);

Route::get('/Signin', [UserController::class, 'Signin']);

Route::get('/Morecars', [UserController::class, 'Morecars']);

Route::get('/spareparts', [UserController::class, 'spareparts']);

Route::get('/Gallery', [UserController::class, 'Gallery']);

Route::get('/Sale', [UserController::class, 'Sale']);

Route::get('/event', [UserController::class, 'event']);