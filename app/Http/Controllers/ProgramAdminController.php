<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Exercise;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ProgramAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::with(['category', 'day', 'exercise'])->get();
    
        // Sort programs by category_id, then by day_id
        $sortedPrograms = $programs->sortBy([
            ['category_id', 'asc'],
            ['day_id', 'asc']
        ]);
    
        // Group by category (Name), then by day (Name)
        $groupedPrograms = $sortedPrograms->groupBy(function ($program) {
            return $program->category->name;
        })->map(function ($categoryGroup) {
            return $categoryGroup->groupBy(function ($program) {
                return $program->day->name;
            });
        });
    
        return view('admin.program.index', compact('groupedPrograms'));
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
    public function edit($idExercise, $idDay, $idCategory)
    {
        $program = Program::where('exercise_id', $idExercise)
                        ->where('day_id', $idDay)
                        ->where('category_id', $idCategory)
                        ->firstOrFail();

        return view('admin.program.edit', [
            'exercises' => Exercise::all(),
            'days' => Day::all(),
            'categories' => Category::all(),
            'reps' => $program->reps,
            'idExercise' => $idExercise,
            'idDay' => $idDay,
            'idCategory' => $idCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $idExerciseOld = $request->idExerciseOld;
        $idDayOld = $request->idDayOld;
        $idCategoryOld = $request->idCategoryOld;
    
        $idExerciseNew = $request->idExercise;
        $idDayNew = $request->idDay;
        $idCategoryNew = $request->idCategory;
        $reps = $request->reps;
    
        // Validate inputs
        $request->validate([
            'idExercise' => 'required|exists:exercises,id',
            'idDay' => 'required|exists:days,id',
            'idCategory' => 'required|exists:categories,id',
            'reps' => 'required|integer|min:1',
        ]);
    
        // If keys don't change, allow updating reps
        if (
            $idExerciseOld == $idExerciseNew &&
            $idDayOld == $idDayNew &&
            $idCategoryOld == $idCategoryNew
        ) {
            $current = DB::table('programs')
                ->where('exercise_id', $idExerciseOld)
                ->where('day_id', $idDayOld)
                ->where('category_id', $idCategoryOld)
                ->first();
    
            if ($current && $current->reps == $reps) {
                return back()->with('status', 'No changes made. The same reps already exist.');
            }
    
            DB::table('programs')
                ->where('exercise_id', $idExerciseOld)
                ->where('day_id', $idDayOld)
                ->where('category_id', $idCategoryOld)
                ->update(['reps' => $reps]);
    
            return redirect()->route('admin-program.index')
                             ->with('success', 'Reps updated successfully!');
        }
    
        // Check if new combination already exists
        $existing = DB::table('programs')
            ->where('exercise_id', $idExerciseNew)
            ->where('day_id', $idDayNew)
            ->where('category_id', $idCategoryNew)
            ->first();
    
        if ($existing) {
            if ($existing->reps == $reps) {
                return back()->with('status', 'This program with the same combination and reps already exists.');
            } else {
                return back()->with('status', 'A program with the same combination already exists. Change the combination or modify the existing one.');
            }
        }
    
        // Update the old entry to new one
        $updated = DB::table('programs')
            ->where('exercise_id', $idExerciseOld)
            ->where('day_id', $idDayOld)
            ->where('category_id', $idCategoryOld)
            ->update([
                'exercise_id' => $idExerciseNew,
                'day_id' => $idDayNew,
                'category_id' => $idCategoryNew,
                'reps' => $reps,
            ]);
    
        if ($updated) {
            return redirect()->route('admin-program.index')
                             ->with('success', 'Program updated successfully!');
        }
    
        return back()->with('failed', 'No changes were made to the program.');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Controller Method: edit()
    public function showModalEdit($idExercise, $idDay, $idCategory)
    {
        
    }
}
