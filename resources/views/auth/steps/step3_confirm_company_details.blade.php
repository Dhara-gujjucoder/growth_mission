<div class="container">
    <div class="personal-det-sec personal-cont-width">
       <div class="reg-title text-center">
          <h2>Confirm your company details</h2>
          <p>We need some additional details about your company too.</p>
       </div>
       <div class="formwhitebg form-secton">
          <div class="on-bording-form-part">
             <form class="items-center" action="{{ route('step_reg', [3,7]) }}" method="POST">
                @csrf
                <div class="row">
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Company name</label>
                      <div class="form-input-icon">
                         <!-- remove class "disable" for enable input box -->
                         <input type="text" class="form-control" disabled placeholder="Hourglass Inc.">
                         <div class="form-mes-icon desk-none"><a href=""><img src="images/edit-icon.svg" alt=""></a></div>
                      </div>
                   </div>
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Company email</label>
                      <div class="form-input-icon">
                         <!-- remove class "disable" for enable input box -->
                         <input type="email" class="form-control" disabled placeholder="george@hourglass.com">
                         <div class="form-mes-icon desk-none"><a href=""><img src="images/edit-icon.svg" alt=""></a></div>
                      </div>
                   </div>
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Company phone number</label>
                      
                         <!-- remove class "disable" for enable input box -->
                         <div class="form-input-icon country-phone biginput-widht">
                            <div class="form-control disabled">
                               <div class="niceCountryInputSelector" data-selectedcountry="GB" data-showspecial="false" data-showflags="true" data-i18nall="All selected"
                               data-i18nnofilter="No selection" data-i18nfilter="Filter" data-onchangecallback="onChangeCallback">
                               <input type="tel" class="country-phonenumber" placeholder="" value="">
                               </div>
                            </div>
                            <div class="form-mes-icon desk-none"><a href=""><img src="images/edit-icon.svg" alt=""></a></div>
                         </div>
                         
                      
                   </div>
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Website</label>
                      <div class="form-input-icon">
                         <input type="text" class="form-control" placeholder="Enter your website">
                      </div>
                   </div>
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Location</label>
                      <div class="form-input-icon select-2-box">
                         <select class="js-example-basic-single js-states form-control">
                            <option>What country are you located in?</option>
                            <option>Location</option>
                          </select>
                      </div>  
                   </div>
                   <div class="mb-3 mb-0 pt-2"><input class="btn btn-primary btn-full" type="submit" value="Next"></div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>