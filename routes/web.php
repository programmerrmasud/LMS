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

Route::get('/', function () {
    return view('welcome');
});


// This is Admin Panel Rout for maintaining User CRUD
Route::resource('resources', App\Http\Controllers\Admin\UserResourceController::class);


Route::get('admin/login',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminGetLogin'])->name('dminGetLogin');
Route::get('admin/register',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminGetRegister'])->name('AdminGetRegister');
// Route::post('admin/register',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminRegister'])->name('AdminRegister');