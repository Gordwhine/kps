<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentRegistrationController;

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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/teachers', [FrontController::class, 'teachers'])->name('teachers');
Route::get('/subjects', [FrontController::class, 'subjects'])->name('subjects');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('enquires', [DashboardController::class, 'enquires'])->name('enquires');

    Route::get('students', [StudentController::class, 'index'])->name('students');


    Route::get('register', [StudentRegistrationController::class, 'create'])->name('register');


    Route::get('confirm', [PaymentController::class, 'index'])->name('confirm');


    Route::get('subjects', [SubjectController::class, 'index'])->name('subjects');
    Route::get('create-subject', [SubjectController::class, 'create'])->name('create-subject');


    Route::get('results', [ResultController::class, 'index'])->name('results');


    Route::get('teachers', [TeachersController::class, 'index'])->name('teachers');
    Route::get('create', [TeachersController::class, 'create'])->name('create');
});
