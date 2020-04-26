<?php

namespace App\Http\Controllers;
use App\CreditoProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class CreditoProfesionalController extends Controller
{

    public function mostrar()
    {
        return view('forms-perfil-profesional.creditos-profesional');
    }


    public function listar(Request $request)
    {

        $idprofesional = Auth::user()->id;

        $creditos = CreditoProfesional::where('idprofesional', '=', $idprofesional)->orderBy('created_at','desc')->get();
        
        return Response::json(['creditos' => $creditos], 200);
    }



    public function store(Request $request)
    {
        //
    }

    public function show($id)
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
