<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ReservasProfesional extends Model
{

    public $table = "reservas_profesional";

    protected $fillable = [
        'idprofesional',
        'idusuario',
        'desde',
        'hasta',
        'servicios',
        'direccion',
        'extras',
        'total',
        'es_aceptada',
        'se_desplaza'
    ];

    protected $appends = ['fecha'];

    protected $casts = [
        'servicios' => 'array'
    ];

    public function getFechaAttribute( $value ) {
        return (new Carbon($value))->format('d/m/y');
    }

    public function getDesdeAttribute( $value ) {
        return (new Carbon($value))->format('H:i');
    }
    
    public function getHastaAttribute( $value ) {
        return (new Carbon($value))->format('H:i');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idusuario', 'id');
    }

    public function profesional()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

}
