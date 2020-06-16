<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //

    public function mostrar(Request $request)
    {

        $perfiles = DB::table('usuarios')->join('foto_profesional', 'usuarios.id', '=', 'foto_profesional.idusuario')
                                        ->where('foto_profesional.orden', '=', 0)
                                        ->select('usuarios.id', 'nombre','apodo','url_foto')->take(4)->get();  

        $articulos = Blog::paginate(6);

        return view('blog', compact('perfiles', 'articulos') );  

        
    }

    public function leer(Request $request)
    {

        $perfiles = DB::table('usuarios')->join('foto_profesional', 'usuarios.id', '=', 'foto_profesional.idusuario')
                                        ->where('foto_profesional.orden', '=', 0)
                                        ->select('usuarios.id', 'nombre','apodo','url_foto')->take(4)->get(); 

        $articulo = Blog::find( $request->id);

        return view('blog', compact('perfiles','articulo') ); 


        
    }

    public function listar(Request $request)
    {
        
            //CONSULTA DE LOS REGISTRADOS

            $articulos = Blog::paginate(32);

            return [
                'pagination' => [
                    'total'        => $articulos->total(),
                    'current_page' => $articulos->currentPage(),
                    'per_page'     => $articulos->perPage(),
                    'last_page'    => $articulos->lastPage(),
                    'from'         => $articulos->firstItem(),
                    'to'           => $articulos->lastItem(),
                ],
                'arArticulos' => $articulos->values()->all()
            ];
        

    }




}
