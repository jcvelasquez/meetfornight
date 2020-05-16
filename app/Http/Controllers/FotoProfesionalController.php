<?php

namespace App\Http\Controllers;

use App\FotoProfesional;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

class FotoProfesionalController extends Controller
{
    
    private $fotos_profesional_path;

    public function __construct()
    {
        $this->fotos_profesional_path = public_path('fotos_profesionales');
        $this->middleware(['auth','verified']);
    }

    public function mostrar(){
        return view('forms-perfil-profesional.fotos-profesional');
    }

    public function listar(Request $request)
    {

        $idusuario = Auth::user()->id;

        $fotos = FotoProfesional::where('idusuario', '=', $idusuario)->orderBy('orden','asc')->get();

        return ['fotos' => $fotos];  

    }

    public function ordenar(Request $request)
    {

        foreach ($request->fotos as $item) {

            $foto = FotoProfesional::find($item['id']);
            $foto->orden = $item['orden'];
            $foto->save();
            
        }

        return ['mensaje' => 'Se actualizo el orden correctamente'];  

    }

    public function eliminar(Request $request)
    {

        $idfoto = $request->idfoto;

        $uploaded_image = $this->fotos_profesional_path."/".$request->url;
 
        if (file_exists($uploaded_image)) {
            unlink($uploaded_image);
        }

        if (!empty($uploaded_image)) {
            FotoProfesional::where('id', '=', $idfoto)->delete();
        }
 
        return Response::json(['message' => 'File successfully delete'], 200);

    }

    
    

    //FUNCION PARA SUBIR LAS FOTOS DEL PROFESIONAL DESDE EL PERFIL DE MI CUENTA
    public function subir(Request $request)
    {

        $idusuario = Auth::user()->id;
       
        $image = $request->file('file');
        $random = sha1(date('YmdHis') . uniqid());
        $save_name = $random . '.' . $image->getClientOriginalExtension();
        

        if ( $image->move( $this->fotos_profesional_path ,$save_name) ) {

            $totalFotos = FotoProfesional::where('idusuario', '=', $idusuario)->count();

            $fotoProfesional = new FotoProfesional();
            $fotoProfesional->idusuario = $idusuario;
            $fotoProfesional->url_foto = $save_name;
            $fotoProfesional->orden = $totalFotos;
            $fotoProfesional->save();
            
            return [ 'status' =>  'success'];

        } else {     
            return [ 'status' =>  'error'];
        }
        

    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
    
    public function destroy(Request $request)
    {
        $filename = $request->id;
        $uploaded_image = Upload::where('original_name', basename($filename))->first();
 
        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }
 
        $file_path = $this->photos_path . '/' . $uploaded_image->filename;
        //$resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;
 
        if (file_exists($file_path)) {
            unlink($file_path);
        }
 
        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }
 
        return Response::json(['message' => 'File successfully delete'], 200);
    }

       
    



}
