<style>
    .forex-cards .card figure::before {
        top: -70px;
    }

    .card img {
        width: 80px;
        height: 60px;
        object-fit: contain;
    }
</style>
<section class="forex-page z-0 position-relative overflow-visible" style="background-image: url(<?= base_url() ?>public/web/img/commodities-banner.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="title mb-3 wow fadeInUp"><span class="text-gradient"><?=lang('commodities_trade_heading_1')?> </span><?=lang('commodities_trade_heading_2')?></h2>
                <p class="mb-0 wow fadeInUp" data-wow-delay="100ms"><?=lang('commodities_trade_description')?></p>
            </div>
        </div>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 190" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path style="transform:translate(0, 0px); opacity:1" fill="#0d0e11" d="M0,19L240,38C480,57,960,95,1440,120.3C1920,146,2400,158,2880,161.5C3360,165,3840,158,4320,136.2C4800,114,5280,76,5760,79.2C6240,82,6720,127,7200,145.7C7680,165,8160,158,8640,133C9120,108,9600,63,10080,38C10560,13,11040,6,11520,12.7C12000,19,12480,38,12960,50.7C13440,63,13920,70,14400,82.3C14880,95,15360,114,15840,117.2C16320,120,16800,108,17280,101.3C17760,95,18240,95,18720,101.3C19200,108,19680,120,20160,110.8C20640,101,21120,70,21600,53.8C22080,38,22560,38,23040,50.7C23520,63,24000,89,24480,91.8C24960,95,25440,76,25920,79.2C26400,82,26880,108,27360,120.3C27840,133,28320,133,28800,133C29280,133,29760,133,30240,136.2C30720,139,31200,146,31680,133C32160,120,32640,89,33120,91.8C33600,95,34080,133,34320,152L34560,171L34560,190L34320,190C34080,190,33600,190,33120,190C32640,190,32160,190,31680,190C31200,190,30720,190,30240,190C29760,190,29280,190,28800,190C28320,190,27840,190,27360,190C26880,190,26400,190,25920,190C25440,190,24960,190,24480,190C24000,190,23520,190,23040,190C22560,190,22080,190,21600,190C21120,190,20640,190,20160,190C19680,190,19200,190,18720,190C18240,190,17760,190,17280,190C16800,190,16320,190,15840,190C15360,190,14880,190,14400,190C13920,190,13440,190,12960,190C12480,190,12000,190,11520,190C11040,190,10560,190,10080,190C9600,190,9120,190,8640,190C8160,190,7680,190,7200,190C6720,190,6240,190,5760,190C5280,190,4800,190,4320,190C3840,190,3360,190,2880,190C2400,190,1920,190,1440,190C960,190,480,190,240,190L0,190Z"></path>
    </svg>
</section>

<section>
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 text-center">
                <h2 class="title mb-4 wow fadeInUp"><?=lang('commodities_trade_why')?> <span class="text-gradient"><?=lang('commodities_trade_yamarkets')?></span></h2>
            </div>
            <div class="col-md-6 wow fadeInLeft">
                <img src="<?= base_url() ?>public/web/website/product/commodities/commodities-explained.jpg" alt="" class="img-fluid pe-none comm-img" />
            </div>
            <div class="col-md-6">
                <ul class="comm-list" type="none">
                    <li class="mb-4 wow fadeInRight position-relative">
                        <h4 class="mb-2"><?=lang('commodities_trade_zero_commissions')?></h4>
                        <p><?=lang('commodities_trade_zero_commissions_description')?></p>
                    </li>
                    <li class="mb-4 wow fadeInRight position-relative" data-wow-delay="200ms">
                        <h4 class="mb-2"><?=lang('commodities_trade_long_short')?></h4>
                        <p><?=lang('commodities_trade_long_short_description')?></p>
                    </li>
                    <li class="wow fadeInRight position-relative" data-wow-delay="400ms">
                        <h4 class="mb-2"><?=lang('commodities_trade_leverage')?></h4>
                        <p><?=lang('commodities_trade_leverage_description')?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row gy-4 forex-cards">

            <div class="col-md-4">
                <div class="card text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/commodities/1_What are commodities-.svg" class="img-fluid" alt="commodities">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('commodities_user_friendly_platform_heading')?></h5>
                        <p class="card-text"><?=lang('commodities_user_friendly_platform_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/commodities/1_How to trade commodity CFDs.svg" class="img-fluid" alt="commodities">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('commodities_extensive_options_heading')?></h5>
                        <p class="card-text"><?=lang('commodities_extensive_options_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/commodities/1_Why trade commodities-.svg" class="img-fluid" alt="commodities">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-3"><?=lang('commodities_favorable_conditions_heading')?></h5>
                        <p class="card-text"><?=lang('commodities_favorable_conditions_description')?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-black overflow-visible">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6">
                <h2 class="title mb-3 wow fadeInLeft"><?=lang('commodities_popular_commodities_heading_1')?> <span class="text-gradient"><?=lang('commodities_popular_commodities_heading_2')?></span></h2>
                <p class="wow fadeInLeft" data-wow-delay="100ms"><?=lang('commodities_popular_commodities_description')?></p>
                <a href="https://area.yamarkets.com/register" class="btn btn-primary  wow fadeInUp" data-wow-delay="100ms"><?=lang('open_live_account_button')?></a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 gx-md-2 gy-md-1 popular-comm">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="card border rounded-top-pill align-items-center py-3 bg-transparent text-center">
                            <img src="<?= base_url() ?>public/web/website/product/commodities/Popular commodities/1_gold (2).svg" alt="" class="img-fluid mb-3" />
                            <h5 class="text-white"><?=lang('commodities_popular_commodities_gold')?></h5>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card border rounded-top-pill align-items-center py-3 bg-transparent text-center">
                            <img src="<?= base_url() ?>public/web/website/product/commodities/Popular commodities/1_silver.svg" alt="" class="img-fluid mb-3" />
                            <h5 class="text-white"><?=lang('commodities_popular_commodities_silver')?></h5>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="card border rounded-bottom-pill align-items-center py-3 bg-transparent text-center">
                            <img src="<?= base_url() ?>public/web/website/product/commodities/Popular commodities/1_oil.svg" alt="" class="img-fluid mb-3" />
                            <h5 class="text-white"><?=lang('commodities_popular_commodities_oil')?></h5>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card border rounded-bottom-pill align-items-center py-3 bg-transparent text-center">
                            <img src="<?= base_url() ?>public/web/website/product/commodities/Popular commodities/1_gas.svg" alt="" class="img-fluid mb-3" />
                            <h5 class="text-white"><?=lang('commodities_popular_commodities_naturalgas')?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="title wow fadeInUp"><?=lang('commodities_faq_heading_1')?> <span class="text-gradient"><?=lang('commodities_faq_heading_2')?></span></h2>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="100ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?=lang('commodities_faq_question_1')?>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('commodities_faq_answer_1')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="200ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <?=lang('commodities_faq_question_2')?>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('commodities_faq_answer_2_1')?></p>
                                    <p><?=lang('commodities_faq_answer_2_2')?></p>
                                    <p><?=lang('commodities_faq_answer_2_3')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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