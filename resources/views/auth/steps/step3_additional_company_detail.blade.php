<div class="container">
    <div class="personal-det-sec personal-cont-width">
       <div class="reg-title text-center">
          <h2>Additional company details required</h2>
          <p>We need some additional details about your company.</p>
       </div>
       <div class="formwhitebg form-secton">
          <div class="on-bording-form-part">
             <form class="items-center" action="{{ route('step_reg', [3,8]) }}" method="POST">
                @csrf
                <div class="row">

                   <div class="col-md-12 mb-3">
                      <label class="form-label">Business type</label>
                      <div class="form-input-icon select-2-box">
                         <select class="js-example-basic-single js-states form-control">
                            <option>What type of business do you run?</option>
                            <option>Business type -1 </option>
                            <option>Business type -2 </option>
                            <option>Business type -3 </option>
                          </select>
                      </div> 
                   </div>

                   <div class="col-md-12 mb-3">
                      <label class="form-label">Registered Company Name</label>
                      <div class="form-input-icon">
                         <input type="text" class="form-control" placeholder="Hourglass Inc.">
                      </div>
                   </div>

                   <div class="col-md-12 mb-3">
                      <label class="form-label">Company Description</label>
                      <div class="form-input-icon">
                         <textarea class="form-control" placeholder="Tell us about your business"></textarea>
                      </div>
                   </div>


                   <div class="col-md-12 mb-3">
                      <label class="form-label">Sector</label>
                      <div class="form-input-icon select-2-box">
                         <select class="js-example-basic-single js-states form-control">
                            <option>Which sector does your company operate in?</option>
                            <option>Sector - 1</option>
                            <option>Sector - 2</option>
                            <option>Sector - 3</option>
                          </select>
                      </div> 
                   </div>

                   <div class="col-md-12 mb-3">
                      <label class="form-label">Annual revenue estimate</label>
                      <div class="form-input-icon select-2-box">
                         <select class="js-example-basic-single js-states form-control">
                            <option>Select an option</option>
                            <option>Select an option 1</option>
                            <option>Select an option 2</option>
                            <option>Select an option 3</option>
                          </select>
                      </div>  
                   </div>
                   <div class="col-md-12 mb-3 inputbrowserfile">
                      <label class="form-label">Company logo <span>(optional)</span></label>
                      <div class="form-input-icon browserbox">
                         <div id="preview" class="file-img-prev"><img src="images/upload-icon.svg" alt=""></div>
                         <div class="uploadOuter">
                          <span class="dragBox" >
                            <strong>Click to upload</strong> or drag and drop
                            <input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
                          </span>
                          </div>
                          
                         
                      </div>
                   </div>
                   
                   <div class="mb-3 mb-0 pt-2"><input class="btn btn-primary btn-full" type="submit" value="Continue"></div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>