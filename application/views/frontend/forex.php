<style>
    .forex-cards .card figure::before {
        top: -70px;
    }

    .card img {
        width: 80px;
        height: 80px;
        object-fit: contain;
    }

    .label__link-dzbd7lyV,
    .blue-text {
        display: none;
    }
</style>
<section class="forex-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('forex_page_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('forex_page_subheading')?> <span class="text-gradient"> <?=lang('forex_page_subheading_highlight')?></span></h2>
                <p class=" wow fadeInUpBig" data-wow-delay="300ms"><?=lang('forex_page_description')?> </p>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row mb-3 mb-lg-5">
            <div class="col-lg-8 col-xl-6 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('forex_withdraw_section_why_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('forex_withdraw_section_heading')?> <span class="text-gradient"><?=lang('forex_withdraw_section_heading_highlight')?></span></h2>
            </div>
        </div>
        <div class="row gy-4 forex-cards">

            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/forex/1_SPREADS AS LOW AS 0 PIPS.svg" class="img-fluid" alt="Spreads from 0 Pips">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('forex_withdraw_section_spreads_heading')?></h5>
                        <p class="card-text"><?=lang('forex_withdraw_section_spreads_text')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/forex/1_ACCOUNT LEVERAGE.svg" class="img-fluid" alt="Leverage up to 1:1000">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('forex_withdraw_section_leverage_heading')?></h5>
                        <p class="card-text"><?=lang('forex_withdraw_section_leverage_text')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/forex/cost_10284786_High execution speed.svg" class="img-fluid" alt="High Execution Speed">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('forex_withdraw_section_execution_heading')?></h5>
                        <p class="card-text"><?=lang('forex_withdraw_section_execution_text')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/forex/cost_10284786_60+ currency pairs.svg" class="img-fluid" alt="60+ Currency Pairs">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('forex_withdraw_section_pairs_heading')?></h5>
                        <p class="card-text"><?=lang('forex_withdraw_section_pairs_text')?></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="group-btn mt-3 mt-md-5 text-center">
            <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('forex_withdraw_section_open_live_account')?></a>
            <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('forex_withdraw_section_open_demo_account')?></a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('discover_forex_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('discover_forex_subheading')?> <span class="text-gradient"><?=lang('discover_forex_subheading_highlight')?></span></h2>
                <p class="mb-5 wow fadeInUpBig" data-wow-delay="300ms"><?=lang('discover_forex_description')?></p>
                <a href="https://area.yamarkets.com/register" target="_blank" class="btn btn-primary wow fadeInUpBig" data-wow-delay="400ms"><?=lang('trade_now_button')?></a>
            </div>
            <div class="col-lg-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"><?=lang('tradingview_track_markets')?></span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                        {
                            "width": "100%",
                            "height": "450",
                            "symbolsGroups": [{
                                "name": "forex",
                                "symbols": [{
                                        "name": "FX:EURUSD"
                                    },
                                    {
                                        "name": "FX:GBPUSD"
                                    },
                                    {
                                        "name": "OANDA:EURUSD"
                                    },
                                    {
                                        "name": "FX:USDJPY"
                                    },
                                    {
                                        "name": "FX_IDC:USDINR"
                                    },
                                    {
                                        "name": "OANDA:GBPUSD"
                                    },
                                    {
                                        "name": "FX:AUDUSD"
                                    },
                                    {
                                        "name": "FX:GBPJPY"
                                    },
                                    {
                                        "name": "FX:USDCAD"
                                    },
                                    {
                                        "name": "OANDA:GBPJPY"
                                    },
                                    {
                                        "name": "OANDA:USDJPY"
                                    },
                                    {
                                        "name": "OANDA:AUDUSD"
                                    }
                                ]
                            }],
                            "showSymbolLogo" : true,
                            "isTransparent": false,
                            "colorTheme": "dark",
                            "locale": "in"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class="faq-gradient">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title mb-4"><?=lang('forex_faq_heading')?></h2>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="100ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?=lang('forex_faq_question_1')?>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_1')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="200ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <?=lang('forex_faq_question_2')?>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_2')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="300ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <?=lang('forex_faq_question_3')?>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_3')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="400ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <?=lang('forex_faq_question_4')?>
                                </button>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_4')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="500ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <?=lang('forex_faq_question_5')?>
                                </button>
                            </h4>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p class="mb-0"><?=lang('forex_faq_answer_5')?></p>
                                    <!-- <p>If you wish to set the no-expiration date on your demo account, please contact us with the following information;</p>
                                    <ol>
                                        <li>your registered e-mail address</li>
                                        <li>Live account number</li>
                                        <li>Your registered full name (in alphabet)</li>
                                        <li>Demo account number</li>
                                    </ol> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="600ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <?=lang('forex_faq_question_6')?>
                                </button>
                            </h4>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_6')?></p>
                                    <!-- <ol>
                                        <li>The card you are trying to use is not VISA, Mastercard or Amex, or has not been registered yet</li>
                                        <li>There is an error in the input contents (please enter in single-byte alphanumeric characters)</li>
                                        <li>You are using a browser other than Chrome</li>
                                        <li>The card company you are using has restrictions on sending money overseas. (It is necessary to contact the card company to cancel the restrictions on overseas use.)</li>
                                        <li>A deposit request exceeds the card limit. (Please check with your credit card company for the maximum amount.)</li>
                                        <li>You've tried the procedure multiple times in a short period of time (it may take some time to stop at the credit card company)</li>
                                        <li>If you use a debit card and the balance is exceeded</li>
                                    </ol> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="700ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                <?=lang('forex_faq_question_7')?>
                                </button>
                            </h4>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_7')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="800ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                <?=lang('forex_faq_question_8')?>
                                </button>
                            </h4>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_8')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="900ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                <?=lang('forex_faq_question_9')?>
                                </button>
                            </h4>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('forex_faq_answer_9')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('system_partner_heading')?></h5>
                <h2 class="title"><?=lang('system_register_heading')?> <span class="text-gradient"> <?=lang('system_register_subheading')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('system_register_subheading_block')?></div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('system_open_live_account')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('system_open_demo_account')?>  </a>
                </div>
            </div>
        </div>
    </div>
</section>