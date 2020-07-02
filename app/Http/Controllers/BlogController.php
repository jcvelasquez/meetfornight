<?php

namespace App\Http\Controllers;

use App\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //

    public function mostrar(Request $request)
    {

        //CONSULTA DE LOS REGISTRADOS
        if(app()->getLocale() == "pe"){
            $idpais = 172;
        }else if(app()->getLocale() == "pa"){
            $idpais = 169;
        }else{
            $idpais = 205;
        }

        $perfiles = DB::table('usuarios')->join('foto_profesional', 'usuarios.id', '=', 'foto_profesional.idusuario')
                                        ->where('foto_profesional.orden', '=', 0)
                                        ->select('usuarios.id', 'nombre','apodo','url_foto')->take(4)->get();  

        $articulos = Blog::where('idcountry', '=', $idpais )->paginate(6);

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

            if(app()->getLocale() == "pe"){
                $idpais = 172;
            }else if(app()->getLocale() == "pa"){
                $idpais = 169;
            }else{
                $idpais = 205;
            }

            $articulos = Blog::where('idcountry', '=', $idpais )->paginate(32);

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


    public function grabar(Request $request)
    {
        
        $blog = Blog::updateOrCreate([ 'id'   => $request->id ],
        [
            'titulo'     => $request->titulo,
            'subtitulo'     => $request->subtitulo,
            'slug' => $request->slug,
            'imagen' => $request->imagen,
            'imagen_alt' => $request->imagen_alt,
            'descripcion_seo' => $request->descripcion_seo,
            'keywords_seo' => $request->keywords_seo,
            'contenido' => $request->contenido
        ]);

        $blog->save();

        return ["mensaje" => "La categoria se actualizó correctamente"];
        
    }


    
    public function eliminar(Request $request)
    {

        $msg = "El articulo se eliminó correctamente";
        $code = 0;
        $status = "success";
        
        try {
            
            Blog::where('id',$request->id)->delete();

        } catch (Exception $e) {

            if ($e->getCode() == 23000) {
                // Deal with duplicate key error  
                $msg = "El articulo no se puede eliminar porque está siendo usado en algún lugar del sistema. En su defecto puedes desactivarla o editarla.";
                $code = $e->getCode();
                $status = "error";
            }

        }

        return ["status" => $status, "mensaje" => $msg , "code" => $code];


    }




}
