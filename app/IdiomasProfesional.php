<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdiomasProfesional extends Model
{
    //

    public $table = "idiomas_profesional";

    protected $fillable = ['idprofesional','ididioma'];

    protected $appends = ['es_marcado'];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
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
