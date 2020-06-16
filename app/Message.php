<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = ['idusuario','message'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idusuario', 'id');
        
    }


}
