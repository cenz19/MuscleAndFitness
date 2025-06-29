<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExerciseAdminController;
use App\Http\Controllers\ExerciseUserController;
use App\Http\Controllers\ProgramAdminController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SupportingAdminController;
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

Route::get('/home', function(){
    return view('home.index');
});

Route::get('/about', function(){
    return view('about.index');
}); 

Route::get('/login', function(){
    return view('login.index');
});

##PROGRAM
Route::resource('/program', ProgramController::class);
Route::resource('/admin-program', ProgramAdminController::class);
Route::get('/admin/programs/edit/{idExercise}/{idDay}/{idCategory}', [ProgramAdminController::class, 'edit'])
    ->name('admin.program.edit');

Route::put('/admin/programs/update', [ProgramAdminController::class, 'update'])
    ->name('admin.program.update');


Route::put('/updateProgram', [ProgramAdminController::class, 'updateProgram'])->name('update.program.admin');

## EXERCISE
Route::resource('/exercise', ExerciseUserController::class);
Route::resource('/exercise-admin', ExerciseAdminController::class)->names('exercise.admin');

#SUPPORTING FACTOR
Route::resource('/supporting-admin', SupportingAdminController::class)->names('nutrition.admin');


Route::resource('/dashboard', DashboardController::class);  
Route::resource('/supporting-factors', SupportingController::class)->names('supporting-factors');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


