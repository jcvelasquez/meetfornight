<?php

namespace App\Http\Controllers;
use App\CategoriasProfesional;
use App\DisponibilidadProfesional;
use App\FotoProfesional;
use App\IdiomasProfesional;
use App\Notifications\VerificarEmail;
use App\PlanesProfesional;
use App\ServiciosXProfesional;
use App\TarifaProfesional;
use App\Usuario;
use App\UsuarioExtras;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    //
    private $fotos_profesional_path;

    public function __construct()
    {
        //$this->middleware(['auth','verified']);
        $this->fotos_profesional_path = public_path('fotos-profesionales');
    }

    //METODOS DEL ADMINISTRADOR
    public function mostrarUsuarios(Request $request)
    { 
         return view('forms-administrador.usuarios');
    }

    public function mostrarDashboard(Request $request)
    { 
         return view('forms-administrador.dashboard');
    }

    public function mostrarAlertas(Request $request)
    { 
         return view('forms-administrador.alertas');
    }

    public function mostrarIdiomas(Request $request)
    { 
         return view('forms-administrador.idiomas');
    }

    public function mostrarCategorias(Request $request)
    { 
         return view('forms-administrador.categorias');
    }

    public function mostrarPlanes(Request $request)
    { 
         return view('forms-administrador.planes');
    }


    public function eliminarProfesional()
    { 

          $id = 42;

          CategoriasProfesional::where('idprofesional', $id )->delete();
          DisponibilidadProfesional::where('idusuario',$id)->delete();
          FotoProfesional::where('idusuario',$id)->delete();
          IdiomasProfesional::where('idprofesional',$id)->delete();
          PlanesProfesional::where('idprofesional',$id)->delete();
          ServiciosXProfesional::where('idusuario',$id)->delete();
          TarifaProfesional::where('idusuario',$id)->delete();
          UsuarioExtras::where('idusuario',$id)->delete();
          Usuario::where('id',$id)->delete();
          
          return ["status" => "success"];
    }


    public function testEmail()
    { 
/*
          Usuario::where("email", "=" ,"jcvelasquez@minegociovr.pe")->delete();

          $usuario = new Usuario();
          $usuario->idrol = 3;
          $usuario->nombre = "Test Email";
          $usuario->apodo = "apodo";
          $usuario->email = "jcvelasquez@minegociovr.pe";
          $usuario->password = Hash::make( "123456" );
          $usuario->fecha_nacimiento = Carbon::createFromFormat('d/m/Y', "25/09/1986" );
          $usuario->sexo = "M";
          $usuario->idcountry = 1;
          $usuario->idstate = 1;
          $usuario->idcity = 1;
          $usuario->tipo_celular = "CELULAR";
          $usuario->idioma = "ES";
          $usuario->celular = "964997924";
          $usuario->estado = 1;
          $usuario->save();   


          $usuario->notify(new VerificarEmail($usuario));*/

          $usuario = Usuario::find(55);

          //return (new VerificarEmail($usuario));

          $usuario->notify(new VerificarEmail($usuario));
          
          //return ["status" => "success", "usuario" => $usuario];
    }

   

    public function listarProfesionalesAdmin(Request $request)
    {
        
            //CONSULTA DE LOS REGISTRADOS

            CategoriasProfesional::$withoutAppends = true;

            $usuarios = Usuario::with('fotos')
                                ->with('categorias')
                                ->orderBy('usuarios.created_at','desc')
                                ->paginate(20);    

            $ordenados = $usuarios->values()->all();

            return [
                'pagination' => [
                    'total'        => $usuarios->total(),
                    'current_page' => $usuarios->currentPage(),
                    'per_page'     => $usuarios->perPage(),
                    'last_page'    => $usuarios->lastPage(),
                    'from'         => $usuarios->firstItem(),
                    'to'           => $usuarios->lastItem(),
                ],
                'arUsuarios' => $ordenados,
                'path' => $this->fotos_profesional_path
            ];
        

    }

}
