<style>
    .withdraw-card .card img {
        height: 64px;
        object-fit: contain;
    }

    .box-container,
    .box-container .box>img {
        transform: rotate(0);
    }
</style>
<section class="about-hero pt-lg-0">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('about_hero_section_heading')?></h5>
                <h2 class="title mb-3 wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('about_section_title_p1')?> <span class="text-gradient"><?=lang('about_section_title_p2')?></span></h2>
                <p class="title-para wow fadeInLeftBig" data-wow-delay="400ms"><?=lang('about_section_content')?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url() ?>public/web/img/about-yamarkets.jpg" alt="About YaMarkets!" class="img-fluid pe-none" />
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row gy-4 withdraw-card">
            <div class="col-12 text-center">
                <h2 class="title mb-lg-5 wow fadeInUp"><?=lang('about_withdraw_section_heading_1')?> <span class="text-gradient"><?=lang('about_withdraw_section_heading_2')?></span></h2>
            </div>
            <div class="col-md-4">
                <div class="card overflow-hidden bg-transparent text-center wow fadeInLeftBig">
                    <img src="<?= base_url() ?>public/web/website/01_trust.svg" class="card-img-top img-fluid" alt="Trust" />
                    <div class="card-body">
                        <h5 class="card-title text-white fw-semibold mb-3"><?=lang('withdraw_card_title_1')?></h5>
                        <p class="card-text"><?=lang('withdraw_card_content_1')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card overflow-hidden bg-transparent text-center wow fadeInUpBig">
                    <img src="<?= base_url() ?>public/web/website/01_reliabilty.svg" class="card-img-top img-fluid" alt="Reliability" />
                    <div class="card-body">
                        <h5 class="card-title text-white fw-semibold mb-3"><?=lang('withdraw_card_title_2')?></h5>
                        <p class="card-text"><?=lang('withdraw_card_content_2')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card overflow-hidden bg-transparent text-center wow fadeInRightBig">
                    <img src="<?= base_url() ?>public/web/website/01_value.svg" class="card-img-top img-fluid" alt="Value" />
                    <div class="card-body">
                        <h5 class="card-title text-white fw-semibold mb-3"><?=lang('withdraw_card_title_3')?></h5>
                        <p class="card-text"><?=lang('withdraw_card_content_3')?></p>
                    </div>
                </div>
            </div>
            <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>
<?=lang('')?>
<section class="payment-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow slideInLeft"><?=lang('payment_section_title')?></h5>
                <h2 class="title wow slideInLeft" data-wow-delay="200ms"><?=lang('payment_section_subtitle_1')?> <span class="text-gradient"><?=lang('payment_section_subtitle_2')?></span></h2>
            </div>
            <div class="col-lg-6">
                <div class="row gy-4 wrapper-card justify-content-center">
                    <div class="col-md-4">
                        <div class="card p-3 wow bounceInUp" data-wow-delay="100ms">
                            <h6 class="fw-medium text-white mb-3 opacity-75"><?=lang('payment_card_title_1')?></h6>
                            <div class="text-primary lg-font"><?=lang('payment_card_content_1')?></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card p-3 wow bounceInUp" data-wow-delay="300ms">
                            <h6 class="fw-medium text-white mb-3 opacity-75"><?=lang('payment_card_title_2')?></h6>
                            <div class="text-primary lg-font"><?=lang('payment_card_content_2')?></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card p-3 wow bounceInUp" data-wow-delay="200ms">
                            <h6 class="fw-medium text-white mb-3 opacity-75"><?=lang('payment_card_title_3')?></h6>
                            <div class="text-primary lg-font"><?=lang('payment_card_content_3')?></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 wow bounceInUp" data-wow-delay="400ms">
                            <h6 class="fw-medium text-white mb-3 opacity-75"><?=lang('payment_card_title_4')?></h6>
                            <div class="text-primary lg-font"><?=lang('payment_card_title_4')?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="timeline-section">
    <div class="container">
        <div class="row align-items-center gy-4 mb-5">
            <div class="col-md-8">
                <h5 class="text-primary text-uppercase wow slideInLeft" data-wow-delay="100ms"><?=lang('timeline_section_title')?></h5>
                <h2 class="title wow slideInLeft" data-wow-delay="200ms"><?=lang('timeline_section_subtitle_1')?> <span class="text-gradient"><?=lang('timeline_section_subtitle_2')?></span> <?=lang('timeline_section_subtitle_3')?></h2>
            </div>
            <div class="col-md-4">
                <div class="text-end arrow-btn">
                    <button class="bg-transparent prev-arr wow slideInRight" data-wow-delay="200ms">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 13.2499L1.00006 6.99993L7 0.75" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </button>
                    <button class="bg-transparent ms-2 next-arr wow slideInRight" data-wow-delay="100ms">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0.750127L6.99994 7.00007L1 13.25" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-12">
                <div class="timeline-slider">
                    <div>
                        <div class="slider-inn position-relative">
                            <p class="wow fadeInUp text-white" data-wow-delay="100ms"><?=lang('timeline_content_2016')?></p>
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="200ms"><?=lang('timeline_year_2016')?></h5>
                        </div>
                    </div>
                    <div>
                        <div class="slider-inn position-relative">
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="400ms"><?=lang('timeline_year_2017')?></h5>
                            <p class="wow fadeInUp text-white" data-wow-delay="300ms"><?=lang('timeline_content_2017')?></p>
                        </div>
                    </div>
                    <div>
                        <div class="slider-inn position-relative">
                            <p class="wow fadeInUp text-white" data-wow-delay="600ms"><?=lang('timeline_content_2018')?></p>
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="600ms"><?=lang('timeline_year_2018')?></h5>
                        </div>
                        <!-- <?=lang('')?> -->
                    </div>
                    <div>
                        <div class="slider-inn position-relative">
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="800ms"><?=lang('timeline_year_2019')?></h5>
                            <p class="wow fadeInUp text-white" data-wow-delay="900ms"><?=lang('timeline_content_2019')?></p>
                        </div>
                    </div>
                    <div>
                        <div class="slider-inn position-relative">
                            <p class="wow fadeInUp text-white" data-wow-delay="900ms"><?=lang('timeline_content_2020')?></p>
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="800ms"><?=lang('timeline_year_2020')?></h5>
                        </div>
                    </div>
                    <div>
                        <div class="slider-inn position-relative">
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="800ms"><?=lang('timeline_year_2021')?></h5>
                            <p class="wow fadeInUp text-white" data-wow-delay="900ms"><?=lang('timeline_content_2021')?></p>
                        </div>
                    </div>
                    <div>
                        <div class="slider-inn position-relative">
                            <p class="wow fadeInUp text-white" data-wow-delay="900ms"><?=lang('timeline_content_2022')?></p>
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="800ms"><?=lang('timeline_year_2022')?></h5>
                        </div>
                    </div>
                    <div>
                        <div class="slider-inn position-relative">
                            <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block" data-wow-delay="800ms"><?=lang('timeline_year_2023')?></h5>
                            <p class="wow fadeInUp text-white" data-wow-delay="900ms"><?=lang('timeline_content_2023')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vision-section bg-black">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent wow fadeInLeftBig">
                    <div class="overflow-hidden rounded-4">
                        <img src="<?= base_url() ?>public/web/img/goals.jpg" class="card-img-top rounded-4 wow swing" alt="Our goals" />
                    </div>
                    <div class="card-body px-0 mt-3">
                        <h5 class="card-title text-primary"><?=lang('vision_section_mission_titlee')?></h5>
                        <p class="card-text"><?=lang('vision_section_mission_content')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent wow fadeInUpBig col-rev">
                    <div class="card-body px-0 pt-md-0">
                        <h5 class="card-title text-primary"><?=lang('vision_section_vision_title')?></h5>
                        <p class="card-text"><?=lang('vision_section_vision_content')?></p>
                    </div>
                    <div class="overflow-hidden rounded-4 mt-3">
                        <img src="<?= base_url() ?>public/web/img/vision.jpg" class="card-img-top rounded-4 wow swing" alt="Our vision" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent wow fadeInRightBig">
                    <div class="overflow-hidden rounded-4">
                        <img src="<?= base_url() ?>public/web/img/values.jpg" class="card-img-top rounded-4 wow swing" alt="Our values" />
                    </div>
                    <div class="card-body px-0 mt-3">
                        <h5 class="card-title text-primary"><?=lang('vision_section_values_title')?></h5>
                        <p class="card-text"><?=lang('vision_section_values_content')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payment-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow slideInLeft"><?=lang('liquidity_providers_section_title')?></h5>
                <h2 class="title wow slideInLeft" data-wow-delay="200ms"><?=lang('liquidity_providers_section_subtitle_1')?> <span class="text-gradient"></span><?=lang('liquidity_providers_section_subtitle_2')?> <span class="text-gradient d-lg-block"><?=lang('liquidity_providers_section_subtitle_3')?></span></h2>
            </div>
            <div class="col-lg-6">
                <div class="box-container">
                    <div class="box"></div>
                    <!-- <div class="box wow bounceInDown" data-wow-delay="100ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/match-trade.png" alt="PayZapp" />
                    </div> -->
                    <div class="box wow bounceInDown" data-wow-delay="200ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/match-prime.png" alt="Visa" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="300ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/lmax.png" alt="Phone Pay" />
                    </div>
                    <!-- <div class="box wow bounceInDown" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/cfh-claering.png" alt="UPI" />
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('system_section_subtitle_1')?></h5>
                <h2 class="title"><?=lang('')?> <span class="text-gradient"><?=lang('system_section_subtitle_2')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('system_section_subtitle_3')?></div>
                </h2>
            </div>
            <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>