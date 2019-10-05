<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\ServiciosProfesional;
use App\ServiciosXProfesional;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function mostrar($apodo)
    {


        $perfil = DB::table('usuarios')->join('usuarios_extras', 'usuarios.id', '=', 'usuarios_extras.idusuario')
        ->where('usuarios.id', '=', 34)
        ->get();

        $servicios = DB::table('servicios_profesional')->join('servicios_x_profesional', 'servicios_profesional.id', '=', 'servicios_x_profesional.idservicio')
        ->select('servicios_profesional.nombre_servicio, servicios_profesional.categoria_servicio')
        ->where('servicios_x_profesional.idusuario', '=', 34)
        ->get();

        $servicios_personalizados = DB::table('servicios_profesional as sp')->rightJoin('servicios_x_profesional as sxp', 'sp.id', '=', 'sxp.idservicio')
        //->select('sp.nombre_servicio, sp.categoria_servicio')
        ->where('sxp.idusuario', '=', 34)->where('sxp.idservicio', '=', NULL)
        ->get();

            /*->select('articulos.id','articulos.idcategoria','articulos.codigo','articulos.nombre','categorias.nombre as nombre_categoria','articulos.precio_venta','articulos.stock','articulos.descripcion','articulos.condicion')*/

       

            return ['perfil' => $perfil, 'servicios' => $servicios, 'servicios_personalizados' => $servicios_personalizados ];


    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Perfil $perfil)
    {
        //
    }


    public function edit(Perfil $perfil)
    {
        //
    }


    public function update(Request $request, Perfil $perfil)
    {
        //
    }

    public function destroy(Perfil $perfil)
    {
        //
    }
}
