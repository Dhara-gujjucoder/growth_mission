<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    public $token;

    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset password')
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->line('Below Reset password link')
            ->action(Lang::get('Reset Password'),url(config('app.url') . route('password.reset', $this->token, false)));
            // ->action(Lang::get('View App Groth Mission'), url(route('/')));
            
        // return (new MailMessage)
        //     ->subject('Password Reset') // Customize the subject
        //     ->line('You are receiving this email because we received a password reset request for your account.') 
        //     ->action('Reset Password', url(config('app.url') . route('password.reset', $this->token, false))) // Customize the reset link
        //     ->line('If you did not request a password reset, no further action is required.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
