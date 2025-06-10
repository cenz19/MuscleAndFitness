<?php

namespace App\Http\Controllers;

use App\Models\Nutrition;
use Illuminate\Http\Request;

class SupportingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nutritions = Nutrition::all();
        return view('admin.nutrition.index', compact('nutritions'));
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
        $nutrition = Nutrition::find($id);
        return view('admin.nutrition.edit', compact('nutrition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nutrition = Nutrition::find($id);
        $nutrition->name = $request->name;
        $nutrition->calories = $request->calories;
        $nutrition->protein = $request->protein;
        $nutrition->fat = $request->fat;
        $nutrition->carb = $request->carb;
        $nutrition->image_url = $request->image_url;
        if ($nutrition->save()) {
            # code...
            return redirect()->route('nutrition.admin.index')->with('success', 'Nutrition data has been updated!');
        }
        return back()->with('status', 'Nutrition data can\'t be updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
