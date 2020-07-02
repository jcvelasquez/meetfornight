<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    public $table = "blog";
    
    protected $fillable = ['idcountry','titulo','subtitulo','slug', 'imagen_alt','descripcion_seo','keywords_seo','contenido'];

}
