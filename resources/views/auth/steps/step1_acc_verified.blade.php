    <div class="container">
        <form class="items-center" action="{{ route('step_reg', [1, 2]) }}" method="POST">
            @csrf
            <div class="formwhitebg sm-box-width form-secton">
                <div class="mb-4 text-center verifyicon"><img src="{{ asset('images/verified-icon.svg') }}" alt="">
                </div>
                <div class="form-title mb-5">
                    <h3 class="ft-w-600">Account Verified</h3>
                    <p>Your user account has been verified.</p>
                </div>
                <div class="ver-link"><button class="btn btn-primary btn-full">Continue</button></div>
            </div>
        </form>
    </div>
