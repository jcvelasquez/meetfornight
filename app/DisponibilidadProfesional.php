<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class DisponibilidadProfesional extends Model
{
    
    public $table = "disponibilidad_profesional";

    protected $fillable = ['idusuario','desde', 'hasta','dia'];

    protected $appends = ['idesde','ihasta'];

    protected $casts = [
        'desde' => 'time',
        'idesde' => 'integer',
        'hasta' => 'time',
        'ihasta' => 'integer'
    ];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idusuario', 'id');
    }

    public function getDesdeAttribute()
    {
        return (new Carbon($this->attributes['desde']))->format('H:i');
    }

    public function getIdesdeAttribute()
    {
        return (int) (new Carbon($this->desde))->format('H');
    }

    public function getHastaAttribute() {
        return (new Carbon($this->attributes['hasta']))->format('H:i');
    }

    public function getIhastaAttribute() {
        return (int) (new Carbon($this->hasta))->format('H');
    }


    /*
    public function setDesdeAttribute( $value ) {
        $this->attributes['desde'] = (new Carbon($value))->format('H:i:s');
    }

    public function setHastaAttribute( $value ) {
        $this->attributes['hasta'] = (new Carbon($value))->format('H:i:s');
    }*/


}
