<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservasProfesional;
use App\Usuario;

use DateTime;

class ReservasProfesionalController extends Controller
{

    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

  
    
    public function registrar(Request $request)
    {

        $usuario = Usuario::where('apodo', '=', $request->apodo)->firstOrFail();

        $reserva = new ReservasProfesional();
        $reserva->idprofesional = 34;
        $reserva->idusuario = $usuario->id;
        $reserva->desde = $request->desde;
        $reserva->hasta = $request->hasta;
        $reserva->servicios = json_encode($request->servicios);
        $reserva->direccion = $request->direccion;
        $reserva->extras = $request->extras;
        $reserva->total = $request->total;
        $reserva->es_aceptada = 0;
        $reserva->save();

        return ['mensaje' => 'Reserva registrada correctamente', 'reserva' => $reserva, 'usuario' => $usuario];

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
