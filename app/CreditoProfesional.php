<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class CreditoProfesional extends Model
{
    //

    public $table = "creditos_profesional";
 
    protected $fillable = ['idprofesional','metodo_pago','cantidad_creditos','monto_creditos','total_creditos'];

    protected $appends = ['fecha','hora'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

    public function getFechaAttribute( $value ) {
        return (new Carbon($value))->format('d/m/Y');
    }

    public function getHoraAttribute( $value ) {
        return (new Carbon($value))->format('H:i:s');
    }

}
