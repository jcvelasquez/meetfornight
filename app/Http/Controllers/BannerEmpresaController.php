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
        $this->banner_empresa_path = public_path('banners-empresa');
    }

    public function subirBannerEmpresa(Request $request)
    {

        //$idempresa = Auth::user()->id;
        $image = $request->file('file');
        $random = sha1(date('YmdHis') . uniqid());
        //$imageName = $image->getClientOriginalName();
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
