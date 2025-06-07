<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercises = Exercise::all();
        // return $exercises;
        return view('admin.exercise.index', compact('exercises'));
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
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exercise = Exercise::find($id);
        return view('admin.exercise.edit', compact('exercise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exercise = Exercise::find($id);
        if ($exercise) {
            $exercise->name = $request->exercise_name;
            $exercise->description = $request->exercise_desc;
            if ($exercise->save()) {
                return redirect()->route('exercise.admin.index')->with('success', "Your data has been succesfully updated!");
            }
            return redirect()->back()->with('failed', "Your data can't be updated");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
