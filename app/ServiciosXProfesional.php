<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ServiciosXProfesional extends Model
{
    //
    protected $table = 'servicios_x_profesional';
    protected $fillable = ['idusuario','nombre_servicio','categoria_servicio'];

    protected $appends = ['estado_servicio','es_admin','es_marcado'];
    
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }


    public function getEstadoServicioAttribute()
    {
        return 1;
    }

    public function getEsAdminAttribute()
    {
        return 0;
    }

    public function getEsMarcadoAttribute()
    {
        return $this->attributes['es_marcado'];
    }

    public function setEsMarcadoAttribute($value)
    {
        $this->attributes['es_marcado'] = $value;
    }


}
