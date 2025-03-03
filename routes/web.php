<?php

use App\Http\Controllers\ProgramController;
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

Route::get('/template', function(){
    return view('layouts.app');
});

Route::get('/home', function(){
    return view('home.index');
});

Route::get('/about', function(){
    return view('about.index');
}); 

Route::get('/program', [ProgramController::class, 'show']);

Route::get('/exercise', function(){
    return view('exercise.index', []);
});