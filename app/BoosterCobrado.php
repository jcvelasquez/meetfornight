<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BoosterCobrado extends Model
{
    //

    public $table = "booster_cobrados_profesional";

    public static $withoutAppends = false;

    protected $appends = ['es_booster','uid','timestamp','fecha','hora'];

    public function getFechaAttribute()
    {
        return (new Carbon($this->attributes['created_at']))->format('d/m/Y');
    }

    public function getHoraAttribute()
    {
        return (new Carbon($this->attributes['created_at']))->format('H:i');
    }

    protected function getArrayableAppends()
    {
        if(self::$withoutAppends){
            return [];
        }
        return parent::getArrayableAppends();
    }

    public static function disableDynamicAccessors()
    {
        self::$withoutAppends = true;
    }

    public function getEsBoosterAttribute()
    {
        return 1;
    }

    public function categoriashome()
    {
        return $this->hasMany('App\CategoriasProfesional', 'idprofesional', 'id')->join('categorias', 'categorias_profesional.idcategoria','=', 'categorias.id');
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
        $this->attributes['es_booster'] = 1;
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
