<div class="container">
    <div class="payment-max-width">
        <div class="reg-title text-center">
            <h2>Make your platform payment</h2>
            <p>Please enter your card details below to setup your platform account.</p>
        </div>
        <div class="payment-midd-sec payment-form-list">
            <form class="items-center" action="{{ route('step_reg', [3, 2]) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="formwhitebg">
                            <div class="on-bording-form-part">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Name on card</label>
                                        <div class="form-input-icon">
                                            <input type="text" class="form-control" placeholder="Olivia Rhye">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Card number</label>
                                        <div class="form-input-icon card-number-input">
                                            <div class="mastercard-icon"><img
                                                    src="{{ asset('images/mastercard-icon.svg') }}" alt="">
                                            </div>
                                            <input type="text" class="form-control" name="payment_creditcardnumber"
                                                id="payment_creditcardnumber" placeholder="1234 1234 1234 1234">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Expiry</label>
                                        <div class="form-input-icon">
                                            <input type="text" class="form-control" name="payment_expiredate"
                                                id="payment_expiredate" placeholder="06/2024">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">CVV</label>
                                        <div class="form-input-icon">
                                            <input type="text" class="form-control" name="payment_csvnumber"
                                                id="payment_csvnumber" placeholder="•••">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <div class="form-input-icon">
                                            <input type="text" class="form-control" placeholder="100 Smith Street">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">City</label>
                                        <div class="form-input-icon">
                                            <input type="text" class="form-control" placeholder="VIC">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Postcode</label>
                                        <div class="form-input-icon">
                                            <input type="text" class="form-control" placeholder="3066">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Country</label>
                                        <div class="niceCountryInputSelector form-control" data-selectedcountry="US"
                                            data-showspecial="false" data-showflags="true" data-i18nall="All selected"
                                            data-i18nnofilter="No selection" data-i18nfilter="Filter"
                                            data-onchangecallback="onChangeCallback">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="formwhitebg payment-summary plr-none">
                            <h6>Summary</h6>
                            <div class="summary-secton">
                                <div class="summary-list">
                                    <div class="summary-listing">
                                        <div class="summary-row">
                                            <div class="summary-acc-name">Standard Account (Monthly) <span>Renews on 12
                                                    March 2023</span></div>
                                            <div class="summary-price">£250</div>
                                        </div>
                                        <div class="summary-row">
                                            <div class="summary-acc-name">Setup Fee (one-off)</div>
                                            <div class="summary-price">£500</div>
                                        </div>
                                    </div>
                                    <div class="summary-row summary-total-price">
                                        <div class="summary-acc-name">Total</div>
                                        <div class="summary-price">£750</div>
                                    </div>
                                    <div class="plan-btn mb-3"><input class="btn btn-primary btn-full" type="submit"
                                            value="Confirm and Pay"></div>
                                    <div class="accordion accordion-flush payment-code-sec" id="apply-code">
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="form-code">
                                                <a class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#coup-list" aria-expanded="false"
                                                    aria-controls="coup-list">
                                                    Have a special code?
                                                </a>
                                            </div>
                                            <div id="coup-list" class="accordion-collapse collapse"
                                                aria-labelledby="form-code" data-bs-parent="#apply-code">
                                                <div class="accordion-body">
                                                    <div class="code-btn-row">
                                                        <div class="code-input"><input type="text"
                                                                class="form-control" placeholder=""></div>
                                                        <div class="code-btn"><input class="btn btn-primary btn-full"
                                                                type="submit" value="Apply"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
