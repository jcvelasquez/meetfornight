<?php

namespace App\Http\Controllers;

use App\ServiciosXProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ServiciosXProfesionalController extends Controller
{

    
    public function listar()
    {
        //

            $servicios_x_profesional = ServiciosXProfesional::all();

            return ['servicios_x_profesional' => $servicios_x_profesional];  


    }


}
