<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [Controllers\UsersController::class, 'index'])->name('dashboard');
    Route::get('/users', [Controllers\UsersController::class, 'create'])->name('userCreate');
    Route::get('/users/{id}', [Controllers\UsersController::class, 'edit'])->name('userEdit');
    Route::get('/users-delete/{id}', [Controllers\UsersController::class, 'destroy'])->name('userDestroy');
    Route::post('/users', [Controllers\UsersController::class, 'store'])->name('userStore');
    Route::post('/users/{id}', [Controllers\UsersController::class, 'update'])->name('userUpdate');

});
