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
        $this->fotos_profesional_path = public_path('fotos-profesionales');
    }

    public function mostrar(){
        return view('forms-perfil-profesional.fotos-videos-profesional');
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


    public function subir(Request $request)
    {

        $idusuario = Auth::user()->id;
       
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $upload_success = $image->move( $this->fotos_profesional_path ,$imageName);

        if ($upload_success) {

            $totalFotos = FotoProfesional::where('idusuario', '=', $idusuario)->count();

            $fotoProfesional = new FotoProfesional();
            $fotoProfesional->idusuario = $idusuario;
            $fotoProfesional->url_foto = $imageName;
            $fotoProfesional->orden = $totalFotos;
            $fotoProfesional->save();
            
            return Response::json([
                'success' => $imageName,
                'total' => $totalFotos
            ], 200);

        } else {     return Response::json('error', 400);   }
        

        /*$photos = $request->file('file');
 
        if (!is_array($photos)) {
            $photos = [$photos];
        }
 
        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }
 
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            //$resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
 
            Image::make($photo)
                ->resize(250, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save($this->photos_path . '/' . $resize_name);
 
            $photo->move($this->photos_path, $save_name);
 
            $upload = new Upload();
            $upload->filename = $save_name;
            //$upload->resized_name = $resize_name;
            $upload->original_name = basename($photo->getClientOriginalName());
            $upload->save();
        }

        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);*/


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
