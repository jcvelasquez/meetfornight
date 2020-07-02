<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('chat');
    }

    public function mostrarRoom()
    {
        return view('chat');
    }



    

    public function fetchMessages()
    {
       //return Message::with('usuario')->get();

        return Message::join('usuarios', 'messages.idusuario', '=', 'usuarios.id' )
                        ->select('messages.id','usuarios.nombre','messages.message','messages.created_at')
                        ->get(); 
        /*with(array('usuario'=>function($query){
           /* $query->select('id','nombre');
        }))->get();*/

        
        
    }

  
    public function sendMessage(Request $request)
    {
        $usuario = Auth::user();

        $mensaje = $usuario->mensajes()->create([
            'message' => $request->input('message'),
            'nombre' => $usuario->nombre,
            'idusuario' => $usuario->id
        ]);

        /*$mensaje = new Message();
        $mensaje->idusuario = $usuario->id;
        $mensaje->message = $request->message;
        $mensaje->save();*/

        broadcast(new MessageSent($usuario->nombre, $usuario->id, $mensaje))->toOthers();

        return ['status' => 'Message Sent!'];
    }


}
