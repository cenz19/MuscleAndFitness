<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    function show(){
        $exercises = Exercise::join('program_exercise as pe', 'pe.exercise_id', '=', 'exercises.id')
        ->join('programs as p', 'pe.program_id', '=', 'p.id')
        ->select('exercises.name as exercise_name', 'exercises.description as exercise_description', 
                    'p.name as program_name', 'p.description as program_description')
        ->get();

        // return response()->json($exercises);
        return view('exercise.index', ['exercises' => $exercises]);
    }
}
