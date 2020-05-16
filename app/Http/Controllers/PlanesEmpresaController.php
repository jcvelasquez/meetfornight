<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanesEmpresaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function mostrar()
    {
        //
        return view('forms-perfil-empresa.planes-empresa');
    }


}
