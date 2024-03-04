   <div class="container">
      <div class="Plan-max-width">
         <div class="reg-title text-center">
            <h2>Please choose a platform subscription</h2>
            <p>Our platform offers three different plans for you to choose from, allowing you <br>to decide the level of service you require.</p>
            <p>All of our platform plans involve a 3-month commitment.</p>
         </div>
         <div class="formwhitebg planbox">
            <form action="{{ route('step_reg',[3,1]) }}" method="POST">
               @csrf
            <div class="planinner-PLR">
               <div class="plan-tab-sec">
                  <ul class="nav nav-pills mb-4 justify-content-center" id="register-plan-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pay-monthly-tab" data-bs-toggle="pill" data-bs-target="#pay-monthly" type="button" role="tab" aria-controls="pay-monthly" aria-selected="true">Pay Monthly</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pay-quarterly-tab" data-bs-toggle="pill" data-bs-target="#pay-quarterly" type="button" role="tab" aria-controls="pay-quarterly" aria-selected="false">Pay Quarterly</button>
                     </li>
                  </ul>
                  <div class="register-plan-part tab-content" id="register-plan-tabContent">
                     <div class="tab-pane fade show active" id="pay-monthly" role="tabpanel" aria-labelledby="pay-monthly-tab">
                        <div class="plan-list-sec">
                           <div class="row">
                              <div class="col-md-4">
                                 <label class="planbox-border form-check-label current" for="monthly-Radio1">
                                    <input class="form-check-input" type="radio" name="monthly-plan" id="monthly-Radio1" value="option1" checked>
                                    <div class="planlist">
                                       <h6>Starter Plan</h6>
                                       <div class="plansetup">Setup fee: <span>£250</span></div>
                                    </div>
                                    <div class="plan-price">
                                       <h3>£150</h3>
                                       <span>per month</span>
                                    </div>
                                 </label>
                              </div>
                              <div class="col-md-4">
                                 <label class="planbox-border form-check-label" for="monthly-Radio2">
                                    <input class="form-check-input" type="radio" name="monthly-plan" id="monthly-Radio2" value="option2">
                                    <div class="planlist">
                                       <h6>Standard Plan</h6>
                                       <div class="plansetup">Setup fee: <span>£500</span></div>
                                    </div>
                                    <div class="plan-price">
                                       <h3>£250</h3>
                                       <span>per month</span>
                                    </div>
                                 </label>
                              </div>
                              <div class="col-md-4">
                                 <label class="planbox-border form-check-label" for="monthly-Radio3">
                                    <input class="form-check-input" type="radio" name="monthly-plan" id="monthly-Radio3" value="option3">
                                    <div class="planlist">
                                       <h6>Premier Plan</h6>
                                       <div class="plansetup">Setup fee: <span>£1000</span></div>
                                    </div>
                                    <div class="plan-price">
                                       <h3>£500</h3>
                                       <span>per month</span>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pay-quarterly" role="tabpanel" aria-labelledby="pay-quarterly-tab">
                        <div class="plan-list-sec">
                           <div class="row">
                              <div class="col-md-4">
                                 <label class="planbox-border form-check-label" for="quarterly-Radio1">
                                    <input class="form-check-input" type="radio" name="quarterly-plan" id="quarterly-Radio1" value="1">
                                    <div class="planlist">
                                       <h6>Starter Plan</h6>
                                       <div class="plansetup">Setup fee: <span>£250</span></div>
                                    </div>
                                    <div class="plan-price">
                                       <h3>£150</h3>
                                       <span>per month</span>
                                    </div>
                                 </label>
                              </div>
                              <div class="col-md-4">
                                 <label class="planbox-border form-check-label" for="quarterly-Radio2">
                                    <input class="form-check-input" type="radio" name="quarterly-plan" id="quarterly-Radio2" value="2">
                                    <div class="planlist">
                                       <h6>Standard Plan</h6>
                                       <div class="plansetup">Setup fee: <span>£500</span></div>
                                    </div>
                                    <div class="plan-price">
                                       <h3>£250</h3>
                                       <span>per month</span>
                                    </div>
                                 </label>
                              </div>
                              <div class="col-md-4">
                                 <label class="planbox-border form-check-label" for="quarterly-Radio3">
                                    <input class="form-check-input" type="radio" name="quarterly-plan" id="quarterly-Radio3" value="3">
                                    <div class="planlist">
                                       <h6>Premier Plan</h6>
                                       <div class="plansetup">Setup fee: <span>£1000</span></div>
                                    </div>
                                    <div class="plan-price">
                                       <h3>£500</h3>
                                       <span>per month</span>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="forget-a ft-14 text-center mb-4">
                  <p>Not sure which plan to choose? <a href="">Compare plans</a></p>
               </div>
               <div class="plan-btn"><input class="btn btn-primary btn-full" type="submit" value="Continue"></div>
            </div>
            </form>
         </div>
      </div>
   </div>