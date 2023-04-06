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

Route::get('admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('admin/course/index',[App\Http\Controllers\Admin\CourseController::class, 'Index'])->name('courseIndex');
Route::get('admin/course/create',[App\Http\Controllers\Admin\CourseController::class, 'Create'])->name('courseCreate');
Route::post('admin/course/store',[App\Http\Controllers\Admin\CourseController::class, 'Store'])->name('courseStore');
Route::get('admin/course/edit{id}',[App\Http\Controllers\Admin\CourseController::class, 'Edit'])->name('courseEdit');
Route::put('admin/course/update{id}',[App\Http\Controllers\Admin\CourseController::class, 'Update'])->name('courseUpdate');
 

Route::get('admin/login',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminGetLogin'])->name('AdminGetLogin');
Route::post('admin/login',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminLogin'])->name('AdminLogin');
Route::get('admin/register',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminGetRegister'])->name('AdminGetRegister');
Route::post('admin/register',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminRegister'])->name('admin/register');