<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            $foods = [
                [
                    'name' => 'Strawberry (100gr)', 
                    'calories' => 32,
                    'protein' => 0.67,  
                    'carbs' => 7.68,
                    'fat' => 0.3,
                    'image' => 'https://akcdn.detik.net.id/visual/2024/03/07/strawberry-untuk-ibu-hamil_43.jpeg?w=720&q=90'
                ], 
                [
                    'name' => 'Pisang (100gr)', 
                    'calories' => 89,
                    'protein' => 1.09,  
                    'carbs' => 22.84,
                    'fat' => 0.33,
                    'image' => 'https://img-cdn.medkomtek.com/RUklXGTHPi4DFzPKfa3PU98aaeU=/0x0/smart/filters:quality(100):format(webp)/article/a_JO6u4x39rVNX6wPdkkT/original/095609800_1499616877-Kapan-Waktu-yang-Tepat-untuk-Makan-Pisang.jpg'
                ], 
                [
                    'name' => 'Daging Sapi (100gr)', 
                    'calories' => 288,
                    'protein' => 26.33,  
                    'carbs' => 0,
                    'fat' => 19.54,
                    'image' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1720070578/attached_image/6-manfaat-daging-sapi-dan-tips-sehat-mengolahnya.jpg'
                ],   
                [
                    'name' => 'Daging Ayam (100gr)', 
                    'calories' => 237,
                    'protein' => 27.07,  
                    'carbs' => 0,
                    'fat' => 13.49,
                    'image' => 'https://img-cdn.medkomtek.com/Rm20S113XhhxfGBvVcdCzxjVNr8=/fit-in/730x411/smart/filters:quality(100):strip_icc():format(webp)/article/CAdVhN4fKBeqdLeEWpn0G/original/087325500_1547017156-Kenapa-Daging-Ayam-Harus-Dimasak-Sampai-Matang-By-Ekaterina-Kondratova-Shutterstock.jpg'
                ], 
            ];
            return view('supporting.index', compact('foods'));
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
