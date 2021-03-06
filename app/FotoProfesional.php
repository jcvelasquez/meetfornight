<?php

namespace App;
use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class FotoProfesional extends Model
{
    //

    public $table = "foto_profesional";
 
    protected $fillable = ['idusuario','url_foto'];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idusuario', 'id');
    }



}
