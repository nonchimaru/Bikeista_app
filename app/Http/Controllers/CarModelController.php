<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use App\Models\Manufacture;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carModels = Manufacture::with('cars:manufacture_id,car_model')->get(['id', 'name']);

        return response()->json([
            'carModels' => $carModels
        ], 200);
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
    public function show(CarModel $carModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarModel $carModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarModel $carModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarModel $carModels)
    {
        //
    }
}
