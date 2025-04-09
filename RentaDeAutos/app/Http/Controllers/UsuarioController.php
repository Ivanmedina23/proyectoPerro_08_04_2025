<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Usuario::all(), 200);  // Uso correcto de Usuario::all()
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        // Crear un nuevo usuario y devolver la respuesta
        return response()->json(Usuario::create($request->all()), 201);  // Uso correcto de Usuario::create()
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return response()->json($usuario, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        // Actualizar el usuario con los datos del request
        $usuario->update($request->all());
        return response()->json($usuario, 200);  // Devuelve el usuario actualizado
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        // Eliminar el usuario
        $usuario->delete();
        return response()->json(null, 204);  // Devuelve una respuesta 204 No Content después de eliminar
    }
}
