<section>
    <div class="container">
        <div class="row gy-5">
            <div class="col-12">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('fast_reliable_transfers')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('funding_options_1')?> <span class="text-gradient"><?=lang('funding_options_2')?>
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="funding-section pt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase active" id="deposit-tab" data-bs-toggle="tab"
                            data-bs-target="#deposit-tab-pane" type="button" role="tab" aria-controls="deposit-tab-pane"
                            aria-selected="true">
                            <span><?=lang('funding_tab_deposit')?></span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="withdraw-tab" data-bs-toggle="tab"
                            data-bs-target="#withdraw-tab-pane" type="button" role="tab"
                            aria-controls="withdraw-tab-pane" aria-selected="false">
                            <span><?=lang('funding_tab_withdraw')?></span>
                        </button>
                    </li>
                </ul>
                
                <div class="tab-content overflow-x-auto overflow-y-hidden" id="myTabContent">
                    <div class="tab-pane fade show active" id="deposit-tab-pane" role="tabpanel"
                        aria-labelledby="deposit-tab" tabindex="0">
                        <ul
                            class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap"><?=lang('funding_regions_covered')?></li>
                            <li class="w-100 text-nowrap"><?=lang('funding_transfer_fee')?></li>
                            <li class="w-100 text-nowrap"><?=lang('funding_deposit_time')?></li>
                        </ul>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/master-card.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100">5%</li>
                                <li class="w-100">Instant</li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/bitcoin.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_instant')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/ethm.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_instant')?></li>
                               
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/perfect-money.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_up_to_1_hour')?></li>
                               
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/neteller.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_up_to_1_hour')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/skrill.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_up_to_1_hour')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/local-deposite-india.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_up_to_1_hour')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/local-deposite-srilanka.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_up_to_1_hour')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/local-deposite-hongkong.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('funding_up_to_1_hour')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/local-deposite-indonesia.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('')?>Up to 1 hour</li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <ul
                            class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap"><?=lang('regions_covered')?></li>
                            <li class="w-100 text-nowrap"><?=lang('transfer_fee')?></li>
                            <li class="w-100 text-nowrap"><?=lang('funding_time')?></li>
                            <li class="w-100"><?=lang('note')?></li>
                        </ul>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <a href="https://payments.cashfree.com/forms/payanshpayment"><img
                                        src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India"
                                        class="img-fluid" /></a>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('india')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100">30min</li>
                                <li class="w-100"><?=lang('upload_screenshot_crm')?></li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://payments.cashfree.com/forms/payanshpayment" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        <!--<div class="funding-wrapper">-->
                        <!--    <div class="position-absolute fix-pos">-->
                        <!--        <a href="https://www.payumoney.com/paybypayumoney/#/37BC84D5FC401B79D762C4197B5779C4"><img-->
                        <!--                src="<?= base_url() ?>public/web/img/funding-img2.png" alt="India"-->
                        <!--                class="img-fluid" /></a>-->
                        <!--    </div>-->
                        <!--    <ul class="list-unstyled d-flex justify-content-between text-center">-->
                        <!--        <li class="w-100"><?=lang('india')?></li>-->
                        <!--        <li class="w-100"><?=lang('no_fee')?></li>-->
                        <!--        <li class="w-100">30min</li>-->
                        <!--        <li class="w-100"><?=lang('upload_screenshot_crm')?></li>-->
                        <!--    </ul>-->
                        <!--    <div class="position-absolute fix-pos">-->
                        <!--        <a href="https://www.payumoney.com/paybypayumoney/#/37BC84D5FC401B79D762C4197B5779C4" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <a href="https://securegw.paytm.in/link/paymentForm/61330/LL_658330042"><img
                                        src="<?= base_url() ?>public/web/img/paytm.png" alt="India"
                                        class="img-fluid" /></a>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('india')?></li>
                                <li class="w-100"><?=lang('no_fee_upi_net_banking')?></li>
                                <li class="w-100">30min</li>
                                <li class="w-100"><?=lang('upload_screenshot_crm')?></li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://securegw.paytm.in/link/paymentForm/61330/LL_658330042" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <a href="https://paytm.business/link/24603/LL_674183319"><img
                                        src="<?= base_url() ?>public/web/img/paytm.png" alt="India"
                                        class="img-fluid" /></a>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('india')?></li>
                                <li class="w-100"><?=lang('no_fee_card_ewallets')?></li>
                                <li class="w-100">30min</li>
                                <li class="w-100"><?=lang('upload_screenshot_crm')?></li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://paytm.business/link/24603/LL_674183319" class="btn btn-primary"><?=lang('funding_tab_deposit')?></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="withdraw-tab-pane" role="tabpanel" aria-labelledby="withdraw-tab"
                        tabindex="0">
                        <ul
                            class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap"><?=lang('regions_covered')?></li>
                            <li class="w-100 text-nowrap"><?=lang('transfer_fee')?></li>
                            <li class="w-100 text-nowrap"><?=lang('withdraw_time')?></li>
                        </ul>
                       
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/master-card.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100">5%</li>
                                <li class="w-100"><?=lang('up_to_24_hours')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/bitcoin.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_24_hours')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/ethm.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_24_hours')?></li>
                               
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/perfect-money.png" alt="India"
                                    class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_24_hours')?></li>
                               
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/neteller.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_24_hours')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/skrill.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('funding_all')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_24_hours')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="https://secure.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <ul
                            class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap"><?=lang('regions_covered')?></li>
                            <li class="w-100 text-nowrap"><?=lang('transfer_fee')?></li>
                            <li class="w-100 text-nowrap"><?=lang('withdraw_time')?></li>
                            <!--<li class="w-100"><?=lang('note')?></li>-->
                        </ul>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <a href="https://area.yamarkets.com/"><img
                                        src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India"
                                        class="img-fluid" /></a>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('india')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_3_hours')?></li>
                            </ul>
                            <div class="position-absolute fix-pos ms-1">
                                <a href="https://area.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <a href="https://area.yamarkets.com/"><img
                                        src="<?= base_url() ?>public/web/img/funding-img2.png" alt="India"
                                        class="img-fluid" /></a>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('india')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_24_hours')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos ms-1">
                                <a href="https://area.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <a href="https://area.yamarkets.com/"><img
                                        src="<?= base_url() ?>public/web/img/paytm.png" alt="India"
                                        class="img-fluid" /></a>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100"><?=lang('india')?></li>
                                <li class="w-100"><?=lang('no_fee')?></li>
                                <li class="w-100"><?=lang('up_to_3_hours')?></li>
                                
                            </ul>
                            <div class="position-absolute fix-pos ms-1">
                                <a href="https://area.yamarkets.com/" class="btn btn-primary"><?=lang('funding_tab_withdraw')?></a>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <!--<div class="tab-content overflow-x-auto overflow-y-hidden mb-5" id="myTabContent">-->
                <!--    <div class="tab-pane fade show active" id="deposit-tab-pane" role="tabpanel"-->
                <!--        aria-labelledby="deposit-tab" tabindex="0">-->
                        
                <!--    </div>-->
                <!--    <div class="tab-pane fade" id="withdraw-tab-pane" role="tabpanel" aria-labelledby="withdraw-tab"-->
                <!--        tabindex="0">-->
                        
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('supported_payment_systems')?></h5>
                <h2 class="title"><?=lang('for_convenient_deposits_1')?> <span class="text-gradient"><?=lang('for_convenient_deposits_2')?> </span>
                    <div class="d-lg-block text-gradient"> <?=lang('and_withdrawals')?></div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp"
                        data-wow-delay="100ms"><?=lang('open_live_account')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp"
                        data-wow-delay="300ms"><?=lang('open_demo_account')?></a>
                </div>
            </div>
        </div>
    </div>
</section>