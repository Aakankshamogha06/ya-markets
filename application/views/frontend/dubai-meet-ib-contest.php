<style>
    @media (min-width: 992px) {
        #home {
            height: calc(100vh - 130px);
        }

        .flex-grow {
            flex: 1 1 48%
        }
    }

    .hero-title {
        font-size: calc(1.775rem + 1.5vw);
    }

    #home {
        background: url(./public/web/img/promotion/uae.png);
        background-repeat: repeat-x;
        background-size: 35%;
        background-position: bottom;
    }

    #home::before {
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        background: radial-gradient(rgba(0, 0, 0, .5), rgba(202, 155, 17, .5));
        left: 0;
        opacity: 0.5;
        z-index: 0;
    }

    #exampleModal .form-floating>.form-control:not(:placeholder-shown)~label {
        background-color: #212529;
    }
</style>

<section id="home" class="d-flex align-items-center position-relative">
    <div class="container position-relative z-1">
        <div class="row g-5 align-items-center">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1 class="hero-title mb-3 wow fadeInUp">
                    <span class="text-primary">Dubai Meet</span>
                </h1>
                <h4 class="wow fadeInUp mb-3" data-wow-delay="100ms">IB Contest</h4>
                <p class="mb-4 wow fadeInUp" data-wow-delay="200ms">Catch your dream of visiting Dubai with the YaMarkets IB Contest. Participate as an IB, increase your chances of winning by increasing your net deposit and get invited to the Expo in Dubai with YaMarkets.</p>
                <button role="button" data-wow-delay="300ms" class="wow fadeInUp btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Participate Now</button>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark reward-section position-relative overflow-visible">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-4 wow fadeInUp">Get Deposits and Visit Dubai with Us</h2>
            </div>
            <div class="col-lg-5 col-xl-4">
                <img src="<?= base_url() ?>/public/web/img/promotion/dubai rewards.png" alt="" class="img-fluid rounded wow fadeInLeft" />
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="position-sticky top-50">
                    <div class="shadow mb-5 p-3 rounded wow fadeInUp" style="background-color: #2e2f31;">
                        <h2 class="display-6 fw-semibold text-primary mb-3">Eligibility</h2>
                        <p class="text-white mb-2">Net = $20,000</p>
                        <p class="text-white mb-2">Lots = 300</p>
                        <p class="text-white mb-0">Duration = 3 Nights 4 Days</p>
                        <button role="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Participate Now</button>
                    </div>
                    <p class="mb-0 text-primary">
                        <small>Winner can Redeem cash rewards against Trip package.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="wow fadeInLeft" data-wow-delay="100ms">About</h5>
                <h2 class="title text-primary mb-3 wow fadeInLeft" data-wow-delay="200ms">YaMarkets IB Partnership
                    Program</h2>
                <p class="mb-4 wow fadeInLeft" data-wow-delay="300ms">Expand your income potential or develop your
                    business through YaMarkets’ partnership programs. With two partnership programs, multilingual
                    promotional materials, and generous commissions, this is the perfect opportunity to accelerate your
                    earnings as an YaMarkets partner.</p>
                <div class="d-flex flex-wrap gap-4">
                    <div class="d-flex gap-2 align-items-center flex-grow wow fadeInUp" data-wow-delay="400ms">
                        <i class="text-primary fa-solid fa-check-double"></i> <span>Earn Up to $25 Per Lot on Your
                            Referred Clients</span>
                    </div>
                    <div class="d-flex gap-2 align-items-center flex-grow wow fadeInUp" data-wow-delay="500ms">
                        <i class="text-primary fa-solid fa-check-double"></i> <span>Earn an Unlimited 10% on Your
                            Sub-Partners</span>
                    </div>
                    <div class="d-flex gap-2 align-items-center flex-grow wow fadeInUp" data-wow-delay="600ms">
                        <i class="text-primary fa-solid fa-check-double"></i> <span>Daily Commission Withdrawal</span>
                    </div>
                    <div class="d-flex gap-2 align-items-center flex-grow wow fadeInUp" data-wow-delay="700ms">
                        <i class="text-primary fa-solid fa-check-double"></i> <span>Personal Account Manager</span>
                    </div>
                    <div class="d-flex gap-2 align-items-center flex-grow wow fadeInUp" data-wow-delay="800ms">
                        <i class="text-primary fa-solid fa-check-double"></i> <span>Regional Partner with Office</span>
                    </div>
                </div>
                <button role="button" data-wow-delay="300ms" class="wow fadeInUp btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Participate Now</button>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <img src="<?= base_url() ?>/public/web/img/promotion/elite-ib-program.png" alt="" class="img-fluid wow slideInRight" />
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
                            The Contest starts from 1st April 2024 to 30th April 2024.
                        </li>
                        <li>
                            ECN account type is not valid fot this contest.
                        </li>
                        <li>
                            Make a net deposit of 20,000 USD or equivalent in your trading account and complete a trading volume of 300 lots.
                        </li>
                        <li>
                            The winners will be invited to the expo in Dubai with YaMarkets for the timeperiod of the expo which will be in May.
                        </li>
                        <li>
                            Deposit Target is calculated by accumulated net deposits (deposits – withdrawals) to the Clients directly introduced by the Affiliate only, towards the Deposit Target.
                        </li>
                        <li>
                            Affiliate can monitor his Deposit and Volume Targets on his IB CRM area.
                        </li>
                        <li>
                            The Affiliate’s own accounts are excluded from the YaMarkets IB promotion, therefore deposits and volume traded on Affiliate’s own trading account shall not be counted towards the Deposit and Volume Targets.
                        </li>
                        <li>
                            The Deposits and trading volume of Clients introduced by sub-Affiliates of the Affiliate shall not be counted towards the Deposit and Volume Targets.
                        </li>
                        <li>
                            Only forex, gold, silver and cryptocurrency positions traded by Clients directly introduced by the Affiliate shall be counted towards the Affiliate’s Volume Target.
                        </li>
                        <li>Only active client accounts during the contest period will be considered for the calculation of volume.</li>
                        <li>Only closed deals(trades) are taken into calculation. Open trades will not contribute in volume calculation.</li>
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
                <form action=<?= base_url('website/contest_submit_data'); ?> method="post" class="contact-form">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" class="form-control" id="contest_name" name="contest_name" placeholder="contest_name" value="Dubai Meet IB Content" />
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
                                <input type="tel" class="form-control" id="mobile_no" name="mobile_no" value="+91 " maxlength="14" placeholder="Enter mobile no." required />
                                <label for="mobile_no">Enter mobile no.</label>
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