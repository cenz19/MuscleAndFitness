<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\ExerciseAdminController;
use App\Http\Controllers\ExerciseUserController;
use App\Http\Controllers\ProgramAdminController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SupportingController;
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

Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::resource('/exercise-admin', ExerciseAdminController::class)->names('exercise.admin');
Route::resource('/program-admin', ProgramAdminController::class)->names("program.admin");
Route::get('/editProgramAdmin/{idExercise}/{idDay}', [ProgramAdminController::class, 'editProgram'])->name('edit.program.admin');
Route::put('/updateProgram', [ProgramAdminController::class, 'updateProgram'])->name('update.program.admin');
Route::resource('/day', DayController::class)->names('day.admin');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::resource('/dashboard', DashboardController::class);  

Route::resource('/exercise', ExerciseUserController::class)->names('exercise.user');
Route::resource('/supporting-factors', SupportingController::class)->names('supporting-factors');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


