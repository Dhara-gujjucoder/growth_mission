<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StepRegistrationController extends Controller
{
    // ,34,35,
    protected $step = 1, $steps = [11, 12, 21, 22, 31, 32, 33, 36, 37, 38, 39];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function step($step, $substep, Request $request)
    {
        $current_step = $step . $substep;
        // dd($request->method());
        $data['stepview'] = $this->{'step' . $current_step}($request);
        // dd($request->session());
        return view('auth.stepform', $data);
    }
    public function previous_step(Request $request)
    {

        $key = array_search(auth()->user()->step, $this->steps);
        Auth::user()->update(['step' => $this->steps[$key - 1]]);

        // dd( $this->steps[$key-1]);
        // dd(auth()->user()->step);
        $step = str_split(auth()->user()->step);
        return redirect()->route('step_reg', [$step[0], $step[1]]);
    }


    public function step11(Request $request)
    {
        if ($request->isMethod('post')) {

            Auth::user()->update(['step' => 12]);

            return redirect()->route('step_reg', [1, 2]);
        }
        return view('auth.steps.step1_verifyotp')->render();
    }

    public function step12(Request $request)
    {
        // Auth::user()->update(['step' => 12]);
        if ($request->isMethod('post')) {
            // dd($request);
            Auth::user()->update(['step' => 21]);
            return redirect()->route('step_reg', [2, 1]);
        }
        return view('auth.steps.step1_acc_verified')->render();
    }

    public function step21(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step' => 22]);

            return redirect()->route('step_reg', [2, 2]);
        }
        return view('auth.steps.step2_contact_details')->render();
    }

    public function step22(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step' => 31]);
            return redirect()->route('step_reg', [3, 1]);
        }
        return view('auth.steps.step2_company_details')->render();
    }
    public function step31(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step' => 32]);
            return redirect()->route('step_reg', [3, 2]);
        }
        return view('auth.steps.step2_platform_subscription')->render();
    }
    public function step32(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step' => 33]);
            return redirect()->route('step_reg', [3, 3]);
        }
        return view('auth.steps.step3_payment')->render();
    }

    public function step33(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step' => 36]);
            return redirect()->route('step_reg', [3, 6]);
        }
        return view('auth.steps.step3_payment_confirmed')->render();
    }
    // public function step34(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         Auth::user()->update(['step' => 35]);
    //         return redirect()->route('step_reg',[3,4]);
    //     }
    //     return view('auth.steps.step3_agreement')->render();
    // }
    //   public function step35(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         Auth::user()->update(['step' => 36]);
    //         return redirect()->route('step_reg',[3,6]);
    //     }
    //     return view('auth.steps.step3_agreement_confirmed')->render();
    // }
    public function step36(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step' => 37]);
            return redirect()->route('step_reg', [3, 7]);
        }
        return view('auth.steps.step3_confirm_personal_detail')->render();
    }
    public function step37(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step' => 38]);
            return redirect()->route('step_reg', [3, 8]);
        }
        return view('auth.steps.step3_confirm_company_details')->render();
    }
    public function step38(Request $request)
    {
        if ($request->isMethod('post')) {
            Auth::user()->update(['step_verified' => 1,'step' => 39]);
            // return redirect('dashboard');
            return redirect('dashboard');
        }
        return view('auth.steps.step3_additional_company_detail')->render();
    }
    // public function step39(Request $request)
    // {
    //     Auth::user()->update(['step_verified' => 1]);  
    //     // Auth::user()->update(['step' => 40]);
    //     // return redirect()->route('dashboard');
    //     return view('auth.steps.step3_confirming_our_end')->render();
    // }
}
