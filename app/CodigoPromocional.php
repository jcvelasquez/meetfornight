<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodigoPromocional extends Model
{
    //

    public $table = "codigos_promocional";

    protected $fillable = ['codigo_promocional','descripcion_codigo', 'tipo_descuento','valor_codigo'];
    

}
