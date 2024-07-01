<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\companiesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RoleController;



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

Route::get('master',function() {
    return view('layout/master');
});

Route::get('post',function(){
    return view('layout.post');
});

Route::get('table',function () {
    return view('layout.table');
});

Route::get('about',function(){
    return view('layout.about');
});

Route::get('header',function(){
    return view('layout.header');
});

Route::get('footer',function(){
    return view('layout.footer');
});

Route::get('test',function(){
    return view('layout.test');
});

Route::get('student',[StudentController::class,'index'])->name('student.student');

Route::get('book',[BookController::class,'index']);

Route::get('store',[StoreController::class,'index'])->name('store.store');

Route::get('role',[RoleController::class,'index']);

Auth::routes();
//regenrate
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'ChangePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');


