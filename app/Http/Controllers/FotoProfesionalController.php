<?php

namespace App\Http\Controllers;

use App\FotoProfesional;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;



class FotoProfesionalController extends Controller
{
    
    private $fotos_profesional_path;

    public function __construct()
    {
        $this->fotos_profesional_path = public_path('fotos-profesionales');
    }

    /*
    public function store(Request $request)
    {
         
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $upload_success = $image->move(public_path('images'),$imageName);
        
        if ($upload_success) {
            return response()->json($upload_success, 200);
        } else {
            return response()->json('error', 400);
        }

    }*/

    public function fileStore(Request $request)
    {
       
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $upload_success = $image->move( $this->fotos_profesional_path ,$imageName);

        if ($upload_success) {

            $fotoProfesional = new FotoProfesional();
            $fotoProfesional->idusuario = Auth::user()->id;
            $fotoProfesional->url_foto = $imageName;
            $fotoProfesional->save();
            
            return Response::json([
                'success' => $imageName
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
 
        /*if (file_exists($resized_file)) {
            unlink($resized_file);
        }*/
 
        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }
 
        return Response::json(['message' => 'File successfully delete'], 200);
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



}
