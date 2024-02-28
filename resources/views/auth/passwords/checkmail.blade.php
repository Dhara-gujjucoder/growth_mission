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
                <div class="icon-round-bg text-center"><img src="{{ asset('images/email-icon.svg') }}" alt=""></div>
                <div class="form-title reg-form-cont">
                    <h3 class="ft-w-600">Check your email</h3>
                    <p>We've sent password reset instructions to <br><a
                            href="mailto:{{ $email }}">{{ $email }}</a></p>
                </div>
                <div class="forget-a mb-3 text-center">
                    <p>Didn't receive the email?<button id="resendButton" onclick="resendEmail();" style="cursor: pointer; border: none; background: none;"><a id="Timer" style="display:none;">Click to resend</button></a><img src="{{ asset('images/ajax-loader.gif') }}" class="loader" id="loader" alt="Loader" height=25 width=25></p>
                </div>
                <div class="forget-a gobacklink text-center"><a href="{{ route('login') }}"><img
                            src="{{ asset('images/arrow-left.svg') }}" alt=""> Back to log in</a>
                </div>
                <input type="hidden" name="email" class="form-control" value="{{ $email }}">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        function startTimer() {
            var timeleft = 60;
            var downloadTimer = setInterval(function() {
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("Timer").style.color = "#0c111d";
                    document.getElementById("Timer").style.cursor = "pointer";
                    document.getElementById("Timer").innerHTML = "Click to resend";
                    document.getElementById("resendButton").onclick = resendEmail;
                } else {
                    document.getElementById("loader").style.display = "none";
                    document.getElementById("Timer").style.display = "block";
                    document.getElementById("Timer").style.color = "#B2B4B8";
                    document.getElementById("Timer").style.cursor = "text";
                    document.getElementById("Timer").innerHTML = timeleft + " seconds remaining";
                }
                timeleft -= 1;
            }, 1000);
        }

        function resendEmail() {
            document.getElementById("Timer").style.display = "none";
            document.getElementById("loader").style.display = "block";
            $.ajax({
                url: "{{ route('password.email') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: "{{ $email }}"
                },
                success: function(response) {
                    console.log(response);
                    // On success, hide loader and show Timer
                    document.getElementById("loader").style.display = "none";
                    document.getElementById("Timer").style.display = "block";
                },
                error: function(error) {
                    console.log(error);
                }
            });
            startTimer();
        }

        // Initialize the timer on page load
        startTimer();
    </script>
@endsection
