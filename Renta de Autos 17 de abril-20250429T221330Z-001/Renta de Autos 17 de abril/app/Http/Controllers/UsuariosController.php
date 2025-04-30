<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Http\Requests\StoreUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Usuarios::all(), 200);  // Uso correcto de Usuario::all()
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuariosRequest $request)
    {
        // Crear un nuevo usuario y devolver la respuesta
        return response()->json(Usuarios::create($request->all()), 201);  // Uso correcto de Usuario::create()
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuario)
    {
        return response()->json($usuario, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuariosRequest $request, Usuarios $usuario)
    {
        // Actualizar el usuario con los datos del request
        $usuario->update($request->all());
        return response()->json($usuario, 200);  // Devuelve el usuario actualizado
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuario)
    {
        // Eliminar el usuario
        $usuario->delete();
        return response()->json(null, 204);  // Devuelve una respuesta 204 No Content después de eliminar
    }
}
