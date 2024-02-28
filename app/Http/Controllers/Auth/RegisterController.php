<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\OtpMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'c_password' => ['required_with:password', 'min:8', 'same:password'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        dd('test');
        // $validatedData = $request->validate([
        //     'email' => 'required|string|email|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        $otp = rand(1000, 9999);
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->otp = $otp;
        $user->type = 3;
        dd($user);
        $user->save();

        $users = User::where('email',$request->email)->first();
        $user_email = $users->email;

        Mail::to($request->email)->send(new OtpMail($otp));
        $mail = Mail::send('auth.passwords.otp', $otp, function ($message) use ($user_email) {
            $message->to($user_email)
                ->subject('Registration');
            $message;
        });

        return redirect()->view('auth.passwords.registration_check_email');
    }
}
