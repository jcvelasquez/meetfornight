<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Rol;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   
    public function listarProfesionales(Request $request)
    {
        
        //if (!$request->ajax()) return redirect('/');

        $idrol = 4;

        //$idrol = $request->idrol;

/*
        $buscar = $request->buscar;
        
        
        if ($buscar==''){*/

           
       /* }
        else{*/

           /* $personas = User::join('personas','users.id','=','personas.id')
            ->join('roles','users.idrol','=','roles.id')
            ->select('personas.id','personas.nombre','personas.tipo_documento',
            'personas.num_documento','personas.direccion','personas.telefono',
            'personas.email','users.usuario','users.password',
            'users.condicion','users.idrol','roles.nombre as rol')            
            ->where('personas.'.$criterio, 'like', '%'. $buscar . '%')
            ->orderBy('personas.id', 'desc')->paginate(3);*/

       // }
        

       $usuarios = Usuario::join('usuarios_extras','usuarios.id','=','usuarios_extras.idusuario')
       ->join('roles','usuarios.idrol','=','roles.id')
       ->select('usuarios.id','usuarios.nombre','usuarios.fecha_nacimiento',
       'usuarios_extras.departamento','usuarios.idrol','roles.nombre_rol as rol')
       ->where('usuarios.idrol', '=', $idrol )->paginate(32);

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


    public function mostrarPerfilProfesionalLogueado(){

        return view('forms-perfil-profesional.perfil-profesional');

    }

    public function mostrarPerfilUsuarioLogueado(){

        return view('forms-perfil-usuario.perfil-usuario');

    }

    public function editarDataPerfilProfesional(Request $request){

        //if(!$request->ajax()) return redirect('/');

        /*$usuario = Usuario::join('usuarios_extras','usuarios.id','=','usuarios_extras.idusuario')
        ->join('roles','usuarios.idrol','=','roles.id')
        ->select('usuarios.id','usuarios.nombre','usuarios.fecha_nacimiento',
        'usuarios_extras.departamento','usuarios.idrol','roles.nombre_rol as rol')
        ->where('usuarios.id', '=', $request->id )->first();*/


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
        return Usuario::findOrFail(41);
    }


    

    

}
