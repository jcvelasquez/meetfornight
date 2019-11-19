<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasProfesional extends Model
{
    //
    public $table = "categorias_profesional";

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
    

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Categorias', 'idcategoria', 'id');
    }

}
