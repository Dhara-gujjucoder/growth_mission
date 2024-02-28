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
                <h3 class="ft-w-600">Set a new password</h3>
                <p>Please enter a new password below.</p>
            </div>
            <div class="on-bording-form-part">
                <form class="items-center" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    
                    <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" required autocomplete="email" hidden>
                    
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="form-input-icon">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Enter password">
                            <div class="form-mes-icon desk-none"><a href=""><img src="{{ asset('images/eye-icon.svg') }}" alt=""></a></div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Confirm Password</label>
                        <div class="form-input-icon">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Enter password">
                            <div class="form-mes-icon desk-none"><a href=""><img src="{{ asset('images/eye-icon.svg') }}" alt=""></a></div>
                        </div>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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