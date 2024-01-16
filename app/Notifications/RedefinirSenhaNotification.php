<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;
    public $token;
    public $name;
    public $email;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $name, $email)
    {
        $this->token = $token;
        $this->name = $name;
        $this->email = $email;
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
        $url = 'http://localhost:8000/password/reset/' . $this->token . '?email=' . $this->email;
        $minutos = config('auth.passwords.' . config('auth.defaults.passwords') . '.expire');
        $greeting = 'Olá ' . $this->name;

        return (new MailMessage)
            ->subject('Atualização de senha')
            ->greeting($greeting)
            ->line('Recupere sua senha !!')
            ->action('Altere sua senha', $url)
            ->line('O link expira em ' . $minutos . ' minutos.')
            ->line('Caso não tenha requisitado alteração, nenhuma ação é necessária.')
            ->salutation('Até breve!');
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
