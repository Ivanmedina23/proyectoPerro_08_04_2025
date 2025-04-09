<?php

namespace App\Http\Controllers;

use App\Models\Renta;
use App\Http\Requests\StoreRentaRequest;
use App\Http\Requests\UpdateRentaRequest;

class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Renta::all(),200);
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRentaRequest $request)
    {
        return response ()->json(Renta::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Renta $Renta)
    {
        return response()->json($Renta,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRentaRequest $request, Renta $renta)
    {
        return response()->json($renta->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renta $renta)
    {
        return response()->json($renta->delete(),200);
    }
}
