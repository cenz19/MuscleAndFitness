<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SupportingController;
use App\Models\Exercise;
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
    return view('home.index');
});

Route::get('/template', function(){
    return view('layouts.app');
});

Route::get('/home', function(){
    return view('home.index');
});

Route::get('/about', function(){
    return view('about.index');
}); 

Route::get('/login', function(){
    return view('login.index');
});

Route::get('/program', [ProgramController::class, 'show'])->name("program");

Route::get('/exercise', [ExerciseController::class, 'show']);




Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::resource('/dashboard', DashboardController::class);  
Route::get('/exercise-admin', [ExerciseController::class, 'index'])->name('exercise.index');
Route::post('/exercise-admin', [ExerciseController::class, 'edit'])->name('exercise');

Route::resource('/supporting-factors', SupportingController::class)->names('supporting-factors');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/exercise/edit', [ExerciseController::class, 'edit'])->name('exercise.edit');
Route::put('/exercise/update/{id}', [ExerciseController::class, 'update'])->name('exercise.update');

