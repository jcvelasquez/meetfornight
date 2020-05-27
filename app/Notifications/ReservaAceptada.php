<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class ReservaAceptada extends Notification
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
                                ->greeting('¡Estás listo para Un Final Feliz!')
                                ->subject('Tu reserva fue aceptada en MeetForNight.com')
                                ->line('La reserva fue revisada por el profesional y aceptada satisfactoriamente. Puedes revisar tus reservas desde la pestaña "Mis Reservas" en tu perfil o pulsando el siguiente botón:')
                                ->action('REVISAR MIS RESERVAS', 'http://meetfornight.com/reservas-usuario/' )
                                ->line('Estaremos en contacto contigo muy pronto para que puedas calificar tu experiencia y nos ayudes a mejorar nuestros servicios. ¡Eso es todo por ahora!')
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
