<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class ReservaRealizada extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

    
        return (new MailMessage)->markdown('vendor.notifications.email' )
                                ->greeting('¡Ya estás a un paso de Un Final Feliz!')
                                ->subject('Tu reserva registrada en MeetForNight.com')
                                ->line('La reserva fue realizada satisfactoriamente, sin embargo debe ser aprobada por el profesional antes de que sea confirmada. Tambien podrás revisar las reservas realizadas desde la pestaña "Mis Reservas" en tu perfil o pulsando el siguiente botón:')
                                ->action('REVISAR MIS RESERVAS', 'http://meetfornight.com/reservas-usuario/' )
                                ->line('Una vez confirmada la reserva, te enviaremos una notificación automática. ¡Eso es todo por el momento!')
                                ->salutation('Muchas gracias,');

    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
