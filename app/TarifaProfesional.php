<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarifaProfesional extends Model
{
    //

    public $table = "tarifa_profesional";
 
    protected $fillable =[
        'idusuario','opcion_tarifa', 'costo_tarifa','categoria_tarifa'
    ];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idusuario', 'id');
    }


}
