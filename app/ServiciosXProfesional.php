<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ServiciosXProfesional extends Model
{
    //
    protected $table = 'servicios_x_profesional';
    protected $fillable = ['idusuario','nombre_servicio','categoria_servicio'];
    protected $appends = ['estado_servicio','es_admin'];
    
    public $timestamps = false;


    public function getEstadoServicioAttribute()
    {
        return "1";
    }

    public function getEsAdminAttribute()
    {
        return "0";
    }


}
