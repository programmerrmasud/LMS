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

// Book Adress Collection Route Start
Route::get('user/bookform',[App\Http\Controllers\UserData\FormController::class, 'index'])->name('from.index');
Route::get('user/bookform/{district_id}',[App\Http\Controllers\UserData\FormController::class, 'getLocations'])->name('getLocation');
Route::post('user/bookstore',[App\Http\Controllers\UserData\FormController::class, 'store'])->name('from.store');
// Book Adress Collection Route End

// This is Admin Panel Rout for maintaining User CRUD
Route::resource('resources', App\Http\Controllers\Admin\UserResourceController::class);

// Admin Dashboard Managment Start
Route::get('admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
// Admin Dashboard Managment End


// Admin Course Managment Start
Route::get('admin/course/index',[App\Http\Controllers\Admin\CourseController::class, 'Index'])->name('courseIndex');
Route::get('admin/course/create',[App\Http\Controllers\Admin\CourseController::class, 'Create'])->name('courseCreate');
Route::post('admin/course/store',[App\Http\Controllers\Admin\CourseController::class, 'Store'])->name('courseStore');
Route::get('admin/course/edit{id}',[App\Http\Controllers\Admin\CourseController::class, 'Edit'])->name('courseEdit');
Route::put('admin/course/update{id}',[App\Http\Controllers\Admin\CourseController::class, 'Update'])->name('courseUpdate');
Route::delete('admin/course/delete{id}',[App\Http\Controllers\Admin\CourseController::class, 'Delete'])->name('courseDelete');
 // Admin Course Managment End

 // Book Managment Start
 Route::get('admin/book/index',[App\Http\Controllers\Admin\BookController::class, 'Index'])->name('bookIndex');
 Route::get('admin/book/create',[App\Http\Controllers\Admin\BookController::class, 'Create'])->name('bookCreate');
 Route::post('admin/book/store',[App\Http\Controllers\Admin\BookController::class, 'Store'])->name('bookStore');
 Route::get('admin/book/edit{id}',[App\Http\Controllers\Admin\BookController::class, 'Edit'])->name('bookEdit');
 Route::put('admin/book/update{id}',[App\Http\Controllers\Admin\BookController::class, 'Update'])->name('bookUpdate');
 Route::delete('admin/course/delete{id}',[App\Http\Controllers\Admin\BookController::class, 'Delete'])->name('courseDelete');
 // Book Managment End

 // BSc Students Managment Start
 Route::get('admin/students/bsc/index',[App\Http\Controllers\Admin\BscController::class, 'Index'])->name('bscIndex');
 Route::get('admin/students/bsc/create',[App\Http\Controllers\Admin\BscController::class, 'Create'])->name('bscCreate');
 Route::post('admin/students/bsc/store',[App\Http\Controllers\Admin\BscController::class, 'Store'])->name('bscStore');
 Route::get('admin/students/bsc/edit{id}',[App\Http\Controllers\Admin\BscController::class, 'Edit'])->name('bscEdit');
 Route::put('admin/students/bsc/update{id}',[App\Http\Controllers\Admin\BscController::class, 'Update'])->name('bscUpdate');
 Route::delete('admin/students/bsc/delete{id}',[App\Http\Controllers\Admin\BscController::class, 'Delete'])->name('bscDelete');
 // BSc Students Managment End

//  Admin log in route Start
Route::get('admin/login',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminGetLogin'])->name('AdminGetLogin');
Route::post('admin/login',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminLogin'])->name('AdminLogin');
Route::get('admin/register',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminGetRegister'])->name('AdminGetRegister');
Route::post('admin/register',[App\Http\Controllers\Admin\Auth\AuthController::class, 'AdminRegister'])->name('admin/register');
//  Admin log in route End