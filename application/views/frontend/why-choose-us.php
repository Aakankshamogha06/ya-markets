<style>
    .icon>img {
        width: 40px;
        filter: brightness(0.9) invert(.7) sepia(.5) hue-rotate(10deg) saturate(200%);
    }
</style>

<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('trust_heading')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><span class="text-gradient"><?=lang('trust_subheading_1')?> </span><?=lang('trust_subheading_2')?></h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xl-7 mx-auto text-center">
                <h5 class="text-primary wow fadeInDown"><?=lang('reason_to_choose_heading')?></h5>
                <h2 class="title mb-5 wow fadeInUp"><?=lang('reason_to_choose_subheading_1')?>&nbsp;<span class="text-gradient"><?=lang('reason_to_choose_subheading_2')?>
                        </span></h2>
            </div>
        </div>
        <div class="row gy-4 why-choose-us">
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="100ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/expertise-and-reliability.svg" alt="Expertise and Reliability" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary"><?=lang('expertise_reliability_title')?></h5>
                        <p class="mb-0"><?=lang('expertise_reliability_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="200ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/advance-trading-tools.svg" alt="Advance Trading Tools" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary"><?=lang('advance_trading_tools_title')?></h5>
                        <p class="mb-0"><?=lang('advance_trading_tools_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="300ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/secure-environment.svg" alt="Secure Environment" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary"><?=lang('secure_environment_title')?></h5>
                        <p class="mb-0"><?=lang('secure_environment_description')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="400ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/diverse-trading-opportunities.svg" alt="Diverse Trading Opportunities" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary"><?=lang('diverse_trading_opportunities_title')?></h5>
                        <p class="mb-0"><?=lang('diverse_trading_opportunities_description')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-9 col-md-8 text-center text-md-start wow fadeInLeft">
                <h3 class="text-white ps-3 ps-lg-5"><?=lang('cta_heading')?></h3>
            </div>
            <div class="col-lg-3 col-md-4 text-center wow fadeInRight">
                <a href="./contact-us" class="btn btn-outline-primary text-capitalize"><?=lang('cta_button')?></a>
            </div>
        </div>
    </div>
</section>

<?php /*
<section>
    <div class="container">
        <div class="row gy-5">
            <div class="col-12 text-center">
                <h5 class="text-primary wow fadeInDown">TESTIMONIAL</h5>
                <h2 class="title wow fadeInUp"><span class="text-gradient">Our Satisfied Clients</span></h2>
            </div>
            <div class="col-12 testimonial-slider">
                <div class="card me-3 wow fadeInUp">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="img-fluid rounded-md-start rounded h-100 object-fit-cover" alt="Jenny" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-primary">Akash</h5>
                                <p class="card-text">YaMarkets has been my go-to platform for trading. Their innovative
                                    tools have significantly enhanced my trading strategies.</p>
                                <p class="card-text"><small class="text-white opacity-25">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card me-3 wow fadeInUp">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="img-fluid rounded-md-start rounded h-100 object-fit-cover" alt="Jenny" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-primary">Sarah Musel</h5>
                                <p class="card-text">I highly recommend YaMarkets! Their secure environment and diverse
                                    trading opportunities make it an ideal platform for both beginners and experienced
                                    traders.</p>
                                <p class="card-text"><small class="text-white opacity-25">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card me-3 wow fadeInUp">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="img-fluid rounded-md-start rounded h-100 object-fit-cover" alt="Jenny" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-primary">Tarun</h5>
                                <p class="card-text">Trading with YaMarkets has been a game-changer for me. The
                                    user-friendly platform and timely market insights have been crucial in making
                                    informed decisions.</p>
                                <p class="card-text"><small class="text-white opacity-25">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card me-3 wow fadeInUp">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="img-fluid rounded-md-start rounded h-100 object-fit-cover" alt="Jenny" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-primary">Emily Menon</h5>
                                <p class="card-text">YaMarkets' commitment to security and transparent trading practices
                                    is commendable. I'm pleased with their comprehensive approach to supporting traders.
                                </p>
                                <p class="card-text"><small class="text-white opacity-25">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="text-center arrow-btn">
                    <button class="bg-transparent prev-arr wow slideInUp" data-wow-delay="200ms">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 13.2499L1.00006 6.99993L7 0.75" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </button>
                    <button class="bg-transparent ms-2 next-arr wow slideInUp" data-wow-delay="100ms">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0.750127L6.99994 7.00007L1 13.25" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
*/ ?>

<section class="payment-section bg-black">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow slideInLeft"><?=lang('payment_systems_heading')?></h5>
                <h2 class="title wow slideInLeft" data-wow-delay="200ms"><?=lang('payment_systems_subheading_1')?> <span class="text-gradient"><?=lang('payment_systems_subheading_2')?> </span><span class="text-gradient d-lg-block">
                <?=lang('payment_systems_subheading_3')?></span></h2>
            </div>
            <div class="col-lg-6">
                <div class="box-container">
                    <div class="box"></div>
                    <div class="box wow bounceInDown" data-wow-delay="100ms">
                        <img src="<?= base_url() ?>public/web/img/pay-zapp.png" alt="PayZapp" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="200ms">
                        <img src="<?= base_url() ?>public/web/img/visa.png" alt="Visa" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="300ms">
                        <img src="<?= base_url() ?>public/web/img/phonepe.png" alt="Phone Pay" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/web/img/net-banking.png" alt="Net Banking" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="500ms">
                        <img src="<?= base_url() ?>public/web/img/upi.png" alt="UPI" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="600ms">
                        <img src="<?= base_url() ?>public/web/img/mastercard.png" alt="Master Card" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="700ms">
                        <img src="<?= base_url() ?>public/web/img/bank-transfer.png" alt="Bank Transfer" />
                    </div>
                    <div class="box"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('seamless_trading_heading')?></h5>
                <h2 class="title"><?=lang('seamless_trading_subheading_1')?> <span class="text-gradient"><?=lang('seamless_trading_subheading_2')?></span>
                    <div class="d-lg-block text-gradient"><?=lang('seamless_trading_subheading_3')?></div>
                </h2>
            </div>
           <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>