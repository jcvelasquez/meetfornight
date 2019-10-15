<?php

namespace App\Http\Controllers;

use App\ContactoProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactoProfesionalController extends Controller
{

    
    public function list()
    {
        //
    }

    public function mostrar()
    {
        //
        return view('forms-perfil-profesional.contacto-profesional');
        
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
