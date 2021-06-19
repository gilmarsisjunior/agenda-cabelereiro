<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Pages\MenuController;
use App\Http\Controllers\Pages\ViewLoginController;
use App\Http\Controllers\Pages\ViewRegisterController;
use App\Http\Controllers\Pages\ViewCustomerController;

use App\Http\Controllers\UserConfig\LoginController;
use App\Http\Controllers\UserConfig\UserRegisterController;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Customer\CustomerController;

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

Route::get('/', [MenuController::class, 'index'])->name('main.page');

Route::get('/login', [ViewLoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registro', [ViewRegisterController::class, 'viewRegister']);
Route::post('/registro', [UserRegisterController::class, 'createNewUser']);

Route::get('/home', [UserController::class, 'controlPanel'])->middleware('auth')->name('home');
Route::get('/agendar', [UserController::class, 'schedule'])->middleware('auth')->name('agendate');
Route::get('/recebidos', [UserController::class, 'recived'])->middleware('auth')->name('recived');

Route::get('/criar',[ViewCustomerController::class, 'viewCustomer'])->middleware('auth')->name('customer');
Route::post('/criar', [CustomerController::class, 'create'])->middleware('auth')->name('create');

Route::get('/lista', [CustomerController::class, 'index'])->middleware('auth')->name('listar');
Route::get('/delete{id}', [CustomerController::class, 'delete'])->middleware('auth')->name('delete');
Route::get('/complete{id}', [CustomerController::class, 'completeHair'])->middleware('auth')->name('complete');
