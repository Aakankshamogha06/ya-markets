<style>
    .strength-section .card {
        transition: all .3s ease-in-out;
    }

    .strength-section .card:hover {
        transform: scale(1.05) translateY(-10px);
    }

    .icon {
        width: 70px;
        height: 70px;
        display: grid;
        place-items: center;
        color: #000;
        background-color: #fac211;
        border-radius: 50%;
    }

    .icon~div {
        width: calc(100% - 70px);
    }

    .line-clamp {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .steps-design::before {
        height: 81%;
    }

    .steps-design li::before {
        background-color: #212529;
    }
</style>

<section class="forex-page z-0 position-relative overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 pb-lg-3 text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDownBig"><?=lang('copy_trading_section_heading')?></h5>
                <h2 class="title wow fadeInUpBig" data-wow-delay="200ms"><?=lang('copy_trading_section_subheading_1')?> <span class="text-gradient"><?=lang('copy_trading_section_subheading_2')?></h2>
                <p><?=lang('copy_trading_section_description')?>
                </p>
            </div>
        </div>
    </div>
    <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#212121" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>

<section style="background: #212121;">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-5 wow fadeInLeftBig">
                <img src="<?= base_url() ?>public/web/img/copytrade-img.jpg" alt="Beautiful Inner Page Elements" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h3 class="h2 fw-bold mb-3 wow fadeInRightBig" data-wow-delay="100ms"><?=lang('copy_trading_section_effortlessly_follow_heading_1')?> <span class="text-gradient"><?=lang('copy_trading_section_effortlessly_follow_heading_2')?></span></h3>
                <p class="wow fadeInRightBig" data-wow-delay="200ms"><?=lang('copy_trading_section_effortlessly_follow_description')?></p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-2 gap-3 wow fadeInRightBig" data-wow-delay="300ms">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#f9c213">
                            <path d="M16.2032 0L5.03743 12.2888L1.79679 9.81818H0L5.03743 18L18 0H16.2032Z" />
                        </svg>
                        <span class="opacity-50"><?=lang('copy_trading_section_copy_trade_list_1')?></span>
                    </li>
                    <li class="d-flex align-items-center mb-2 gap-3 wow fadeInRightBig" data-wow-delay="400ms">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#f9c213">
                            <path d="M16.2032 0L5.03743 12.2888L1.79679 9.81818H0L5.03743 18L18 0H16.2032Z" />
                        </svg>
                        <span class="opacity-50"><?=lang('copy_trading_section_copy_trade_list_2')?></span>
                    </li>
                    <li class="d-flex align-items-center mb-2 gap-3 wow fadeInRightBig" data-wow-delay="500ms">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#f9c213">
                            <path d="M16.2032 0L5.03743 12.2888L1.79679 9.81818H0L5.03743 18L18 0H16.2032Z" />
                        </svg>
                        <span class="opacity-50"><?=lang('copy_trading_section_copy_trade_list_3')?></span>
                    </li>
                    <li class="d-flex align-items-center gap-3 wow fadeInRightBig" data-wow-delay="600ms">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#f9c213">
                            <path d="M16.2032 0L5.03743 12.2888L1.79679 9.81818H0L5.03743 18L18 0H16.2032Z" />
                        </svg>
                        <span class="opacity-50"><?=lang('copy_trading_section_copy_trade_list_4')?></span>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://copytrader.yamarkets.com/portal/registration/provider" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('copy_trading_section_become_master')?></a>
                    <a href="https://copytrader.yamarkets.com/portal/registration/subscription" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="100ms"><?=lang('copy_trading_section_become_follower')?></a>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-md-6">
                <img src="<?= base_url() ?>public/web/img/account-img.jpg" alt="" class="img-fluid rounded wow fadeInLeft" />
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1">
                <h3 class="h2 fw-bold mb-3 " data-wow-delay="100ms"><?=lang('copy_trading_how_to_start_heading_1')?> <span class="text-gradient"><?=lang('copy_trading_how_to_start_heading_2')?> </span></h3>

                <ul class="list-unstyled d-grid gap-4 gap-lg-5 position-relative steps-design">
                    <li class="position-relative wow fadeInRight" data-wow-delay="100ms">
                        <h5 class="text-primary"><?=lang('copy_trading_step_1')?></h5>
                        <p class="mb-0"><?=lang('copy_trading_step_1_description')?></p>
                    </li>
                    <li class="position-relative wow fadeInRight" data-wow-delay="200ms">
                        <h5 class="text-primary"><?=lang('copy_trading_step_2')?></h5>
                        <p class="mb-0"><?=lang('copy_trading_step_2_description')?></p>
                    </li>
                    <li class="position-relative wow fadeInRight" data-wow-delay="300ms">
                        <h5 class="text-primary"><?=lang('copy_trading_step_3')?></h5>
                        <p class="mb-0"><?=lang('copy_trading_step_3_description')?></p>
                    </li>
                    <li class="position-relative wow fadeInRight" data-wow-delay="400ms">
                        <h5 class="text-primary"><?=lang('copy_trading_step_4')?></h5>
                        <p class="mb-0"><?=lang('copy_trading_step_4_description')?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="strength-section">
    <div class="container">
        <div class="row gy-3 g-lg-5 align-items-end">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-lg-2 text-center">
                <h2 class="title mb-3 wow fadeInUp"><?=lang('copy_trading_section_unique_benefits_heading_1')?> <span class="text-gradient"><?=lang('copy_trading_section_unique_benefits_heading_2')?></span></h2>
                <p class="mb-4 wow fadeInUp"><?=lang('copy_trading_section_unique_benefits_description')?></p>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row gy-3 gy-lg-5">
                    <div class="col-12">
                        <div class="card bg-linear-gradient linear-border wow slideInLeft">
                            <div class="card-body d-flex gap-3">
                                <div class="icon">
                                    <i class="fa-2x fa-regular fa-lightbulb mt-1"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-primary"><?=lang('copy_trading_benefit_1_title_1')?> <br /><?=lang('copy_trading_benefit_1_title_2')?></h5>
                                    <p class="card-text line-clamp"><?=lang('copy_trading_benefit_1_description')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-linear-gradient linear-border wow slideInLeft" data-wow-delay="300ms">
                            <div class="card-body d-flex gap-3">
                                <div class="icon">
                                    <i class="fa-regular fa-building fa-2x mt-1"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-primary"><?=lang('copy_trading_benefit_2_title_1')?> <br /><?=lang('copy_trading_benefit_2_title_2')?></h5>
                                    <p class="card-text line-clamp"><?=lang('copy_trading_benefit_2_description')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-linear-gradient linear-border wow slideInLeft" data-wow-delay="600ms">
                            <div class="card-body d-flex gap-3">
                                <div class="icon">
                                    <i class="fa-solid fa-gauge-simple fa-2x mt-1"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-primary"><?=lang('copy_trading_benefit_3_title_1')?> <br /><?=lang('copy_trading_benefit_3_title_2')?></h5>
                                    <p class="card-text line-clamp"><?=lang('copy_trading_benefit_3_description')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none text-center d-lg-block">
                <img src="<?= base_url() ?>public/web/img/architect.png" alt="Architect" class="img-fluid wow fadeInUpBig">
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row gy-3 gy-lg-5">
                    <div class="col-12">
                        <div class="card bg-linear-gradient linear-border wow slideInRight">
                            <div class="card-body d-flex gap-3">
                                <div class="icon">
                                    <i class="fa-2x fa-brands fa-google mt-1"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-primary"><?=lang('copy_trading_benefit_4_title_1')?> <br /><?=lang('copy_trading_benefit_copy_trading_faqs_answer_24_title_2')?></h5>
                                    <p class="card-text line-clamp"><?=lang('copy_trading_benefit_4_description')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-linear-gradient linear-border wow slideInRight" data-wow-delay="300ms">
                            <div class="card-body d-flex gap-3">
                                <div class="icon">
                                    <i class="fa-2x fa-solid fa-microchip mt-1"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-primary"><?=lang('copy_trading_benefit_5_title_1')?> <br /><?=lang('copy_trading_benefit_5_title_2')?></h5>
                                    <p class="card-text line-clamp"><?=lang('copy_trading_benefit_5_description')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-linear-gradient linear-border wow slideInRight" data-wow-delay="600ms">
                            <div class="card-body d-flex gap-3">
                                <div class="icon">
                                    <i class="fa-2x fa-solid fa-user-tie mt-1"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-primary"><?=lang('copy_trading_benefit_6_title_1')?> <br /><?=lang('copy_trading_benefit_6_title_2')?></h5>
                                    <p class="card-text line-clamp"><?=lang('copy_trading_benefit_6_description')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://copytrader.yamarkets.com/portal/registration/provider" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('copy_trading_section_become_master')?></a>
                    <a href="https://copytrader.yamarkets.com/portal/registration/subscription" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="100ms"><?=lang('copy_trading_section_become_follower')?></a>

                </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="title wow fadeInUp"><?=lang('')?>Copy Trading Faqs</h2>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="100ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How does copy trading work?
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>Copy trading allows users to replicate trades made by experienced traders automatically. When a chosen trader executes a trade, it is mirrored in the follower's account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="200ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    What level of control do I have in copy trading?
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>While copy trading automates trade replication, users have control over choosing traders, allocating funds, and stopping or adjusting copied trades.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="300ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Is copy trading suitable for beginners?
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>Yes, copy trading can benefit beginners by allowing them to learn from expert strategies and potentially earn while gaining market insights. However, understanding risks is essential.</p>
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
                <h5 class="text-primary fw-bold">Your Partner in Trading Success</h5>
                <h2 class="title">Register Now for <span class="text-gradient">Easy </span>
                    <div class="d-lg-block text-gradient">Copy Trading</div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms">Open live account</a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms">Open demo account</a>
                </div>
            </div>
        </div>
    </div>
</section>