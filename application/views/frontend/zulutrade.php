<style>
    .card img {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }
</style>
<section class="forex-page zulutrade-section position-relative" style="background-image: url(<?= base_url() ?>public/web/img/zulutrade-banner.jpg);">
    <div class="container text-center">
        <div class="position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column align-items-center gap-4 pb-4">
            <a href="" class="btn btn-primary px-5"><?=lang('zulutrade_section_join_button')?></a>
            <button class="border-0 bg-transparent text-white" id="scrollDown">
                <i class="fa-solid fa-angles-down fs-4"></i>
            </button>
        </div>
    </div>
</section>

<section class="step-section">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-12 text-center">
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('zulutrade_section_step_title_1')?> <span class="text-gradient"><?=lang('zulutrade_section_step_title_1')?></span></h2>
                <p class="para-title wow fadeInDown"><?=lang('zulutrade_section_step_sub_title')?></p>
            </div>
            <div class="col-lg-8 col-xl-6 mx-auto">
                <div class="position-relative step-info m-4">
                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 2px;--bs-progress-bar-bg:#fac211;">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <button type="button" id="step1" class="position-absolute top-0 start-0 translate-middle p-0 btn-sm active rounded-pill">1</button>
                    <button type="button" id="step2" class="position-absolute top-0 translate-middle p-0 btn-sm rounded-pill">2</button>
                    <button type="button" id="step3" class="position-absolute top-0 translate-middle p-0 btn-sm rounded-pill">3</button>
                    <button type="button" id="step4" class="position-absolute top-0 start-100 translate-middle p-0 btn-sm rounded-pill">4</button>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div id="content1" class="row align-items-center gy-4">
                    <div class="col-md-8">
                        <h3><?=lang('zulutrade_section_step1_title_1')?> <span class="text-gradient"><?=lang('zulutrade_section_step1_title_2')?></span></h3>
                        <p class="para-title"><?=lang('zulutrade_section_step1_description')?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/open-an-account.jpg" alt="Open an Account" class="img-fluid rounded" />
                    </div>
                </div>
                <div id="content2" class="row align-items-center gy-4 d-none">
                    <div class="col-md-8">
                        <h3><?=lang('zulutrade_section_step2_title_1')?> <span class="text-gradient"><?=lang('zulutrade_section_step2_title_2')?></span></h3>
                        <p class="para-title"><?=lang('zulutrade_section_step2_description')?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/connect-with-ZuluTrade.jpg" alt="Connect with ZuluTrade" class="img-fluid rounded" />
                    </div>
                </div>
                <div id="content3" class="row align-items-center gy-4 d-none">
                    <div class="col-md-8">
                        <h3><?=lang('zulutrade_section_step3_title_1')?> <span class="text-gradient"><?=lang('zulutrade_section_step3_title_2')?></span></h3>
                        <p class="para-title"><?=lang('zulutrade_section_step3_description')?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/explore-and-invest.jpg" alt="Explore and Invest" class="img-fluid rounded" />
                    </div>
                </div>
                <div id="content4" class="row align-items-center gy-4 d-none">
                    <div class="col-md-8">
                        <h3><?=lang('zulutrade_section_step4_title_1')?> <span class="text-gradient"><?=lang('zulutrade_section_step4_title_2')?></span></h3>
                        <p class="para-title"><?=lang('zulutrade_section_step4_description')?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/trade-with-confidence.jpg" alt="Trade with Confidence" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section bg-black">
    <div class="container">
        <div class="row mb-3 mb-lg-5">
            <div class="col-lg-10 col-xl-8 col-xxl-7 mx-auto text-center">
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('withdraw_section_title_1')?> <span class="text-gradient"><?=lang('withdraw_section_title_2')?></span></h2>
                <p class="para-title wow fadeInDown"><?=lang('withdraw_section_subtitle')?></p>
            </div>
        </div>
        <div class="row gy-4 forex-cards">
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="100ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/access-to-the-best.svg" class="img-fluid" alt="Access to the Best of Both Worlds">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('withdraw_access_to_best')?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="200ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/copy-trading.svg" class="img-fluid" alt="Copy Trading">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('withdraw_copy_trading')?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="300ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/advanced-trading.svg" class="img-fluid" alt="Advanced Trading Tools">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('withdraw_advanced_trading_tools')?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="400ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/customer-support.svg" class="img-fluid" alt="Exceptional Customer Support">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('withdraw_exceptional_customer_support')?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-btn mt-3 mt-md-5 text-center">
            <a href="https://yamarkets.zulutrade.com/" class="btn btn-primary mb-3 mb-md-0 wow fadeInUp" data-wow-delay="100ms"><?=lang('withdraw_join_now_button')?></a>
        </div>
    </div>
</section>

<section class="why-choose-zulutrade" style="background-image: url(<?= base_url() ?>public/web/img/why-zulutrade.png);">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 wow fadeInUp">
                <h2 class="wow fadeInUp"><?=lang('why_choose_zulutrade_title_2')?><span class="text-gradient"><?=lang('why_choose_zulutrade_title_2')?></span></h2>
                <ol class="policy-list mt-4">
                    <li><?=lang('why_choose_zulutrade_description_1')?></li>
                    <li><?=lang('why_choose_zulutrade_description_2')?></li>
                    <li><?=lang('why_choose_zulutrade_description_3')?></li>
                </ol>
                <p class="mb-4"><?=lang('why_choose_zulutrade_description_4')?></p>
                <a href="https://yamarkets.zulutrade.com/" class="btn btn-outline-primary"><?=lang('why_choose_zulutrade_button')?></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="title wow fadeInUp"><?=lang('zulutrade_faq_title_1')?> <span class="text-gradient"><?=lang('zulutrade_faq_title_2')?></span></h2>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="100ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?=lang('zulutrade_faq_question_1')?>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_1')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="200ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <?=lang('zulutrade_faq_question_2')?>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_2')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="300ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <?=lang('zulutrade_faq_question_3')?>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_3')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="400ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <?=lang('zulutrade_faq_question_4')?>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_4_1')?></p>
                                    <ol>
                                        <li><?=lang('zulutrade_faq_answer_4_2')?></li>
                                        <li><?=lang('zulutrade_faq_answer_4_3')?></li>
                                        <li> <?=lang('zulutrade_faq_answer_4_4')?></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="500ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <?=lang('zulutrade_faq_question_5')?>
                                </button>
                            </h4>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_5')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="600ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <?=lang('zulutrade_faq_question_6')?>
                                </button>
                            </h4>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_6')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="700ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                <?=lang('zulutrade_faq_question_7')?>
                                </button>
                            </h4>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_7')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="700ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                <?=lang('zulutrade_faq_question_8')?>
                                </button>
                            </h4>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_8')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="700ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                <?=lang('zulutrade_faq_question_9')?>
                                </button>
                            </h4>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('zulutrade_faq_answer_9')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
