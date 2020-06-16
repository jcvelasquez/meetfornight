<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use Exception;

class CategoriasController extends Controller
{

    
    public function listar(Request $request)
    {
        //        
        $categorias = Categorias::all();

        return ['categorias' => $categorias];  

    }


    public function grabar(Request $request)
    {
        
        $idioma = Categorias::updateOrCreate([ 'id'   => $request->id ],
        [
            'nombre_categoria'     => $request->nombre_categoria,
            'icono_categoria'     => $request->icono_categoria,
            'estado_categoria' => $request->estado_categoria
        ]);

        $idioma->save();

        return ["mensaje" => "La categoria se actualizó correctamente"];
        
    }


    
    public function eliminar(Request $request)
    {

        $msg = "La categoria se eliminó correctamente";
        $code = 0;
        $status = "success";
        
        try {
            
            Categorias::where('id',$request->id)->delete();

        } catch (Exception $e) {

            if ($e->getCode() == 23000) {
                // Deal with duplicate key error  
                $msg = "La categoria no se puede eliminar porque está siendo usada en algún lugar del sistema. En su defecto puedes desactivarla o editarla.";
                $code = $e->getCode();
                $status = "error";
            }

        }

        return ["status" => $status, "mensaje" => $msg , "code" => $code];


    }


}
