<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Day::with('exercises')->get();
        // return $programs;
        return view('admin.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function editProgram(string $idExercise, string $idDay, Request $request){
        $reps = $request->reps;
        $idExercise = $idExercise;
        $idDay = $idDay; 
        $exercises = Exercise::all();
        $days = Day::all();
        return view('admin.program.edit', compact('exercises', 'days', 'idExercise', 'idDay', 'reps'));
    }

    public function updateProgram(Request $request){
        $idExerciseOld = $request->idExerciseOld;
        $idDayOld = $request->idDayOld;
        $idExerciseNew = $request->idExercise;
        $idDayNew = $request->idDay;
        $reps = $request->reps;

        // return $idExerciseNew;
        $checkData = DB::table('programs')->where('exercise_id', '=', $idExerciseNew)->where('day_id', '=', $idDayNew)->get();
        if ($checkData->isNotEmpty()) {
            if ($checkData[0]->reps == $reps) {
                return back()->with('status', 'Data has already been in out record');
            }else{
                $updated = DB::table('programs')->where('exercise_id', '=', $idExerciseOld)->where('day_id', '=', $idDayOld)->update([
                    'exercise_id' => $idExerciseNew,
                    'day_id' => $idDayNew, 
                    'reps' => $reps
                ]);
                if ($updated) {
                    return redirect()->route('program.admin.index')->with('success', 'Your program has been updated!');
                }
            }
            

        }
        $updated = DB::table('programs')->where('exercise_id', '=', $idExerciseOld)->where('day_id', '=', $idDayOld)->update([
            'exercise_id' => $idExerciseNew,
            'day_id' => $idDayNew, 
            'reps' => $reps
        ]);

        if ($updated) {
            return redirect()->route('program.admin.index')->with('success', 'Your program has been updated!');
        }
        return back()->with('failed', 'No program has been updated');
    }
}
