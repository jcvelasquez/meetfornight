<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MensajeProfesional extends Model
{
    
    public $table = "mensaje_profesional";
 
    protected $fillable = ['idprofesional','mensaje'];
    protected $appends = ['responder','esActivo'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idusuario', 'id');
    }

    public function profesional()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\MensajeProfesional', 'parent_id', 'id');
    }

    public function respuestas()
    {
        return $this->belongsTo('App\MensajeProfesional', 'parent_id', 'id');
    }

    public function getCreatedAtAttribute( $value ) {
        return (new Carbon($value))->format('d/m/Y - H:i:s');
    }

    public function getEsActivoAttribute( $value ) {
        return 0;
    }

    public function getResponderAttribute( $value ) {
        return "";
    }

}
