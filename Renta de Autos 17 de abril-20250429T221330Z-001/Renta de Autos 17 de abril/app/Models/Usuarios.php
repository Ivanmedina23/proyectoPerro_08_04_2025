<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public $table = "usuarios";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'nombre','correo','telefono','licencia'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];

}
