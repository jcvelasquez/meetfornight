<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    //

    public $table = "states";

    protected $fillable = ['name_state','country_id'];

}
