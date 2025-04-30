<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentas extends Model
{
    public $table = "rentas";
    protected $primaryKey = "id";

    protected $fillable = [
        'idAuto', 'idUsuario', 'FechaInicio', 'FechaFinal', 'EstadoRenta', 'TotalRenta'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}

