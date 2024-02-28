<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendTestEmail()
    {
        try {
            $data["mail_message"] = "Hello!";

            Mail::send('mail', $data, function ($message) {
                $message
                ->to('dharaj.gc@gmail.com')
                // ->from('nidhisp.gc@gmail.com')
                ->subject('TEST');
            });
            // return 'Test email sent successfully!';
        } catch (\Exception $e) {
            dd($e);
            return 'Failed to send test email: ' . $e->getMessage();
        }
    }
}
