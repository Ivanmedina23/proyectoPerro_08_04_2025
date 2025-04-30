<?php

namespace App\Http\Controllers\Proceso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rentas;
use App\Models\Autos;
use App\Models\Usuarios;
use Carbon\Carbon;

class ProcesosRentasController extends Controller
{
    public function crearRenta(Request $request)
    {
        // Validación
        $request->validate([
            'idAuto' => 'required|exists:autos,id',
            'idUsuario' => 'required|exists:usuarios,id',
            'FechaInicio' => 'required|date|after_or_equal:today',
            'FechaFinal' => 'required|date|after:FechaInicio',
        ]);

        // Obtener el auto
        $auto = Autos::find($request->idAuto);
        if (!$auto) {
            return response()->json(['error' => 'Auto no encontrado'], 404);
        }

        // Obtener el cliente
        $usuario = Usuarios::find($request->idUsuario);
        if (!$usuario) {
            return response()->json(['error' => 'Ususario no encontrado'], 404);
        }

        // Calcular costo
        $dias = Carbon::parse($request->FechaInicio)->diffInDays(Carbon::parse($request->FechaFinal));
        $costoTotal = ($dias + 1) * $auto->Costo_dia;

        // Crear la renta
        $renta = Rentas::create([
            'idAuto' => $request->idAuto,
            'idUsuario' => $request->idUsuario,
            'FechaInicio' => $request->FechaInicio,
            'FechaFinal' => $request->FechaFinal,
            'EstadoRenta' => true,
            'TotalRenta' => $costoTotal
        ]);

        return response()->json([
            'mensaje' => 'Renta creada exitosamente',
            'renta' => $renta
        ], 201);
    }
}