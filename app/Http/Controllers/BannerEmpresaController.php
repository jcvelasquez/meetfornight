<?php

namespace App\Http\Controllers;

use App\BannerEmpresa;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerEmpresaController extends Controller
{
    //

    private $banners_empresas_path;

    public function __construct()
    {
        $this->banners_empresas_path = public_path('banners_empresas');
        $this->middleware(['auth','verified']);
    }

    public function mostrar()
    {
        return view('forms-perfil-empresa.banners-empresa');
    }

    public function listar()
    {

        $idempresa = Auth::user()->id;
        $banners = BannerEmpresa::where('idempresa',$idempresa)->get();

        return ["banners" => $banners];
    }

    public function subir(Request $request)
    {

        $idempresa = Auth::user()->id;
       
        $image = $request->file('file');
        $random = sha1(date('YmdHis') . uniqid());
        $save_name = $random . '.' . $image->getClientOriginalExtension();
        
        if ( $image->move( $this->banners_empresas_path ,$save_name) ) {

            $banner = new BannerEmpresa();
            $banner->idempresa = $idempresa;
            $banner->url_foto = $save_name;
            $banner->save();
            
            return [ 'status' =>  'success'];

        } else {     
            return [ 'status' =>  'error'];
        }
        
        
    }


    public function eliminar(Request $request)
    {

        $idfoto = $request->idfoto;

        $uploaded_image = $this->banners_empresas_path."/".$request->url;
 
        if (file_exists($uploaded_image)) {
            unlink($uploaded_image);
        }

        if (!empty($uploaded_image)) {
            BannerEmpresa::where('id', '=', $idfoto)->delete();
        }
 
        return ['message' => 'El archivo se eliminó correctamente.'];

    }


}
