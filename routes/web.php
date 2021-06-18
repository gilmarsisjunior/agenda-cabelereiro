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

Route::get('/', [MenuController::class, 'index'])->name('main.menu');

Route::get('/login', [ViewLoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/registro', [ViewRegisterController::class, 'viewRegister']);
Route::post('/registro', [UserRegisterController::class, 'createNewUser']);

Route::get('/home', [UserController::class, 'controlPanel'])->middleware('auth');
Route::get('/agendar', [UserController::class, 'schedule'])->middleware('auth')->name('agendate');

Route::get('/criar',[ViewCustomerController::class, 'viewCustomer'])->middleware('auth')->name('customer');
Route::post('/adicionar', [CustomerController::class, 'create'])->middleware('auth')->name('create');

Route::get('/lista', [CustomerController::class, 'index'])->name('listar');
Route::get('/delete{id}', [CustomerController::class, 'delete'])->name('delete');
