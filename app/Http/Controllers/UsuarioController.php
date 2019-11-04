<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Rol;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function listarProfesionales(Request $request)
    {
        

       $usuarios = Usuario::join('usuarios_extras','usuarios.id','=','usuarios_extras.idusuario')
       ->join('roles','usuarios.idrol','=','roles.id')
       ->select('usuarios.id','usuarios.nombre','usuarios.fecha_nacimiento',
       'usuarios_extras.departamento','usuarios.idrol','roles.nombre_rol as rol')
       ->where('usuarios.idrol', '=', 4 )->paginate(32);

        return [
            'pagination' => [
                'total'        => $usuarios->total(),
                'current_page' => $usuarios->currentPage(),
                'per_page'     => $usuarios->perPage(),
                'last_page'    => $usuarios->lastPage(),
                'from'         => $usuarios->firstItem(),
                'to'           => $usuarios->lastItem(),
            ],
            'arUsuarios' => $usuarios
        ];

    }


    public function mostrarPerfilProfesionalLogueado(Request $request){

        //$request->usuario()->authorizeRoles(['Profesional']);


        return view('forms-perfil-profesional.perfil-profesional');

    }

    public function mostrarPerfilUsuarioLogueado(Request $request){

       //$request->Usuario()->authorizeRoles(['Usuario']);

        return view('forms-perfil-usuario.perfil-usuario');

    }

    public function editarDataPerfilProfesional(Request $request){


        $usuario = DB::table('usuarios')->join('usuarios_extras', 'usuarios_extras.idusuario', '=', 'usuarios.id')
                                        ->join('roles', 'roles.id', '=', 'usuarios.idrol')
                                        ->where('usuarios.id', '=', $request->id)
                                        ->first();

        return ['usuario' => $usuario];     

    }

  
    public function create()
    {
        //
    }

     

    public function registrarDataUsuario(Request $request)
    {
       
        $validatedData = $request->validate([
            'nombre'=>'required',
            'apodo'=>'required',
            'email'=>'required',
            'password'=>'required',
            'fecha_nacimiento'=>'required',
            'sexo'=>'required',
            'nacionalidad'=>'required',
            'idioma'=>'required',
            'idrol'=>'required',
            'celular'=>'required',
            'estado'=>'required'
        ]);

        $usuario = Usuario::create($validatedData);

        return redirect('/crear-cuenta-usuario')->with('success', 'Usuario creado!');

    }

    public function registrarDataProfesional(Request $request)
    {
        //
    }

    public function editarDataUsuario(Request $request)
    {
        return Usuario::findOrFail($request->idusuario);
    }


    

    

}
