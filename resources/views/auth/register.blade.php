@extends('layouts.app')

@section('content')
<div class="form-box-padding register-sec">
         <div class="container">
            <div class="formwhitebg sm-box-width form-secton">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
               @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               <div class="form-title">
                  <h3 class="ft-w-600">Create Your Account</h3>
                  <p>These are the details you will use to access our system and view your leads going forward.</p>
               </div>   
               <div class="on-bording-form-part">
                  <form class="items-center" method="POST" action="{{ route('register') }}" id="registration-form">
                  @csrf
                      <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <div class="form-input-icon">
                           <input type="email" name="email" class="form-control" placeholder="Enter email address">
                        </div>
                     </div>
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="form-input-icon">
                           <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                           <div class="form-mes-icon desk-none toggle-password" toggle="#password"><img src="images/eye-icon.svg" alt=""></div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <div class="form-input-icon">
                           <input type="password" name="c_password" class="form-control" placeholder="Enter password">
                           {{-- <div class="form-mes-icon desk-none"><a href=""><img src="images/eye-icon.svg" alt=""></a></div> --}}
                        </div>
                     </div>
                     
                     <div class="mb-3 mb-0 pt-2"><input class="btn btn-primary btn-full" type="submit" value="Continue"></div>                     
                  </form>
              </div>
            </div>
         </div>

         <div class="create-account-btn">
            <div class="container">
               <ul>
                  <li>
                     <span class="active">Create Account</span>
                  </li>
                  <li>
                     <span>Contact Details</span>
                  </li>
                  <li>
                     <span>Choose Plan</span>
                  </li>
               </ul>
            </div>
         </div>

      </div>
@endsection
