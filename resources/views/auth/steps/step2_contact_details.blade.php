
    <div class="container">
       <div class="formwhitebg sm-box-width form-secton">
          
          <div class="form-title">
             <h3 class="ft-w-600">Your Contact Details</h3>
             <p>Please enter your contact details below. These details will be private and not shared with leads.</p>
          </div>   
          <div class="on-bording-form-part">
               <form class="items-center" action="{{ route('step_reg',[2,1]) }}" method="POST">
                  @csrf 
                <div class="mb-3">
                   <label class="form-label">First Name</label>
                   <div class="form-input-icon">
                      <input type="text" class="form-control" placeholder="Enter your first name">
                   </div>
                </div>
                <div class="mb-3">
                   <label class="form-label">Last Name</label>
                   <div class="form-input-icon">
                      <input type="text" class="form-control" placeholder="Enter your last name">
                   </div>
                </div>
                 <div class="mb-3">
                   <label class="form-label">Email address</label>
                   <div class="form-input-icon">
                      <input type="email" class="form-control" placeholder="Enter your email address">
                   </div>
                </div>
                <div class="mb-3">
                   <label class="form-label">Phone number</label>
                   <div class="form-input-icon country-phone">
                      <div class="form-control">
                         <div class="niceCountryInputSelector" data-selectedcountry="GB" data-showspecial="false" data-showflags="true" data-i18nall="All selected"
                         data-i18nnofilter="No selection" data-i18nfilter="Filter" data-onchangecallback="onChangeCallback">
                         <input type="tel" class="country-phonenumber" placeholder="" value="">
                         </div>
                      </div>
                   </div>
                </div>
                
                <div class="mb-3 mb-0 pt-2"><input class="btn btn-primary btn-full" type="submit" value="Continue"></div>
             </form>
         </div>
       </div>
    </div>