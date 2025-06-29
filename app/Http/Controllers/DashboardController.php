<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Exercise::with('days')->get();
        return view('dashboard.program.program', compact('programs'));
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
        $program = Program::findOrFail($id);
        return view('dashboard.program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $program = Program::find($id);
        $program->name = $request->program_name;
        $program->save();

        return redirect()->route('dashboard.index')->with('success', 'Update Successful');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
