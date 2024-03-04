    <div class="container">
       <div class="personal-det-sec personal-cont-width">
          <div class="reg-title text-center">
             <h2>Confirm your personal details</h2>
             <p>We need some additional details about you to create your account.</p>
          </div>
          <div class="formwhitebg form-secton">
             <div class="on-bording-form-part">
                <form class="items-center" action="{{ route('step_reg', [3,6]) }}" method="POST">
                    @csrf
                   <div class="row">
                      <div class="col-md-6 mb-3">
                         <label class="form-label">First name</label>
                         <div class="form-input-icon">
                            <!-- remove class "disable" for enable input box -->
                            <input type="text" class="form-control" disabled placeholder="George">
                            <div class="form-mes-icon desk-none"><a href=""><img src="{{ asset('images/edit-icon.svg')}}"
                                     alt=""></a></div>
                         </div>
                      </div>
                      <div class="col-md-6 mb-3">
                         <label class="form-label">Last name</label>
                         <div class="form-input-icon">
                            <!-- remove class "disable" for enable input box -->
                            <input type="text" class="form-control" disabled placeholder="Robinson">
                            <div class="form-mes-icon desk-none"><a href=""><img src="{{ asset('images/edit-icon.svg')}}"
                                     alt=""></a></div>
                         </div>
                      </div>
                      <div class="col-md-12 mb-3">
                         <label class="form-label">Email address</label>
                         <div class="form-input-icon">
                            <input type="email" class="form-control" placeholder="george@leadgenerationgroup.com">
                         </div>
                      </div>
                      <div class="col-md-12 mb-3 inputbrowserfile">
                         <label class="form-label">Upload a photo for your user account
                            <span>(optional)</span></label>
                         <div class="form-input-icon browserbox">
                            <div id="preview" class="file-img-prev light-graybg"><img src="{{asset('images/user-icon.svg')}}"
                                  alt=""></div>
                            <div class="uploadOuter">
                               <span class="dragBox">
                                  <strong>Click to upload</strong> or drag and drop
                                  <input type="file" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()"
                                     id="uploadFile" />
                               </span>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-12 mb-3">
                         <label class="form-label">Phone number</label>

                         <!-- remove class "disable" for enable input box -->
                         <div class="form-input-icon country-phone biginput-widht">
                            <div class="form-control disabled">
                               <div class="niceCountryInputSelector" data-selectedcountry="GB"
                                  data-showspecial="false" data-showflags="true" data-i18nall="All selected"
                                  data-i18nnofilter="No selection" data-i18nfilter="Filter"
                                  data-onchangecallback="onChangeCallback">
                                  <input type="tel" class="country-phonenumber" placeholder="" value="">
                               </div>
                            </div>
                            <div class="form-mes-icon desk-none"><a href=""><img src="{{asset('images/edit-icon.svg')}}"
                                     alt=""></a></div>
                         </div>


                      </div>
                      <div class="col-md-12 mb-3">
                         <label class="form-label">Job title</label>
                         <div class="form-input-icon">
                            <input type="text" class="form-control" placeholder="Enter your job title">
                         </div>
                      </div>
                      <div class="col-md-12 mb-3">
                         <label class="form-label">Personal Address</label>
                         <div class="form-input-icon">
                            <input type="text" class="form-control" placeholder="Enter your street address">
                         </div>
                      </div>
                      <div class="col-md-6 mb-3">
                         <div class="form-input-icon">
                            <input type="text" class="form-control" placeholder="City">
                         </div>
                      </div>
                      <div class="col-md-6 mb-3">
                         <div class="form-input-icon">
                            <input type="text" class="form-control" placeholder="Postcode">
                         </div>
                      </div>
                      <div class="mb-3 mb-0 pt-2"><input class="btn btn-primary btn-full" type="submit"
                            value="Continue"></div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
   