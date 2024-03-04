<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $user = Auth::user();
        if ($user->status != 0) {
            auth()->logout();
            return redirect()->route('login')->withErrors(['status' => 'Your account is deactivated,Contact to administration.']);
        }
        if ($user->block != 0) {
            auth()->logout();
            return redirect()->route('login')->withErrors(['status' => 'Your account is blocked,Contact to administration.']);
        }
        return view('admin.dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function staffHome()
    {
        $user = Auth::user();
        if ($user->status != 0) {
            auth()->logout();
            return redirect()->route('login')->withErrors(['status' => 'Your account is deactivated,Contact to administration.']);
        }
        if ($user->block != 0) {
            auth()->logout();
            return redirect()->route('login')->withErrors(['status' => 'Your account is blocked,Contact to administration.']);
        }
        return view('staff.dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {      
        return view('login');
    }

    public function customerHome(Request $request)
    {
        // $request->session()->put("step11", $request->all());
         $user = Auth::user();
        // if ($user->status != 0) {
        //     // dd('d');
        //     auth()->logout();
        //     return redirect()->route('login')->withErrors(['status' => 'Your account is deactivated,Contact to administration.']);
        // }
        // if ($user->block != 0) {
        //     auth()->logout();
        //     return redirect()->route('login')->withErrors(['status' => 'Your account is blocked,Contact to administration.']);
        // }
        return view('customer.dashboard');
    }


    
}
