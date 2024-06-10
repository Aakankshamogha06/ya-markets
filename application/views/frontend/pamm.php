
<style>
    .border-warning {
        transition: all .3s ease;
    }

    .border-warning:hover {
        box-shadow: 0 7px 35px #fac2113b;
        transform: translateY(-5px) scale(1.01);
    }

    .why-choose-zulutrade::before {
        clip-path: none;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 1px solid;
        display: grid;
        place-items: center;
    }
</style>

<section class="forex-page z-0 position-relative overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-lg-3 text-center">
                <h2 class="title mb-3 wow fadeInDown" data-wow-delay="200ms"><span class="text-gradient"><?=lang('pamm_page_heading_1')?>&nbsp;</span><?=lang('pamm_page_heading_2')?></h2>
                <p class="wow fadeInUp"><?=lang('pamm_page_subheading')?></p>
            </div>
        </div>
    </div>
    <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#212121" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,165.3C672,171,768,245,864,277.3C960,309,1056,299,1152,282.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>

<section style="background-color: #212121;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h2 class="title mb-3 wow fadeInUp"><?=lang('pamm_trading_heading_1')?> <span class="text-gradient"><?=lang('pamm_trading_heading_2')?></span>?</h2>
                <p class="wow fadeInUp" data-wow-delay="100ms"><?=lang('pamm_trading_description')?></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6">
                <div class="linear-border p-3 bg-linear-gradient h-100 rounded wow fadeInLeft">
                    <h3> <?=lang('for_masters_heading')?></h3>
                    <p><?=lang('for_masters_description_1')?></p>
                    <p>
                        <small class="text-primary"><?=lang('for_masters_description_2')?></small>
                    </p>
                    <a href="https://pamm.yamarkets.com/app/auth/manager" class="btn btn-primary"><?=lang('for_masters_link')?></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="linear-border p-3 bg-linear-gradient h-100 rounded wow fadeInRight">
                    <h3> <?=lang('for_investors_heading')?></h3>
                    <p><?=lang('for_investors_description_1')?></p>
                    <p>
                        <small class="text-primary"><?=lang('for_investors_description_2')?></small>
                    </p>
                    <a href="https://pamm.yamarkets.com/app/auth/investor" class="btn btn-primary"><?=lang('for_investors_link')?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-zulutrade">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6 col-lg-5">
                <img src="<?=base_url()?>/public/web/img/pamm-trading.png" alt="Key to Markets PAMM" class="img-fluid rounded mb-3 wow fadeInLeft" />
                <h3 class="mb-3 wow fadeInLeft" data-wow-delay="100ms"><?=lang('pamm_page_heading_1')?><span class="text-gradient"><?=lang('pamm_page_heading_2')?></span></h3>
                <p class="wow fadeInLeft" data-wow-delay="200ms"><?=lang('pamm_page_description_1')?><strong class="text-primary"><?=lang('pamm_page_description_2')?></strong><?=lang('pamm_page_description_3')?></p>
            </div>
            <div class="col-md-6 offset-lg-1">
                <h3 class="mb-3 wow fadeInRight"><?=lang('pamm_benefits_heading_1')?> <span class="text-gradient"><?=lang('pamm_benefits_heading_2')?></span>:</h3>
                <ul class="list-unstyled">
                    <li class="d-flex gap-2 mb-2 wow fadeInRight" data-wow-delay="100ms">
                        <span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </span>
                        <span><strong class="text-primary"><?=lang('pamm_page_benefit_1_1')?></strong><?=lang('pamm_page_benefit_1_2')?></span>
                    </li>
                    <li class="d-flex gap-2 mb-2 wow fadeInRight" data-wow-delay="200ms">
                        <span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </span>
                        <span><strong class="text-primary"><?=lang('pamm_page_benefit_2_1')?></strong> <?=lang('pamm_page_benefit_2_2')?></span>
                    </li>
                    <li class="d-flex gap-2 mb-2 wow fadeInRight" data-wow-delay="300ms">
                        <span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </span>
                        <span><strong class="text-primary"><?=lang('pamm_page_benefit_3_1')?></strong> <?=lang('pamm_page_benefit_3_2')?></span>
                    </li>
                    <li class="d-flex gap-2 mb-2 wow fadeInRight" data-wow-delay="400ms">
                        <span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </span>
                        <span><strong class="text-primary"><?=lang('pamm_page_benefit_4_1')?></strong> <?=lang('pamm_page_benefit_4_2')?></span>
                    </li>
                    <li class="d-flex gap-2 mb-2 wow fadeInRight" data-wow-delay="500ms">
                        <span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </span>
                        <span><strong class="text-primary"><?=lang('pamm_page_benefit_5_1')?></strong> <?=lang('pamm_page_benefit_5_2')?></span>
                    </li>
                    <li class="d-flex gap-2 mb-2 wow fadeInRight" data-wow-delay="600ms">
                        <span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </span>
                        <span><strong class="text-primary"><?=lang('pamm_page_benefit_6_1')?></strong> <?=lang('pamm_page_benefit_6_2')?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-12 text-center">
                <h2 class="title mb-4 wow fadeInUp"><span class="text-gradient"><?=lang('withdraw_section_heading_1')?></span> <?=lang('withdraw_section_heading_2')?></h2>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="border text-center border-warning rounded p-3 overflow-hidden h-100 wow fadeInUp" data-wow-delay="100ms">
                    <div class="icon text-primary mb-3 mx-auto">
                        <i class="fa-solid fa-user-plus fa-2x"></i>
                    </div>
                    <h4 class="text-primary"><?=lang('withdraw_section_step_1_title')?></h4>
                    <p><?=lang('withdraw_section_step_1_description')?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="border text-center border-warning rounded p-3 overflow-hidden h-100 wow fadeInUp" data-wow-delay="200ms">
                    <div class="icon text-primary mb-3 mx-auto">
                        <i class="fa-solid fa-cloud-arrow-up fa-2x"></i>
                    </div>
                    <h4 class="text-primary"><?=lang('withdraw_section_step_2_title')?></h4>
                    <p><?=lang('withdraw_section_step_2_description')?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="border text-center border-warning rounded p-3 overflow-hidden h-100 wow fadeInUp" data-wow-delay="300ms">
                    <div class="icon text-primary mb-3 mx-auto">
                        <i class="fa-solid fa-file-invoice fa-2x"></i>
                    </div>
                    <h4 class="text-primary"><?=lang('withdraw_section_step_3_title')?></h4>
                    <p><?=lang('withdraw_section_step_3_description')?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="border text-center border-warning rounded p-3 overflow-hidden h-100 wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon text-primary mb-3 mx-auto">
                        <i class="fa-solid fa-person-circle-plus fa-2x"></i>
                    </div>
                    <h4 class="text-primary"><?=lang('withdraw_section_step_4_title')?></h4>
                    <p><?=lang('withdraw_section_step_4_description')?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="border text-center border-warning rounded p-3 overflow-hidden h-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="icon text-primary mb-3 mx-auto">
                        <i class="fa-solid fa-walkie-talkie fa-2x"></i>
                    </div>
                    <h4 class="text-primary"><?=lang('withdraw_section_step_5_title')?></h4>
                    <p><?=lang('withdraw_section_step_5_description')?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="title wow fadeInUp"><?=lang('pamm_faq_heading_1')?> <span class="text-gradient"><?=lang('pamm_faq_heading_2')?></span></h2>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="100ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?=lang('pamm_faq_question_1')?>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('pamm_faq_answer_1')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="200ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <?=lang('pamm_faq_question_2')?>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('pamm_faq_answer_2')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="300ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <?=lang('pamm_faq_question_3')?>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p><?=lang('pamm_faq_answer_3')?></p>
                                </div>
                            </div>
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
            <div class="col-12">
                
                <p><?=lang('disclaimer_paragraph_1')?></p>
            <p><?=lang('disclaimer_paragraph_2')?></p>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('supported_payment_heading')?></h5>
                <h2 class="title"><?=lang('supported_payment_subheading_1')?> <span class="text-gradient"><?=lang('supported_payment_subheading_2')?></span>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('system_section_button_live_account')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('system_section_button_demo_account')?></a>
                </div>
            </div>
        </div>
    </div>
</section>
