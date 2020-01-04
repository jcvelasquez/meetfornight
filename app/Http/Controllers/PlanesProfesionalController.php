<?php

namespace App\Http\Controllers;

use App\PlanesProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PlanesProfesionalController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function mostrar()
    {
        //
        return view('forms-perfil-profesional.planes-profesional');
    }


    
    public function create()
    {
        //
    }

 
    
    public function store(Request $request)
    {
        //
    }


    public function show(PlanesProfesional $planesProfesional)
    {
        //
    }


    public function edit(PlanesProfesional $planesProfesional)
    {
        //
    }


    public function update(Request $request, PlanesProfesional $planesProfesional)
    {
        //
    }

 
    public function destroy(PlanesProfesional $planesProfesional)
    {
        //
    }
}
