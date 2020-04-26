<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiciosProfesional extends Model
{
    //

    protected $table = 'servicios_profesional';
    
    protected $fillable = ['nombre_servicio','categoria_servicio','estado_servicio', 'es_admin'];

    protected $appends = ['es_marcado'];

    public $timestamps = false;

    public function getEsMarcadoAttribute()
    {
        return $this->attributes['es_marcado'];
    }

    public function setEsMarcadoAttribute($value)
    {
        $this->attributes['es_marcado'] = $value;
    }

    

}
