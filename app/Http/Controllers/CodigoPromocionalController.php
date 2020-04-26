<?php

namespace App\Http\Controllers;

use App\CodigoPromocional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CodigoPromocionalController extends Controller
{
    
    public function listar(Request $request)
    {

        $codigos = CodigoPromocional::get();
        
        return Response::json(['codigos' => $codigos], 200);
    }


 
    public function consultar($codigo)
    {

        $codigo = CodigoPromocional::where('codigo_promocional', '=', $codigo)->first();

        return Response::json(['codigo' => $codigo], 200);
    
        
    }

 
}
