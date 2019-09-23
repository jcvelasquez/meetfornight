<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoProfesional extends Model
{
    //

    public $table = "foto_profesional";
 
    protected $fillable = ['idusuario','url_foto'];

    public $timestamps = false;



}
