<?php

namespace App\Http\Controllers;

use App\PlanesProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PlanesProfesionalController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function mostrar()
    {
        //
        return view('forms-perfil-profesional.planes-profesional');
    }


}
