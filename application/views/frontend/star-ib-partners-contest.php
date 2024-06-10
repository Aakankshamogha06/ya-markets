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
                    <span class="d-lg-block"><?=lang('')?>TOP 10 Partners will be qualified for </span>
                    <span class="text-gradient">Ib Partners Contest and for Gala Dinner</span>
                </h2>
                <p class="wow fadeInUp">International Yearly Gala Dinner with Top 40 Stars Partners </p>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark crypto-card wow fadeInUp" data-wow-delay="200ms" data-attr="1">
                    <div class="card-body p-xl-4">
                        <i class="fa-solid fa-user mb-4 fa-2x text-primary"></i>
                        <h5 class="card-title text-primary mb-3">New Active clients</h5>
                        <p class="card-text mb-2">
                            <span class="fw-semibold">Eligibility: </span>
                            <span>50</span>
                        </p>
                        <p class="card-text">
                            <span class="fw-semibold">Rewards: </span>
                            <span>$10 per client</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark crypto-card wow fadeInUp" data-wow-delay="400ms" data-attr="2">
                    <div class="card-body p-xl-4">
                        <i class="fa-solid fa-dollar-sign mb-4 fa-2x text-primary"></i>
                        <h5 class="card-title text-primary mb-3">Net Deposit</h5>
                        <p class="card-text mb-2">
                            <span class="fw-semibold">Eligibility: </span>
                            <span>$25000</span>
                        </p>
                        <p class="card-text">
                            <span class="fw-semibold">Rewards: </span>
                            <span>upto $10,000 cash prize</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark crypto-card wow fadeInUp" data-wow-delay="600ms" data-attr="3">
                    <div class="card-body p-xl-4">
                        <i class="fa-solid fa-money-bill-trend-up mb-4 fa-2x text-primary"></i>
                        <h5 class="card-title text-primary mb-3">Trading Volume</h5>
                        <p class="card-text mb-2">
                            <span class="fw-semibold">Eligibility: </span>
                            <span>500 lots</span>
                        </p>
                        <p class="card-text">
                            <span class="fw-semibold">Rewards: </span>
                            <span>0.50 cent</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <p class="mt-4 wow fadeInUp">Extra IB Salary for Top 10 Quarterly qualified IB Partners - $500 until Next quarter.</p>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp">Join Now</a>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
    <div class="container">
        <div class="row gx-xl-5 row-gap-4">
            <div class="col-12 text-center">
                <h2 class="title mb-3 wow fadeInUp">How to <span class="text-gradient">Join</span></h2>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="100ms">
                    <img src="<?= base_url() ?>public/web/img/join-before.jpg" class="card-img-top" alt="Join before the 7th business day of a given month" />
                    <div class="card-body text-center">
                        <p class="card-title text-gradient">Open your account and complete your KYC</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="400ms">
                    <img src="<?= base_url() ?>public/web/img/balance-of-500-USD.jpg" class="card-img-top" alt="Have a minimum account balance of 500 USD" />
                    <div class="card-body text-center">
                        <p class="card-title text-gradient">Share your Referral Link and get new clients.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="600ms">
                    <img src="<?= base_url() ?>public/web/img/have-an-active-live-premium-account.jpg" class="card-img-top" alt="Have a Live Premium Account" />
                    <div class="card-body text-center">
                        <p class="card-title text-gradient">Join the contest and compete for the top position.</p>
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
                <h3 class="text-primary wow fadeInLeft">About Gala Dinner</h3>
                <p class="mb-2 wow fadeInLeft" data-wow-delay="100ms">Gala Dinner will be organised in between 10th Jan 2025 - 26th Jan 2025</p>
                <p class="mb-5 wow fadeInLeft" data-wow-delay="300ms">Don't miss this unforgettable event. Participate in the Star IB Content, rise to the Top 40 Partners, and join us for an extraordinary evening filled with lively celebrations, exclusive networking opportunities, and moments that will stay with you for a lifetime.</p>
                <h4 class="text-primary wow fadeInLeft">Benefits</h4>
                <ol class="list-unstyled wow fadeInLeft" data-wow-delay="200ms">
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">Special Awards</span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">2 nights 3 days trip</span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">Surprise Gifts</span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">Gala Dinner Night</span>
                    </li>
                </ol>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp">Join Now</a>
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
                    <h2 class="title wow fadeInUp text-center mb-5" data-wow-delay="100ms">Terms & Conditions</h2>
                    <ol class="text-white opacity-75 wow fadeInUp">
                       <li>Starts from 1st January 2024 to 31st March 2024.</li>

<li>ECN account type is not valid fot this contest.</li>
<li>Sub IB Activation is minimum $5000 net business in Quarterly</li>

<li>Cash prize is based on minimum 2.5 % of Total Net deposit value.</li>

<li>IB Salary for Top 10 Quarterly qualified IB Partners - $500 until Next quarter.</li>

<li>Participants shall be eligible to redeem the Prize based on the Deposit Target and Volume Target accumulated based on net deposit and trading volume scores, as deposited and traded by their directly introduced clients.</li>

<li>Deposit Target is calculated by accumulated net deposits (deposits – withdrawals) to the Clients directly introduced by the Affiliate only, towards the Deposit Target.
Affiliate can monitor his Deposit and Volume Targets on his IB CRM area.</li>

<li>The Affiliate’s own accounts are excluded from the YaMarkets IB promotion, therefore deposits and volume traded on Affiliate’s own trading account shall not be counted towards the Deposit and Volume Targets.</li>

<li>The Deposits and trading volume of Clients introduced by sub-Affiliates of the Affiliate shall not be counted towards the Deposit and Volume Targets.</li>

<li>The positions opened by Clients introduced by the Affiliate, prior his registration for the YaMarkets IB Contest shall not be counted towards the Affiliate’s Volume Target.</li>

<li>Only forex, gold, silver and cryptocurrency positions traded by Clients directly introduced by the Affiliate shall be counted towards the Affiliate’s Volume Target.</li>

<li>Only active client accounts during the contest period will be considered for the calculation of volume.</li>

<li>Only closed deals(trades) are taken into calculation. Open trades will not contribute in volume calculation.</li>

<li>TOP 10 Partners every quater will be qualified for IB Partners Contest and for Gala Dinner Contest subject to satisfying deposit and trading volume requirements within the specified time period.</li>

<li>At the end of the contest Top 40 partners will be invited to International Gala Dinner  </li>
<li>Gala Dinner will be organize in between 10th jan 2025 - 26th jan 2025</li>

<li>Date of announcement of the Contest results: 15th April 2024.</li>

<li>The Company reserves the right, at its absolute discretion, to unilaterally modify, change orterminate the YaMarkets IB Contest 2024 or any of the Terms and Conditions included herein,at any time without the Affiliate’s consent.</li>
                        
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
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email" required />
                                <label for="email">Enter email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone"  name="mobile_no" value="+91 " maxlength="10" placeholder="Enter mobile no." required />
                                <label for="phone">Enter mobile no.</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary px-5 py-2">Submit</button>
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