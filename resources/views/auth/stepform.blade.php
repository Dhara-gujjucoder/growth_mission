@extends('auth.layout')
@section('content')
<header class="onboarding-header">
    <div class="login-author-name backtopage mob-none">
        @if (in_array(request()->step.request()->substep,[22,31,37,38]))
        <a href="{{ url()->previous() }}"  onclick="event.preventDefault(); document.getElementById('previous_step-form').submit();"><img src="{{ asset('images/white-arrow-left.svg') }}" alt=""> Back
            to previous step</a>
            <form id="previous_step-form" action="{{ route('previous_step') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endif
    </div>
    <div class="header-logo"><a href=""><img src="{{ asset('images/white-logo.svg') }}" alt=""></a>
    </div>
    <div class="logoutbtn">
        <a class="mobile-logout-btn" href="login.html"><img src="{{ asset('images/user-logout-icon.svg') }}"
                alt=""></a>
    </div>
</header>
<div class="form-box-padding register-sec reg-cont-PTB">
    {!! $stepview !!}
    <div class="create-account-btn">
        <div class="container">
           <ul>
              <li>
                 <span class="btn-checked">Create Account</span>
              </li>
              <li>
                 <span class="btn-checked">Contact Details</span>
              </li>
              <li>
                 <span class="active">Choose Plan</span>
              </li>
           </ul>
        </div>
     </div>
</div>
@endsection
@push('script')
    <script src="{{ asset('js/niceCountryInputPhone.js') }}"></script>
    <script src="{{ asset('js/niceCountryInput.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script>
        jQuery(document).ready(function(e) {
            jQuery('input[name=payment_creditcardnumber]').mask('9999 9999 9999 9999');
            jQuery('input[name=payment_expiredate]').mask('99/9999');
            jQuery('input[name=payment_csvnumber]').mask('999');
        });
    </script>
    <script>
        function onChangeCallback(ctr) {
            console.log("The country was changed: " + ctr);
            //$("#selectionSpan").text(ctr);
        }
        $(document).ready(function() {
            $(".niceCountryInputSelector").each(function(i, e) {
                new NiceCountryInput(e).init();
            });
        });
    </script>
    <script>
        $('.planbox-border').on('click', function() {
            $('.planbox-border.current').removeClass('current');
            $(this).addClass('current');
        });
    </script>
      <script>
        "use strict";
        function dragNdrop(event) {
           var fileName = URL.createObjectURL(event.target.files[0]);
           var preview = document.getElementById("preview");
           var previewImg = document.createElement("img");
           previewImg.setAttribute("src", fileName);
           preview.innerHTML = "";
           preview.appendChild(previewImg);
        }
        function drag() {
           document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
        }
        function drop() {
           document.getElementById('uploadFile').parentNode.className = 'dragBox';
        }
     </script>
@endpush
