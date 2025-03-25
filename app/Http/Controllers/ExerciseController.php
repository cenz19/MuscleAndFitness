<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Exercise;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExerciseController extends Controller
{
    function show(){
        // SQL query from earlier
        $data = DB::select("
            SELECT 
                e.name as exercise_name,
                d.name as day_name,
                pr.name as program_name,
                p.reps
            FROM program_exercise as p
            INNER JOIN exercises as e ON e.id = p.exercise_id 
            INNER JOIN days as d ON d.id = p.day_id
            INNER JOIN programs as pr ON pr.id = p.program_id
        ");

        $structuredData = [];

        // Organize data: Exercise -> Day -> Program (with reps)
        foreach ($data as $row) {
            $exercise = $row->exercise_name;
            $day = $row->day_name;
            $programDetail = "{$row->program_name}: {$row->reps}x";

            if (!isset($structuredData[$exercise])) {
                $structuredData[$exercise] = [];
            }

            if (!isset($structuredData[$exercise][$day])) {
                $structuredData[$exercise][$day] = [];
            }

            $structuredData[$exercise][$day][] = $programDetail;
        }

        // Pass data to view
        return view('exercise.index', compact('structuredData'));
    }

    public function index(){        
        $datas = DB::select("
            SELECT 
                e.name as exercise_name,
                d.name as day_name,
                pr.name as program_name,
                p.reps
            FROM program_exercise as p
            INNER JOIN exercises as e ON e.id = p.exercise_id 
            INNER JOIN days as d ON d.id = p.day_id
            INNER JOIN programs as pr ON pr.id = p.program_id
        ");

        return view('dashboard.exercise.exercise', compact('datas'));
    }

    public function edit(Request $request){
        $program = $request->program_name;
        $exercise = $request->exercise_name;
        $day = $request->day_name;
        $reps = $request->reps;
        $query = DB::select("
            SELECT 
                e.name as exercise_name,
                d.name as day_name,
                pr.name as program_name,
                p.reps
                FROM program_exercise as p
                INNER JOIN exercises as e ON e.id = p.exercise_id 
                INNER JOIN days as d ON d.id = p.day_id
                INNER JOIN programs as pr ON pr.id = p.program_id
                WHERE e.name = '$exercise' AND d.name = '$day' AND pr.name = '$program' AND p.reps = '$reps';
        ");
        $programs = Program::all();
        $exercises = Exercise::all();
        $days = Day::all();
        return view('dashboard.exercise.edit', compact('query', 'programs', 'exercises', 'days'));
    }
}
