<?php

namespace App\Http\Controllers;

use App\Models\CarModels;
use Illuminate\Http\Request;

class CarModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // バイク車種を取得してJSON形式で返す
        $carModels = carModels::all();
        return response()->json([
            'status' => true,
            'carModels' => $carModels
        ]);
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
    public function show(CarModels $carModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarModels $carModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarModels $carModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarModels $carModels)
    {
        //
    }
}
