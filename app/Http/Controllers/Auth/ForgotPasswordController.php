<?php

namespace App\Http\Controllers\Auth;

use to;
use App\Http\Controllers\Controller;
// use App\Notifications\ResetPasswordNotification; 
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function buildMailMessage($notifiable, $token)
    {
        return (new ResetPasswordNotification($token))
            ->to($notifiable->getEmailForPasswordReset())
            ->subject('Password Reset') // Customize the subject
            ->line('You are receiving this email because we received a password reset request for your account.') // Customize the message
            ->action('Reset Password',
                url(config('app.url') . route('password.reset', $token, false))
            ) // Customize the reset link
            ->line('If you did not request a password reset, no further action is required.');
    }
}
