<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','verified']);
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
