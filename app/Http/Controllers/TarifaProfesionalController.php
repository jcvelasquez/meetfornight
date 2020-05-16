<?php

namespace App\Http\Controllers;
use App\TarifaProfesional;
use App\Usuario;
use App\UsuarioExtras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TarifaProfesionalController extends Controller
{


    public function mostrar(){
        return view('forms-perfil-profesional.tarifas-profesional');
    }
    
    public function list(Request $request)
    {

        $idprofesional = Auth::user()->id;

        $tarifas = TarifaProfesional::where('idusuario', $idprofesional)->get();

        $opciones = UsuarioExtras::where('idusuario', $idprofesional)->select('tipo_moneda')->first();

        if($opciones->tipo_moneda == "PEN"){
            $simbolo_moneda = "S/";
        }else if($opciones->tipo_moneda == "USD"){
            $simbolo_moneda = "$";
        }else{
            $simbolo_moneda = "€";
        }

        if(Auth::user()->idcountry == 172){
            $pais = "PE";
        }else if(Auth::user()->idcountry == 169){
            $pais = "PA";
        }else{
            $pais = "ES";
        }

        return ['tarifas' => $tarifas, 'moneda' => $opciones->tipo_moneda, 'simbolo' => $simbolo_moneda, 'pais' => $pais]; 

    }

    

    public function actualizarTipoMoneda(Request $request)
    {


        $idprofesional = Auth::user()->id;

        $usuario = UsuarioExtras::find($idprofesional);
        $usuario->tipo_moneda =  $request->tipo_moneda;
        $usuario->save();
        
        return ['mensaje' => 'Tipo de moneda actualizada correctamente', 'status' => 'success'];
     
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'idusuario'=>'required',
            'opcion_tarifa'=>'required',
            'costo_tarifa'=>'required',
            'categoria_tarifa'=>'required'
        ]);

        $tarifa = TarifaProfesional::create($validatedData);

        return ['mensaje' => 'Tarifa registrada correctamente', 'tarifa' => $tarifa];

        
    }


    public function destroy($id)
    {

        $tarifa = TarifaProfesional::find($id);
        $tarifa->delete();

        return ['mensaje' => 'se elimino'];
        
    }


}
