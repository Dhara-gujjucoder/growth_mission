@extends('layouts.app')

@section('content')
    <div class="form-box-padding">
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
                <div class="icon-round-bg text-center"><img src="{{ asset('images/key-icon.svg') }}" alt=""></div>
                <div class="form-title">
                    <h3 class="ft-w-600">Forgot password?</h3>
                    <p>Enter your email address below and we will email you instructions to reset your password.</p>
                </div>
                <div class="on-bording-form-part">
                    <form class="items-center" method="POST" action="{{ route('password.email') }}" id="forgot-passwords-form">
                    @csrf
                        <div class="mb-4">
                            <label class="form-label">Email</label>
                            <div class="form-input-icon">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="mb-4"><input class="btn btn-primary btn-full" type="submit" value="Reset password">
                        </div>
                        <div class="forget-a gobacklink text-center">
                            <a href="{{ route('login') }}"><img src="{{ asset('images/arrow-left.svg') }}" alt=""> Back to log in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
