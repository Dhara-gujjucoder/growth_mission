@extends('layouts.app')
@section('content')
    <div class="form-box-padding">
        <div class="container">
            <div class="formwhitebg sm-box-width form-secton">
                <div class="form-logo text-center"><img src="images/logo-icon.svg" alt=""></div>
                <div class="form-title">
                    <h3 class="ft-w-600">Login</h3>
                    <p>Please enter your details below.</p>
                </div>       
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
                <div class="on-bording-form-part">
                    <form class="items-center" method="POST" action="{{ route('login') }}" id="login-form">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="form-input-icon">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                <div class="form-mes-icon desk-none"><a href=""><img src="images/help-icon.svg"
                                            alt=""></a></div>
                                <span>This is a hint text to help user.</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="form-input-icon">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" autocomplete="current-password">
                                <div class="form-mes-icon toggle-password" toggle="#password"><img src="images/eye-icon.svg" alt=""></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input id="remember-checkbox" class="form-check-input" type="checkbox" name="remember" value="1">
                                    <label for="remember-checkbox" class="form-label form-check-label opacity-70">Remember
                                        for 30 days</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="forget-a"><a href="{{ route('password.request') }}">Forgot password</a></div>
                            </div>
                        </div>
                        <div class="mb-3"><input class="btn btn-primary btn-full" type="submit" value="Sign in">
                        </div>
                        <div class="forget-a text-center">
                            <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
