<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ReservasProfesional;
use App\Usuario;

class ReservasProfesionalController extends Controller
{

    
    public function mostrar()
    {
        return view('forms-perfil-profesional.reservas-profesional'); 
    }

    public function listar(Request $request)
    {

        $idprofesional = Auth::user()->id;
        
        $reservas = ReservasProfesional::where('idprofesional', '=', $idprofesional)->with('usuario')->get();

        return ['reservas' => $reservas];
    }
  
    public function registrar(Request $request)
    {

        $idusuario = Auth::user()->id;

        $usuario = Usuario::where('apodo', '=', $request->apodo)->firstOrFail();

        $reserva = new ReservasProfesional();
        $reserva->idprofesional = $usuario->id;
        $reserva->idusuario = $idusuario;
        $reserva->desde = $request->desde;
        $reserva->hasta = $request->hasta;
        $reserva->servicios = json_encode($request->servicios);
        $reserva->se_desplaza = $request->se_desplaza;
        $reserva->direccion = $request->direccion;
        $reserva->extras = $request->extras;
        $reserva->total = $request->total;
        $reserva->es_aceptada = 0;
        $reserva->save();

        return ['mensaje' => 'La reserva se ha registrado satisfactoriamente, sin embargo no podemos garantizar la confirmación de la misma. Una vez aceptada la reserva, se le notificará a su correo electrónico.'];

    }

    public function aceptar(Request $request)
    {

        $reserva = ReservasProfesional::find($request->idreserva);
        $reserva->es_aceptada = 1;
        $reserva->save();

        return ['mensaje' => 'Reserva aceptada correctamente'];

    }

    public function rechazar(Request $request)
    {

        $reserva = ReservasProfesional::find($request->idreserva);
        $reserva->es_aceptada = 2;
        $reserva->save();

        /*$order = App\Order::find(1);

        return (new App\Notifications\StatusUpdate($order))
                ->toMail($order->user);*/

        return ['mensaje' => 'Reserva rechazada satisfactoriamente, se le notificó al usuario.'];

    }

 
}
