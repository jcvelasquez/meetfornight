<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlertaProfesional extends Model
{
    //

    public $table = "alerta_profesional";
 
    protected $fillable = ['idusuario','nombre', 'apellido','idalerta','celular','email','razon','created_at'];

    public $timestamps = false;


}
