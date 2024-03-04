    <div class="container">
        <form action="{{ route('step_reg', [3,5]) }}" method="POST">
            @csrf
       <div class="formwhitebg sm-box-width form-secton">
          <div class="mb-4 text-center verifyicon"><img src="{{asset('images/verified-icon.svg')}}" alt=""></div>
          <div class="form-title form-title mb-4 pb-2">
             <h3 class="ft-24">Agreement Signed!</h3>
             <p>Your platform agreement has been signed.</p>
          </div>   
          <div class="ver-link"><button  class="btn btn-primary btn-full">Continue</button></div>
       </div>
        </form>
    </div>