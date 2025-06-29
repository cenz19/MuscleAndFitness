<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Exercise;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $programs = Program::with(['category', 'day', 'exercise'])
        ->get()
        ->sortBy([
            ['category_id', 'asc'],
            ['day_id', 'asc']
        ])
        ->groupBy(function ($program) {
            return $program->category->name;
        })
        ->map(function ($categoryGroup) {
            return $categoryGroup->groupBy(function ($program) {
                return $program->day->name;
            });
        });

    return view('program.index', compact('programs'));
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
        //
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
}
