<?php

namespace App\Http\Controllers;

use App\ServiciosProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ServiciosProfesionalController extends Controller
{

    
    public function list(Request $request)
    {

        $servicios = DB::table('servicios_profesional')->get();

        return ['servicios' => $servicios];  


    }


    
    public function create()
    {
        //
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
