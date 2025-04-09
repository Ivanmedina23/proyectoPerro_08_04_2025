<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    public $table = "Renta";
    protected $primarykey = "IdRenta";

    /**
    * @var array 
    */
    protected $fillable = [
        'IdAuto','IdUsuario','FechaInicio','FechaFinal','EstadoRenta','total'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];

}
