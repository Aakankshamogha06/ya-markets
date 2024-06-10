<style>
    .modal-content {
        background: #0d0e11;
    }

    .ty-10 {
        transform: translateY(10px);
    }

    .table> :not(caption)>*>* {
        --bs-table-bg: transparent;
        border-color: #fac21133;
        color: #fff;
    }

    .contact-form .form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label,
    .iti.iti--allow-dropdown~label {
        background-color: #0d0e11;
    }

    .contact-form textarea.form-control {
        height: auto;
    }

    .border-anim {
        position: relative;
        width: 450px;
        height: 450px;
    }

    .border-anim::before {
        position: absolute;
        content: '';
        inset: 0;
        border: 3px dashed #4cbea4;
        border-right-color: #fac211;
        border-left-color: #fac211;
        border-radius: 50%;
        animation: round 30s 0s infinite linear;
    }

    .border-anim>img {
        padding: 1rem;
    }

    @keyframes round {
        50% {
            transform: rotate(360deg);
        }
    }

    .crypto-card::before {
        z-index: 0;
        right: 10px;
        top: 0;
        color: #212529;
    }

    @media (max-width: 767px) {
        .border-anim {
            width: 300px;
            height: 300px;
        }
    }
</style>

<section class="position-relative overflow-hidden" style="background:url(<?= base_url() ?>public/web/img/ib.png) no-repeat;">
    <div class="container position-relative z-1">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-5 text-center text-lg-start">
                <h5 class="text-primary mb-3 fw-bold text-uppercase wow fadeInDown"><?=lang('star_ib_partners_stars_ib_contest_title')?></h5>
                <h2 class="title mb-3 wow fadeInUp"><?=lang('star_ib_partners_stars_ib_contest_subtitle_1')?> <span class="text-gradient"><?=lang('star_ib_partners_stars_ib_contest_subtitle_2')?></span></h2>
                <p class="mb-4 wow fadeInup"><?=lang('star_ib_partners_stars_ib_contest_description')?></p>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp"><?=lang('star_ib_partners_stars_ib_contest_join_button')?></a>
            </div>
            <div class="col-lg-6 offset-lg-1 text-center">
                <figure class="mb-0 border-anim mx-auto">
                    <img src="<?= base_url() ?>public/web/img/contest-winner.jpg" alt="Stars IB Partners Contest Yearly" class="img-fluid rounded-circle" />
                </figure>
            </div>
        </div>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 190" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path style="transform:translate(0, 0px); opacity:1" fill="#121315" d="M0,19L240,38C480,57,960,95,1440,120.3C1920,146,2400,158,2880,161.5C3360,165,3840,158,4320,136.2C4800,114,5280,76,5760,79.2C6240,82,6720,127,7200,145.7C7680,165,8160,158,8640,133C9120,108,9600,63,10080,38C10560,13,11040,6,11520,12.7C12000,19,12480,38,12960,50.7C13440,63,13920,70,14400,82.3C14880,95,15360,114,15840,117.2C16320,120,16800,108,17280,101.3C17760,95,18240,95,18720,101.3C19200,108,19680,120,20160,110.8C20640,101,21120,70,21600,53.8C22080,38,22560,38,23040,50.7C23520,63,24000,89,24480,91.8C24960,95,25440,76,25920,79.2C26400,82,26880,108,27360,120.3C27840,133,28320,133,28800,133C29280,133,29760,133,30240,136.2C30720,139,31200,146,31680,133C32160,120,32640,89,33120,91.8C33600,95,34080,133,34320,152L34560,171L34560,190L34320,190C34080,190,33600,190,33120,190C32640,190,32160,190,31680,190C31200,190,30720,190,30240,190C29760,190,29280,190,28800,190C28320,190,27840,190,27360,190C26880,190,26400,190,25920,190C25440,190,24960,190,24480,190C24000,190,23520,190,23040,190C22560,190,22080,190,21600,190C21120,190,20640,190,20160,190C19680,190,19200,190,18720,190C18240,190,17760,190,17280,190C16800,190,16320,190,15840,190C15360,190,14880,190,14400,190C13920,190,13440,190,12960,190C12480,190,12000,190,11520,190C11040,190,10560,190,10080,190C9600,190,9120,190,8640,190C8160,190,7680,190,7200,190C6720,190,6240,190,5760,190C5280,190,4800,190,4320,190C3840,190,3360,190,2880,190C2400,190,1920,190,1440,190C960,190,480,190,240,190L0,190Z"></path>
    </svg>
</section>

<section style="background-color: #121315;">
    <div class="container">
        <div class="row gy-4 gx-xl-5 align-items-center">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="mb-3 wow fadeInUp">
                    <span class="d-lg-block"><?=lang('star_ib_partners_top_10_partners_qualify_title')?> </span>
                    <span class="text-gradient"><?=lang('star_ib_partners_top_10_partners_qualify_subtitle')?></span>
                </h2>
                <p class="wow fadeInUp"><?=lang('star_ib_partners_top_10_partners_qualify_description')?> </p>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark crypto-card wow fadeInUp" data-wow-delay="200ms" data-attr="1">
                    <div class="card-body p-xl-4">
                        <i class="fa-solid fa-user mb-4 fa-2x text-primary"></i>
                        <h5 class="card-title text-primary mb-3"><?=lang('star_ib_partners_new_active_clients')?></h5>
                        <p class="card-text mb-2">
                            <span class="fw-semibold"><?=lang('star_ib_partners_new_active_clients_eligibility')?> </span>
                            <span>50</span>
                        </p>
                        <p class="card-text">
                            <span class="fw-semibold"><?=lang('star_ib_partners_new_active_clients_reward')?> </span>
                            <span><?=lang('star_ib_partners_new_active_clients_reward_value')?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark crypto-card wow fadeInUp" data-wow-delay="400ms" data-attr="2">
                    <div class="card-body p-xl-4">
                        <i class="fa-solid fa-dollar-sign mb-4 fa-2x text-primary"></i>
                        <h5 class="card-title text-primary mb-3"><?=lang('star_ib_partners_net_deposit')?></h5>
                        <p class="card-text mb-2">
                            <span class="fw-semibold"><?=lang('star_ib_partners_net_deposit_eligibility')?> </span>
                            <span>$25000</span>
                        </p>
                        <p class="card-text">
                            <span class="fw-semibold"><?=lang('star_ib_partners_net_deposit_reward')?> </span>
                            <span><?=lang('star_ib_partners_net_deposit_reward_value')?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark crypto-card wow fadeInUp" data-wow-delay="600ms" data-attr="3">
                    <div class="card-body p-xl-4">
                        <i class="fa-solid fa-money-bill-trend-up mb-4 fa-2x text-primary"></i>
                        <h5 class="card-title text-primary mb-3"><?=lang('star_ib_partners_trading_volume')?></h5>
                        <p class="card-text mb-2">
                            <span class="fw-semibold"><?=lang('star_ib_partners_trading_volume_eligibility')?> </span>
                            <span>500 lots</span>
                        </p>
                        <p class="card-text">
                            <span class="fw-semibold"><?=lang('star_ib_partners_trading_volume_reward')?> </span>
                            <span>0.50 cent</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <p class="mt-4 wow fadeInUp"><?=lang('star_ib_partners_top_10_partners_qualify_extra')?></p>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp"><?=lang('star_ib_partners_stars_ib_contest_join_button')?></a>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
    <div class="container">
        <div class="row gx-xl-5 row-gap-4">
            <div class="col-12 text-center">
                <h2 class="title mb-3 wow fadeInUp"><?=lang('star_ib_partners_how_to_join_title')?> <span class="text-gradient"><?=lang('star_ib_partners_how_to_join_subtitle')?></span></h2>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="100ms">
                    <img src="<?= base_url() ?>public/web/img/join-before.jpg" class="card-img-top" alt="Join before the 7th business day of a given month" />
                    <div class="card-body text-center">
                        <p class="card-title text-gradient"><?=lang('star_ib_partners_open_account_kyc')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="400ms">
                    <img src="<?= base_url() ?>public/web/img/balance-of-500-USD.jpg" class="card-img-top" alt="Have a minimum account balance of 500 USD" />
                    <div class="card-body text-center">
                        <p class="card-title text-gradient"><?=lang('star_ib_partners_share_referral_link')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="600ms">
                    <img src="<?= base_url() ?>public/web/img/have-an-active-live-premium-account.jpg" class="card-img-top" alt="Have a Live Premium Account" />
                    <div class="card-body text-center">
                        <p class="card-title text-gradient"><?=lang('star_ib_partners_have_live_premium_account')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row align-items-center gy-4 col-rev">
            <div class="col-md-6">
                <h3 class="text-primary wow fadeInLeft"><?=lang('star_ib_partners_about_gala_dinner_title')?></h3>
                <p class="mb-2 wow fadeInLeft" data-wow-delay="100ms"><?=lang('star_ib_partners_gala_dinner_date')?></p>
                <p class="mb-5 wow fadeInLeft" data-wow-delay="300ms"><?=lang('star_ib_partners_gala_dinner_description')?></p>
                <h4 class="text-primary wow fadeInLeft"><?=lang('star_ib_partners_benefits_title')?></h4>
                <ol class="list-unstyled wow fadeInLeft" data-wow-delay="200ms">
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50"><?=lang('star_ib_partners_special_awards')?></span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50"><?=lang('star_ib_partners_trip_duration')?></span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50"><?=lang('star_ib_partners_surprise_gifts')?></span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50"><?=lang('star_ib_partners_gala_dinner_night')?></span>
                    </li>
                </ol>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp"><?=lang('star_ib_partners_stars_ib_contest_join_button')?></a>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <img src="<?= base_url() ?>public/web/img/gala-dinner.jpg" alt="" class="img-fluid rounded wow fadeInRight" />
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linear-border contest-terms">
                    <h2 class="title wow fadeInUp text-center mb-5" data-wow-delay="100ms"><?=lang('star_ib_partners_terms_conditions_title')?></h2>
                    <ol class="text-white opacity-75 wow fadeInUp">
                       <li><?=lang('star_ib_partners_terms_conditions_subtitle')?></li>

<li><?=lang('star_ib_partners_ecn_account_not_valid')?></li>
<li><?=lang('star_ib_partners_sub_ib_activation')?></li>
<li><?=lang('star_ib_partners_cash_prize_minimum')?></li>
<li><?=lang('star_ib_partners_ib_salary')?></li>
<li><?=lang('star_ib_partners_eligible_to_redeem')?></li>
<li><?=lang('star_ib_partners_deposit_target_calculation')?></li>
<li><?=lang('star_ib_partners_excluded_accounts')?></li>
<li><?=lang('star_ib_partners_deposits_volume_clients')?></li>
<li><?=lang('star_ib_partners_positions_opened_prior')?></li>
<li><?=lang('star_ib_partners_eligible_traded_positions')?></li>
<li><?=lang('star_ib_partners_active_client_accounts')?></li>
<li><?=lang('star_ib_partners_closed_deals_calculation')?></li>
<li><?=lang('star_ib_partners_top_10_partners_qualification')?></li>
<li><?=lang('star_ib_partners_top_40_gala_dinner')?></li>
<li><?=lang('star_ib_partners_gala_dinner_date')?></li>
<li><?=lang('star_ib_partners_contest_results_announcement')?></li>
<li><?=lang('star_ib_partners_company_right_to_modify')?></li>
                  
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('website/contest_submit_data'); ?>" method="post" class="contact-form">
               
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
               <input type="hidden" class="form-control" id="contest_name" name="contest_name" placeholder="contest_name" value="Star IB Partners Contest" />
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Name" required />
                                <label for="name"><?=lang('star_ib_partners_name_placeholder')?></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email" required />
                                <label for="email"><?=lang('star_ib_partners_enter_email_placeholder')?></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone"  name="mobile_no" value="+91 " maxlength="10" placeholder="Enter mobile no." required />
                                <label for="phone"><?=lang('star_ib_partners_enter_mobile_placeholder')?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                                <label for="message"><?=lang('star_ib_partners_message_placeholder')?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary px-5 py-2"><?=lang('star_ib_partners_submit_button')?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let phone = document.querySelector("#phone");
    window.intlTelInput(phone, {
        autoPlaceholder: "off",
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "js/utils.js",
    });
</script>