<?php

namespace App\Http\Controllers;

use App\DisponibilidadProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DisponibilidadProfesionalController extends Controller
{
   
    public function list(Request $request)
    {
        
        //
            $disponibilidad = DisponibilidadProfesional::where('idusuario', 34)->get();

            return ['disponibilidad' => $disponibilidad];  

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $disponibilidad = new DisponibilidadProfesional;
        $disponibilidad->idusuario = Auth::user()->id;
        $disponibilidad->desde = $request->desde;
        $disponibilidad->hasta = $request->hasta;
        $disponibilidad->dia = $request->dia;
        $disponibilidad->save();

       // $tarifa = TarifaProfesional::create($validatedData);

        return ['mensaje' => 'Disponibilidad registrado correctamente', 'disponibilidad' => $disponibilidad];


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
