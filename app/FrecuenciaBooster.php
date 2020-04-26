<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class FrecuenciaBooster extends Model
{
    //

    public $table = "booster_frecuencia_profesional";
 
    protected $fillable = ['idprofesional','idcategoria','fecha_booster'];

    protected $appends = ['fecha','hora'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

    public function getFechaAttribute()
    {
        return (new Carbon($this->attributes['fecha_booster']))->format('d/m/Y');
    }

    public function getHoraAttribute()
    {
        return (new Carbon($this->attributes['fecha_booster']))->format('H:i');
    }

}
