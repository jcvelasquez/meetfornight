<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\BoosterProfesional;


class BoosterProfesionalController extends Controller
{
   
    public function listar(Request $request)
    {
            $idprofesional = Auth::user()->id;
            $booster = BoosterProfesional::where('idprofesional', $idprofesional)->first();
            
            return ['booster' => $booster];

    }

    
    public function actualizar(Request $request)
    {
        //

        
    }

  
    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
    
    public function destroy($id)
    {
        //
    }
}
