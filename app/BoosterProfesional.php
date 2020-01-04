<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoosterProfesional extends Model
{
    //

    public $table = "booster_profesional";
    
    protected $fillable = ['idprofesional','frecuencia','intervalo','desactivarNoche'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

}
