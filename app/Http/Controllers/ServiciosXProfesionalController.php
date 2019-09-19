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


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(ServiciosXProfesional $serviciosXProfesional)
    {
        //
    }

 
    public function edit(ServiciosXProfesional $serviciosXProfesional)
    {
        //
    }


    public function update(Request $request, ServiciosXProfesional $serviciosXProfesional)
    {
        //
    }


    public function destroy(ServiciosXProfesional $serviciosXProfesional)
    {
        //
    }
}
