<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $table = "usuario";
    protected $primarykey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'nombre','correo','telefono','licencia'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','update_at'];

}
