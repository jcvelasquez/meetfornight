<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planes;
use App\Usuario;
use App\PlanesProfesional;
use Hash;
use Carbon\Carbon;
use App\Notifications\VerificarEmail;


class CrearCuentaController extends Controller
{
    //

    public function checkEmail(Request $request)
    {

        if(Usuario::where('email', '=', $request->email)->exists()) {
            return "false";
        }else{
            return "true";
        }
  
    }

    public function registrarUsuario(Request $request)
    {

        $usuario = new Usuario();
        $usuario->idrol = 3;
        $usuario->nombre = $request->nombre;
        $usuario->apodo = $request->apodo;
        $usuario->email = $request->email;
        $usuario->password = Hash::make( $request->password );
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->nacionalidad = $request->nacionalidad;
        $usuario->tipo_celular = "CELULAR";
        $usuario->idioma = $request->idioma;        
        $usuario->celular = $request->celular;
        $usuario->estado = 1;
        $usuario->save();

        $plan = new PlanesProfesional();
        $plan->idprofesional = $usuario->id;
        $plan->idplan = $request->idplan;
        $plan->meses_suscripcion = $request->meses;
        $plan->inicio_suscripcion = Carbon::now()->format('Y-m-d H:i:s');
        $plan->estado_suscripcion = 1;
        $plan->save();

        $usuario->notify(new VerificarEmail($usuario));
        

        return ['mensaje' => 'Cuenta creada correctamente, se envio un correo de confirmación. Pulse aceptar para iniciar sesión en nuestra plataforma'];

    }

    public function registrarDataProfesional(Request $request)
    {
        //
    }


    public function mostrarRegistroUsuario(Request $request){


        $planes = Planes::where('estado_plan','=',1)->where('tipo_usuario','=','USUARIO')->get();    

        return view('crear-cuenta-usuario',compact('planes'));

    }

    public function mostrarRegistroProfesional(Request $request){

        $planes = Planes::where('estado_plan','=',1)->where('tipo_usuario','=','PROFESIONAL')->get();    

        return view('crear-cuenta-profesional',compact('planes'));

    }

    public function mostrarOpcionesRegistro(Request $request){

        return view('crear-cuenta');

    }

    


    
    

}
