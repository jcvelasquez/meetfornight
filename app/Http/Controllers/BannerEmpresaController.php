<?php

namespace App\Http\Controllers;

use App\BannerEmpresa;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerEmpresaController extends Controller
{
    //

    private $banner_empresa_path;

    public function __construct()
    {
        $this->banner_empresa_path = public_path('banners_empresas');
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

    public function subirBannerEmpresa(Request $request)
    {

        $image = $request->file('file');
        $random = sha1(date('YmdHis') . uniqid());
        $save_name = $random . '.' . $image->getClientOriginalExtension();
            
        if ( $image->move( $this->banner_empresa_path ,$save_name) ) {

            $banner = new BannerEmpresa();
            $banner->idempresa = $request->idempresa;
            $banner->url_foto = $save_name;
            $banner->save();
            
            return [ 'status' =>  'success'];

        } else {     
            return [ 'status' =>  'error'];
        }
        
        
    }


}
