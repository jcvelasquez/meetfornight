<?php

namespace App\Http\Controllers;

use App\Idiomas;
use Illuminate\Http\Request;

class IdiomasController extends Controller
{

    
    public function listar(Request $request)
    {
        //
        $idiomas = Idiomas::all();

        return ['idiomas' => $idiomas];


    }


    
    public function create()
    {
        //
    }


    
    public function store(Request $request)
    {
        //
    }


    
    public function show(Idiomas $idiomas)
    {
        //
    }



    public function edit(Idiomas $idiomas)
    {
        //
    }


    
    public function update(Request $request, Idiomas $idiomas)
    {
        //
    }


    
    public function destroy(Idiomas $idiomas)
    {
        //
    }
}
