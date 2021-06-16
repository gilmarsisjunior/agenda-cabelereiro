<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\MenuController;
use App\Http\Controllers\Pages\ViewLoginController;
use App\Http\Controllers\Pages\ViewRegisterController;

use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\UserRegisterController;

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

Route::get('/', [MenuController::class, 'index'])->name('main.menu');
Route::get('/login', [ViewLoginController::class, 'viewLogin'])->name('view.login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/registro', [ViewRegisterController::class, 'viewRegister']);
Route::post('/registro', [UserRegisterController::class, 'createNewUser']);
