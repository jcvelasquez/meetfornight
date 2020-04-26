<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\CategoriasProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CategoriasProfesionalController extends Controller
{

    
    public function listar()
    {
        //

        $idprofesional = Auth::user()->id;

        $categorias = DB::table('categorias_profesional')->join('categorias', 'categorias_profesional.idcategoria', '=', 'categorias.id')
                                        ->select('categorias_profesional.idcategoria','categorias.nombre_categoria')
                                        ->where('categorias_profesional.idprofesional', '=', $idprofesional)
                                        ->get();


        return ['categorias' => $categorias];     

    }

    public function checkSeleccionado($seleccionados, $id){

        foreach ($seleccionados as $selec) {
            
            if($selec->idcategoria == $id){
                return true;
                break;
            }
            
        }

        return false;

    }

    
    public function create()
    {
        //
    }

   
    
    public function store(Request $request)
    {
        //
    }

   
    
    public function show(CategoriasProfesional $categoriasProfesional)
    {
        //
    }

    
    
    public function edit(CategoriasProfesional $categoriasProfesional)
    {
        //
    }

    
    
    public function update(Request $request, CategoriasProfesional $categoriasProfesional)
    {
        //
    }

    
    
    public function destroy(CategoriasProfesional $categoriasProfesional)
    {
        //
    }
}
