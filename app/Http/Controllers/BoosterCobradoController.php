<?php

namespace App\Http\Controllers;

use App\BoosterCobrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoosterCobradoController extends Controller
{

    public function listar(Request $request)
    {
        
        $idprofesional = Auth::user()->id;

        $cobrados = BoosterCobrado::where('idprofesional', '=', $idprofesional)->orderBy('created_at','desc')->get();

        return ['cobrados' => $cobrados];  
        
    }

   
    
    public function create()
    {
        //
    }

   
    
    public function store(Request $request)
    {
        //
    }

    
    public function show(BoosterCobrado $boosterCobrado)
    {
        //
    }

   
    
    public function edit(BoosterCobrado $boosterCobrado)
    {
        //
    }

   
    
    public function update(Request $request, BoosterCobrado $boosterCobrado)
    {
        //
    }

   
    
    public function destroy(BoosterCobrado $boosterCobrado)
    {
        //
    }
}
