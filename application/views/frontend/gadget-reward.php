

<style>
    @media (min-width: 1200px) {
        .font-adj p.h1 {
            font-size: 4rem;
            /* line-height: 0.7; */
            margin-bottom: 1rem !important;
        }

        .font-adj p.h1>span>small {
            font-size: 2rem;
        }

        .font-adj p.h2 {
            font-size: 2.5rem;
        }
    }

    .modal-content {
        background: #0d0e11;
    }

    .contact-form .form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label,
    .iti.iti--allow-dropdown~label {
        background-color: #0d0e11;
    }

    .contact-form textarea.form-control {
        height: auto;
    }

    .crypto-card::before {
        z-index: 0;
        right: 10px;
        top: 0;
        color: #212529;
    }

    /* .usd {
        position: relative;
        top: -40px;
        right: 12px;
    } */

    .bg-img {
        background: url(<?= base_url() ?>public/web/img/promotion/bg-img.jpg);
    }

    .user-none {
        user-select: none;
        transform: scaleY(0.9);
    }

    .user-none:first-child {
        left: -70px;
    }

    .user-none:last-child {
        right: -70px;
    }

    .float {
        animation-name: ani-float;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
    }

    @keyframes ani-float {
        0% {
            transform: translate(0, 0px);
        }

        50% {
            transform: translate(0, 15px) scale(1.02);
        }

        100% {
            transform: translate(0, -0px);
        }
    }
</style>

<section class="position-relative overflow-hidden" style="background:url(<?= base_url() ?>public/web/img/promotion/iphone-banner.png) no-repeat;">
    <div class="container position-relative z-1">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-5 text-center text-lg-start">
                <h5 class="text-primary mb-3 fw-bold text-uppercase wow fadeInDown">Welcome to YaMarkets Gadget Reward!</h5>
                <h2 class="title mb-3 wow fadeInUp">iPhone <span class="text-gradient">15 Pro</span></h2>
                <p class="mb-4 wow fadeInup">At YaMarkets, we understand the importance of staying connected and up-to-date with the latest technology trends. That's why we're offering the sleek and powerful iPhone 15 Pro as the ultimate reward for our Gadget Reward Program.
                </p>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp">Join Now</a>
            </div>
            <div class="col-lg-6 offset-lg-1 text-center">
                <figure class="mb-0 mx-auto">
                    <img src="<?= base_url() ?>public/web/img/promotion/iphone15.png" alt="Stars IB Partners Contest Yearly" class="img-fluid float" style="height:400px" />
                </figure>
            </div>
        </div>
    </div>

    <svg id="wave" width="100%" height="100%" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" overflow="auto" shape-rendering="auto">
        <defs>
            <path id="wavepath" d="M 0 2000 0 500 Q 62.5 315 125 500 t 125 0 125 0 125 0 125 0 125 0 125 0 125 0 125 0 125 0 125 0  v1000 z" />
        </defs>
        <g>
            <use xlink:href="#wavepath" y="125" fill="#121315">
            </use>
        </g>
    </svg>
</section>

<section style="background-color: #121315;">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-3 wow fadeInUp">
                    <span class="text-gradient">Reward</span>
                </h2>
                <p class="wow fadeInUp">Are you passionate about trading and always on the lookout for the latest gadgets? Look no further! YaMarkets is thrilled to introduce our exclusive Gadget Reward Program, designed to reward our valued traders with exciting gadgets while they pursue their trading goals.</p>
            </div>
            <div class="col-lg-10 offset-lg-1 position-relative z-0 font-adj">
                <div class="position-absolute d-none d-lg-block w-100 opacity-25 user-none z-n1 top-0 p-3 bg-img border-0 rounded shadow">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <!-- <h3 class="text-dark">Criteria</h3> -->
                            <h2 class=""></h2>
                            <p class="mb-2 pt-5 mt-5 h1">
                                <span class="text-gradient">30,000 <small>USD</small><br /><small>net deposit</small></span>
                            </p>
                            <p class="h3 text-black">
                                <span>300 lots</span>
                            </p>
                            <p class="mb-0 text-black">
                                <small>T&C</small>
                            </p>
                        </div>
                        <div class="col-lg-4 offset-lg-1 text-center text-lg-end">
                            <!-- <h3 class="text-dark text-center">Reward</h3> -->
                            <img src="<?= base_url() ?>public/web/img/promotion/iPhones-15.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-img border-0 rounded shadow">
                    <div class="row  gy-4">
                        <div class="col-lg-6  text-center">
                            <!-- <h3 class="text-dark">Criteria</h3> -->
                            <h2 class=""></h2>
                            <p class="mb-2 pt-lg-5 mt-lg-5 h1">
                                <span class="text-gradient">30,000 <small class="usd">USD</small><br /><small>net deposit</small></span>
                            </p>
                            <p class="h3 text-black">
                                <span>300 lots</span>
                            </p>
                            <p class="mb-0 text-black">
                                <small>T&C</small>
                            </p>
                        </div>
                        <div class="col-lg-4 offset-lg-1 text-center text-lg-end">
                            <!-- <h3 class="text-dark text-center">Reward</h3> -->
                            <img src="<?= base_url() ?>public/web/img/promotion/iPhones-15.png" alt="" class="img-fluid p-3" />
                        </div>
                    </div>
                </div>
                <div class="position-absolute d-none d-lg-block w-100 opacity-25 user-none z-n1 top-0 p-3 bg-img border-0 rounded shadow">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <!-- <h3 class="text-dark">Criteria</h3> -->
                            <h2 class=""></h2>
                            <p class="mb-2 pt-5 mt-5 h1">
                                <span class="text-gradient">30,000 <small>USD</small><br /><small>net deposit</small></span>
                            </p>
                            <p class="h3 text-black">
                                <span>300 lots</span>
                            </p>
                            <p class="mb-0 text-black">
                                <small>T&C</small>
                            </p>
                        </div>
                        <div class="col-lg-4 offset-lg-1 text-center text-lg-end">
                            <!-- <h3 class="text-dark text-center">Reward</h3> -->
                            <img src="<?= base_url() ?>public/web/img/promotion/iphone-15-pro.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp">Join Now</a>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
    <div class="container">
        <div class="row gx-xl-5 row-gap-4">
            <div class="col-12 text-center">
                <h2 class="title mb-3 wow fadeInUp">How to <span class="text-gradient">Participate</span></h2>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="100ms">
                    <img src="https://www.yamarkets.com/public/web/img/join-before.jpg" class="card-img-top" alt="Join before the 7th business day of a given month" />
                    <div class="card-body text-center">
                        <p class="card-title text-white"><span class="text-gradient">Sign Up:</span> If you're not already a YaMarkets client, sign up for an account.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="400ms">
                    <img src="https://www.yamarkets.com/public/web/img/balance-of-500-USD.jpg" class="card-img-top" alt="Have a minimum account balance of 500 USD" />
                    <div class="card-body text-center">
                        <p class="card-title text-white"><span class="text-gradient">Deposit Funds:</span> Make a net deposit of 30,000 USD or equivalent into your trading account.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark h-100 wow fadeInUpBig" data-wow-delay="600ms">
                    <img src="https://www.yamarkets.com/public/web/img/have-an-active-live-premium-account.jpg" class="card-img-top" alt="Have a Live Premium Account" />
                    <div class="card-body text-center">
                        <p class="card-title text-white"><span class="text-gradient">Claim Your Reward:</span> Once you meet the contest requirements, claim your iPhone 15 Pro reward and enjoy your new gadget!</p>
                    </div>
                </div>
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
                        <li>Starts from 1st Febuary 2024 to 29th Febuary 2024.</li>
                        <li>ECN account type is not valid fot this contest.</li>
                        <li>Make a net deposit of 30,000 USD or equivalent in your trading account and complete a trading volume of 300 lots.</li>
                        <li>Deposit Target is calculated by accumulated net deposits (deposits – withdrawals) to the Clients directly introduced by the Affiliate only, towards the Deposit Target.</li>
                        <li>Affiliate can monitor his Deposit and Volume Targets on his IB CRM area.</li>
                        <li>The Affiliate’s own accounts are excluded from the YaMarkets IB promotion, therefore deposits and volume traded on Affiliate’s own trading account shall not be counted towards the Deposit and Volume Targets.</li>
                        <li>The Deposits and trading volume of Clients introduced by sub-Affiliates of the Affiliate shall not be counted towards the Deposit and Volume Targets.</li>
                        <li>Only forex, gold, silver and cryptocurrency positions traded by Clients directly introduced by the Affiliate shall be counted towards the Affiliate’s Volume Target.</li>
                        <li>Only active client accounts during the contest period will be considered for the calculation of volume.</li>
                        <li>Only closed deals(trades) are taken into calculation. Open trades will not contribute in volume calculation. </li>
                        <li>The Company reserves the right to unilaterally modify, change or terminate this Bonus Program or any of the terms and conditions included herein, at any time, without the Client’s consent.</li>
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
                <form action="<?= base_url('website/gadget_reward_submit_data'); ?>" method="post" class="contact-form">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
                                <label for="email">Enter email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone" name="mobile" value="+91 " maxlength="12" placeholder="Enter mobile no." required />
                                <label for="phone">Enter mobile no.</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="location" name="location" placeholder="Name" required />
                                <label for="name">Location</label>
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