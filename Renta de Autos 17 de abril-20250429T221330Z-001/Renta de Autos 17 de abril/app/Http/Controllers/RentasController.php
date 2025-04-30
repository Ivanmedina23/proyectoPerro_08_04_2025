<?php

namespace App\Http\Controllers;

use App\Models\Rentas;
use App\Http\Requests\StoreRentasRequest;
use App\Http\Requests\UpdateRentasRequest;

class RentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Rentas::all(),200);
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRentasRequest $request)
    {
        return response ()->json(Rentas::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rentas $Rentum)
    {
        return response()->json($Rentum,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRentasRequest $request, Rentas $renta)
    {
        return response()->json($renta->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rentas $renta)
    {
        return response()->json($renta->delete(),200);
    }
}
