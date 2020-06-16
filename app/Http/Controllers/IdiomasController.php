<?php

namespace App\Http\Controllers;

use App\Idiomas;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IdiomasController extends Controller
{

    
    public function listar(Request $request)
    {
        //
        $idiomas = Idiomas::all();

        return ['idiomas' => $idiomas];

    }


    public function grabar(Request $request)
    {
        
        $idioma = Idiomas::updateOrCreate([ 'id'   => $request->id ],
        [
            'nombre_idioma'     => $request->nombre_idioma,
            'estado_idioma' => $request->estado_idioma
        ]);

        $idioma->save();

        return ["mensaje" => "El Idioma se actualizó correctamente"];
        
    }

    
    public function eliminar(Request $request)
    {

        $msg = "El idioma se eliminó correctamente";
        $code = 0;
        $status = "success";
        
        try {
            
            Idiomas::where('id',$request->id)->delete();

        } catch (Exception $e) {

            if ($e->getCode() == 23000) {
                // Deal with duplicate key error  
                $msg = "El idioma no se puede eliminar porque está siendo usado en algun lugar del sistema. En su defecto puedes desactivarlo o editarlo.";
                $code = $e->getCode();
                $status = "error";
            }

        }

        return ["status" => $status, "mensaje" => $msg , "code" => $code];


    }






}
