<style>
    .trading-section {
        min-height: calc(100vh - 130px);
        display: flex;
        align-items: center;
        justify-content: center;
        background: url(https://www.yamarkets.com/public/web/img/promotion/background.png) no-repeat;
        background-size: cover;
        background-position: center center;
        position: relative;
        z-index: 0;
    }

    .trading-section>img {
        transform: translateY(50%);
        bottom: 50%;
        max-width: clamp(min(10vw, 20rem), 350px, max(90vw, 55rem));
        z-index: -1;
        animation: bounce 2s ease-in-out infinite alternate;
    }

    .trading-section>img.left-img {
        left: 10px;
    }

    @keyframes bounce {
        from {
            transform: translateY(40%);
        }

        to {
            transform: translateY(50%);
        }
    }

    .trading-section>img.right-img {
        right: 0;
        animation-delay: 2s;
    }

    .trading-section::before {
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        background-image: radial-gradient(100% 50% at 50% 0, rgb(255 207 0 / 44%) 0, rgba(0, 163, 255, 0) 50%, rgba(0, 163, 255, 0) 100%);
        left: 0;
        opacity: 0.5;
        z-index: -1;
    }

    .bg-img {
        background: url(./public/web/img/promotion/dollar-img.jpg) no-repeat center center;
        background-size: cover;
        position: relative;
        z-index: 0;
    }

    .bg-img::before {
        position: absolute;
        content: '';
        inset: 0;
        background: #000;
        opacity: .8;
        z-index: -1;
    }

    input.form-range::-moz-range-thumb {
        background-color: #fac211;
    }

    input.form-range::-webkit-slider-thumb {
        background-color: #fac211;
    }

    input.form-range:focus::-moz-range-thumb {
        box-shadow: none;
        background-color: #fac211;
    }

    input.form-range:focus::-webkit-slider-thumb {
        box-shadow: none;
        background-color: #fac211;
    }

    #exampleModal .form-floating>.form-control:not(:placeholder-shown)~label {
        background-color: #212529;
    }

    @media (max-width: 767px) {
        .egg-img {
            height: 250px;
        }

        .trading-section {
            min-height: auto;
        }
    }
</style>

<section class="position-relative banner trading-section">
    <img src="<?= base_url() ?>/public/web/img/promotion/egg.png" alt="" class="position-absolute img-fluid left-img d-none d-lg-block" />
    <img src="<?= base_url() ?>/public/web/img/promotion/easter-basket.png" alt="" class="position-absolute img-fluid right-img d-none d-lg-block" />
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 d-lg-none text-center">
                <img src="<?= base_url() ?>/public/web/img/promotion/egg1.png" alt="" class="img-fluid egg-img" />
            </div>
            <div class="col-lg-6 offset-lg-3 text-center">
                <!-- <h5 class="text-primary">Trader of the Month</h5> -->
                <h1 class="fw-bold display-3 mb-4 wow fadeInUp">YaMarkets Easter <span class="text-primary">Basket Bonanza</span></h1>
                <p class="mb-4 wow fadeInUp">Celebrate this Easter with the YaMarkets Easter Basket Bonanza – deposit a minimum of $5,000 and receive an extra 10% real equity! T&C apply. </p>
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Deposit Now</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark reward-section position-relative overflow-visible">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 wow fadeInLeft text-center text-lg-start">
                <h2 class="display-6 fw-semibold mb-3"><span class="text-primary">Get 10% Extra Real Equity </span>Instantly in Your Account</h2>
                <p class="text-white">On this beautiful springtime, YaMarkets brings you a special Easter offer to make your Good Friday and Easter extra special. Now Deposit a minimum of $5000 and get an additional 10% Real Equity in your account up to $5000 max equity, which can be withdrawn after 30 days of holding your net deposit. So, This Easter, let your investments bloom!</p>
                <button role="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Deposit Now</button>
            </div>
            <div class="col-lg-5 col-xl-4 offset-lg-1 text-center">
                <img src="<?= base_url() ?>/public/web/img/promotion/real-equity.png" alt="" class="img-fluid rounded-circle wow fadeInRight" />
            </div>
        </div>
    </div>
</section>

<section class="bg-img">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-4 wow fadeInUp">Deposit Now and See <span class="text-gradient">Your Account&nbsp;Grow</span></h2>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="p-3 shadow-lg rounded-3 wow fadeInUp" style="background: #ffffff1c;">
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 fw-semibold fs-5 text-primary">Your deposit</p>
                        <div class="fw-semibold fs-5">$ <span class="value">5000</span></div>
                    </div>
                    <input type="range" min="5000" max="50000" step="1" value="5000" class="w-100 form-range" />
                    <div class="d-flex justify-content-between mb-3">
                        <span>min-$5000</span>
                        <span>max-$50000</span>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <h5 class="text-primary ">You get a Real Equity</h5>
                        <div class="text-end">
                            <span class="text-gradient fw-semibold h5"><span class="bonus">10</span>%</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <h4 class="text-primary ">Your balance</h4>
                        <div class="text-end">
                            <span class="text-gradient fw-semibold h4">$ <span class="final">5500</span></span>
                        </div>
                    </div>
                </div>
                <p class="mt-5 text-primary text-center wow fadeInUp">
                    <small>This offer is only valid on 30<sup>th</sup> March to 1<sup>st</sup> April, 2024.</small>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linear-border contest-terms">
                    <h2 class="title wow fadeInUp text-center mb-5">Terms & Conditions</h2>
                    <ol class="text-white opacity-50 wow fadeInUp">
                        <li>
                            The promotion runs from the 30th of March until the 5th of April 2024.
                        </li>
                        <li>
                            10% Real Equity offer will be applied on min $5000 to max $50000 deposit, capping the limit to $5000 real equity.
                        </li>
                        <li>
                            The 10% Equity will be deposited automatically into the relevant Trading Account with the deposit amount.
                        </li>
                        <li>
                            The Client needs to hold the initial deposit for 30 days in the account in order to withdraw the 10% equity.
                        </li>
                        <li>Withdrawing the net deposit before the 30 day period will result in lapsing the offer.</li>
                        <li>
                            Deposit Target is calculated by accumulated net deposits (deposits – withdrawals) to the Clients directly.
                        </li>
                        <li>The Company reserves the right to unilaterally modify, change or terminate this Bonus Program or any of the terms and conditions included herein, at any time, without the Client’s consent.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>website/contest_submit_data" method="post" class="contact-form">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" class="form-control" id="contest_name" name="contest_name" placeholder="contest_name" value="Easter Offer" />
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
                                <input type="tel" class="form-control" id="mobile_no" value="+91 " name="mobile_no" maxlength="14" placeholder="Enter mobile no." required />
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
    let elem = document.querySelector('input[type="range"]');
    let valueElement = document.querySelector('.value');
    let finalElement = document.querySelector('.final');
    let bonusElement = document.querySelector('.bonus');

    let rangeValue = function() {
        let newValue = elem.value;
        valueElement.textContent = newValue;
        let bonus = calculateBonus(newValue);
        bonusElement.textContent = bonus;
        let finalValue = calculateFinalValue(newValue, bonus);
        finalElement.textContent = finalValue;
    }

    function calculateBonus(amount) {
        return 10; // Assuming a fixed bonus of 10%
    }

    function calculateFinalValue(amount, bonus) {
        return parseInt(amount) + (parseInt(amount) * bonus / 100);
    }

    elem.addEventListener("input", rangeValue);
</script>