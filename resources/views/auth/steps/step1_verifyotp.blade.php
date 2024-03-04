<div class="container">
    <div class="formwhitebg sm-box-width form-secton">
        <div class="icon-round-bg text-center"><img src="{{ asset('images/email-icon.svg') }}" alt=""></div>
        <div class="form-title check-mail">
            <h3 class="ft-w-600">Check your email</h3>
            <p>We sent a verification code to <br><strong>adam.bishop@gmail.com</strong></p>
        </div>
        <div class="on-bording-form-part">
            <form class="items-center" action="{{ route('step_reg', [1, 1]) }}" method="POST">
                @csrf
                <div class="mb-4 pt-2 pb-2">
                    <ul class="otpinput">
                        <li>
                            <input type="text" placeholder="3" maxlength="1">
                        </li>
                        <li>
                            <input type="text" placeholder="0" maxlength="1">
                        </li>
                        <li>
                            <input type="text" placeholder="6" maxlength="1">
                        </li>
                        <li>
                            <input type="text" placeholder="6" maxlength="1">
                        </li>
                    </ul>
                </div>
                <div class="mb-4"><input class="btn btn-primary btn-full" type="submit" value="Verify email">
                </div>

                <div class="forget-a ft-14 text-center">
                    <p>Didn’t receive the email? <a href="">Click to resend</a></p>
                </div>


            </form>
        </div>
    </div>
</div>
