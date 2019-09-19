<?php

namespace App\Http\Controllers;

use App\ServiciosProfesional;
use App\ServiciosXProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ServiciosProfesionalController extends Controller
{

    
    public function listar()
    {


        $servicios = DB::table('servicios_profesional')->where('estado_servicio', '=', 1)
                                                     ->where('es_admin', '=', 1)->get();


        $servicios_x_profesional = ServiciosXProfesional::all();

        return ['servicios' => $servicios, 'servicios_x_profesional' => $servicios_x_profesional];  
      

    }


    
    public function create()
    {
        //
    }


    
    public function store(Request $request)
    {
        //
    }


    
    public function show($id)
    {
        //
    }

 
    
    public function edit($id)
    {
        //
    }


    
    public function update(Request $request, $id)
    {
        //
    }


    
    public function destroy($id)
    {
        //
    }
}
