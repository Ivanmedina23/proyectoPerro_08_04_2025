<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use App\Http\Requests\StoreAutosRequest;
use App\Http\Requests\UpdateAutosRequest;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(autos::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutosRequest $request)
    {
        return response ()->json(autos::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(autos $auto)
    {
        return response()->json($auto,200);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutosRequest $request, autos $auto)
    {
        return response()->json($auto->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autos $auto)
    {
        return response()->json($auto->delete(),200);
    }
}
