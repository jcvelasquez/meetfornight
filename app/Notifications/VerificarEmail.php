<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class VerificarEmail extends Notification
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


        $verificationUrl = $this->verificationUrl($notifiable);                            

        return (new MailMessage)->markdown('vendor.notifications.email' )
                                ->greeting('¡Bienvenido!')
                                ->subject('Confirma tu cuenta en MeetForNight.com')
                                ->line('Gracias por registrar una cuenta con nosotros. Para poder activar tu cuenta, necesitamos validar tu correo electrónico. Pulsa en el siguiente botón:')
                                ->action('Verificar email', $verificationUrl )
                                ->line('Una vez verificado tu email seras redirigid@ automáticamente a tu perfil dentro de la plataforma.')
                                ->salutation('Muchas gracias,');

    }

    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            ['id' => $notifiable->getKey()]
        );
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
