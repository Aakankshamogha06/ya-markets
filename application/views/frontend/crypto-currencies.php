<style>
    .forex-cards .card figure::before {
        top: -70px;
    }

    .card img {
        width: 80px;
        height: 80px;
        object-fit: contain;
    }
    .blue-text {
        display: none;
    }
</style>

<section class="forex-page position-relative overflow-visible" style="background-image:url(<?= base_url() ?>public/web/img/crypto-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 text-center text-lg-start">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('crypto_trading_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('crypto_trading_subheading_1')?> <span class="text-gradient"><?=lang('crypto_trading_subheading_2')?></span></h2>
                <p class="mb-5 wow fadeInUpBig" data-wow-delay="300ms"><?=lang('crypto_trading_description')?></p>
            </div>
        </div>
    </div>
    <img src="<?= base_url() ?>public/web/img/clip-step.png" alt="Clip" class="img-fluid pe-none position-absolute bottom-0" />
</section>

<section class="invest-section position-relative overflow-visible" style="background-color: #1d1d26;">
    <div class="container">
        <div class="row mb-3 mb-lg-5">
            <div class="col-lg-8 col-xl-6 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('why_trade_crypto_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"> <?=lang('why_trade_crypto_subheading_1')?> <span class="text-gradient"><?=lang('why_trade_crypto_subheading_2')?> </span></h2>
            </div>
        </div>
        <div class="row gy-4 forex-cards">

            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp" data-wow-delay="100ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/cryptocurrencies/cost_10284786_Cryptocurrencies.svg" class="img-fluid" alt="Trade CFDs on 26 Cryptocurrencies">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('why_trade_crypto_1_title')?></h5>
                        <p class="card-text"><?=lang('why_trade_crypto_1_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp" data-wow-delay="300ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/cryptocurrencies/cost_10284786_any time.svg" class="img-fluid" alt="Trade Anytime, Anywhere">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('why_trade_crypto_2_title')?></h5>
                        <p class="card-text"><?=lang('why_trade_crypto_2_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp" data-wow-delay="500ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/cryptocurrencies/cost_10284786_10USD.svg" class="img-fluid" alt="Start with Just $10">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('why_trade_crypto_3_title')?></h5>
                        <p class="card-text"><?=lang('why_trade_crypto_3_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center wow fadeInUp" data-wow-delay="700ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/cryptocurrencies/cost_10284786_platform.svg" class="img-fluid" alt="Modern Trading Platforms">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('why_trade_crypto_4_title')?></h5>
                        <p class="card-text"><?=lang('why_trade_crypto_4_description')?></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="group-btn mt-3 mt-md-5 text-center">
            <a href="https://area.yamarkets.com/register" class="btn btn-primary  wow fadeInUp" data-wow-delay="100ms"><?=lang('open_live_account_button')?></a>
            <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('open_demo_account_button')?></a>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('how_to_invest_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('how_to_invest_subheading_1')?> <span class="text-gradient"><?=lang('how_to_invest_subheading_2')?></span></h2>
            </div>
            <div class="col-12 position-relative d-none d-md-block top-n150">
                <img src="<?= base_url() ?>public/web/img/curved-line.svg" alt="Curved Line" class="img-fluid pe-none" />
            </div>
        </div>
        <div class="row gy-5 crypto-row">
            <div class="col-md-4">
                <div class="crypto-card px-xxl-4 position-relative wow fadeInUp" data-attr="1" data-wow-delay="200ms">
                    <h4 class="card-title text-primary fw-semibold mb-4"><?=lang('how_to_invest_step_1_title')?> <span class="d-lg-block"><?=lang('')?></span></h4>
                    <p class="card-text"><?=lang('how_to_invest_step_1_description')?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="crypto-card px-xxl-4 position-relative wow fadeInUp" data-attr="2" data-wow-delay="400ms">
                    <h4 class="card-title text-primary fw-semibold mb-4"><?=lang('how_to_invest_step_2_title')?> <span class="d-lg-block"><?=lang('')?></span></h4>
                    <p class="card-text"><?=lang('how_to_invest_step_2_description')?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="crypto-card px-xxl-4 position-relative wow fadeInUp" data-attr="3" data-wow-delay="600ms">
                    <h4 class="card-title text-primary fw-semibold mb-4"><?=lang('how_to_invest_step_3_title')?> <span class="d-lg-block"><?=lang('')?></span></h4>
                    <p class="card-text">S<?=lang('how_to_invest_step_3_description')?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gradient-bg">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('trusted_platform_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('trade_cryptocurrencies_heading_1')?> <span class="text-gradient"><?=lang('trade_cryptocurrencies_heading_2')?></span></h2>
                <p class="mb-5 wow fadeInUpBig" data-wow-delay="300ms"><?=lang('trade_cryptocurrencies_subheading')?> <?=lang('trade_cryptocurrencies_trackall ')?></p>
                <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUpBig" data-wow-delay="400ms"><?=lang('trade_cryptocurrencies_trade_now')?></a>
            </div>
            <div class="col-lg-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"><?=lang('trade_cryptocurrencies_trackall')?></span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
                            "width": "100%",
                            "height": 490,
                            "defaultColumn": "overview",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
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
                <h2 class="title mb-4"><?=lang('')?></h2>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="100ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?=lang('cryptocurrency_faq_question_1')?>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_1')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="200ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <?=lang('cryptocurrency_faq_question_2')?>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_2')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="300ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <?=lang('cryptocurrency_faq_question_3')?>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_3')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="400ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <?=lang('cryptocurrency_faq_question_4')?>
                                </button>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_4')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="500ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <?=lang('cryptocurrency_faq_question_5')?>
                                </button>
                            </h4>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p class="mb-0"><?=lang('cryptocurrency_faq_answer_5')?></p>
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
                                <?=lang('cryptocurrency_faq_question_6')?>
                                </button>
                            </h4>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_6')?></p>
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
                                <?=lang('cryptocurrency_faq_question_7')?>
                                </button>
                            </h4>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_7')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="800ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                <?=lang('cryptocurrency_faq_question_8')?>
                                </button>
                            </h4>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_8')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="900ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                <?=lang('cryptocurrency_faq_question_9')?>
                                </button>
                            </h4>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('cryptocurrency_faq_answer_9')?></p>
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
                <h5 class="text-primary fw-bold"><?=lang('partner_trading_success_heading')?></h5>
                <h2 class="title"><?=lang('register_now_title')?> <span class="text-gradient"><?=lang('seamless_trading_text')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('with_yamarkets_text')?></div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('open_live_account_button')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('open_demo_account_button')?></a>
                </div>
            </div>
        </div>
    </div>
</section>