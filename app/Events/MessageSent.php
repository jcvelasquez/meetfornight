<?php

namespace App\Events;

use App\Message;
use App\Usuario;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use phpDocumentor\Reflection\Types\Integer;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $id;
    public $nombre;
    public $message;

    //public function __construct(Usuario $usuario, Message $message)
    public function __construct(String $nombre, int $id,  Message $message)
    {
        //
        $this->id = $id;
        $this->nombre = $nombre;
        $this->message = $message;
    }

    
    public function broadcastOn()
    {
        //return new PrivateChannel('channel-name');
        return new PrivateChannel('chat');
        //return ['chat'];
    }

    /*public function broadcastAs()
    {
        return 'messagesent';
    }*/

}
