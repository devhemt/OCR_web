<?php

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

Route::get('/',[\App\Http\Controllers\ClientController::class, 'index']);
Route::get('/admin',[\App\Http\Controllers\AdminController::class, 'index']);

Route::match(['get', 'post'], '/login', [\App\Http\Controllers\ClientController::class, 'login'])->name('login');


Route::get('/registration', [\App\Http\Controllers\ClientController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [\App\Http\Controllers\ClientController::class, 'customRegistration'])->name('register.custom');
Route::get('/signout', [\App\Http\Controllers\ClientController::class, 'signOut'])->name('signout');


Route::get('/admin/signout', [\App\Http\Controllers\AdminController::class,'signOut']);
Route::match(['get', 'post'], '/admin/login', [\App\Http\Controllers\AdminController::class, 'login']);

Route::get('/admin/viewimage', [\App\Http\Controllers\AdminController::class, 'viewImage']);
