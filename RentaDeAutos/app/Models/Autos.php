<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    public $table = "autos";
    protected $primarykey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'marca','modelo','matricula','transmision','gasolina','estado','Costo_dia'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','update_at'];

}
