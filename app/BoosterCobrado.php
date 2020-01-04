<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BoosterCobrado extends Model
{
    //

    public $table = "booster_cobrados_profesional";

    protected $appends = ['es_booster','uid','timestamp','fecha','hora'];

    public function getFechaAttribute()
    {
        return (new Carbon($this->attributes['created_at']))->format('d/m/Y');
    }

    public function getHoraAttribute()
    {
        return (new Carbon($this->attributes['created_at']))->format('H:i');
    }

    public function getEsBoosterAttribute()
    {
        return 1;
    }

    public function getUidAttribute()
    {
        return uniqid().Carbon::parse($this->attributes['created_at'])->getTimestamp();  
    }

    public function getTimestampAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->getTimestamp();  
    }

    public function setEsBoosterAttribute($value)
    {
        $this->attributes['es_marcado'] = 1;
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categorias', 'idcategoria', 'id');
    }


}
