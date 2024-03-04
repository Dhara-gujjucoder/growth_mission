<div class="container">
    <form action="{{ route('step_reg', [3,3]) }}" method="POST">
        @csrf
        <div class="formwhitebg sm-box-width form-secton">
            <div class="mb-4 text-center verifyicon"><img src="{{asset('images/verified-icon.svg')}}" alt=""></div>
            <div class="form-title mb-4 pb-2">
                <h3 class="ft-w-600">Payment Confirmed!</h3>
                <p>Your platform payment has been confirmed.</p>
            </div>
            <div class="ver-link"><button  class="btn btn-primary btn-full">Continue</button></div>
        </div>
    </form>
</div>
