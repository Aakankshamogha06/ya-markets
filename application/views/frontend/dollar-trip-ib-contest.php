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



    .table.table-dark th {

        --bs-table-color: #fac211;

    }



    .card {

        --bs-border-width: 0;

    }



    @media (min-width: 1024px) {

        .arrow>.card {
            z-index: 0;
        }

        .arrow>.card::before {

            content: '';

            position: absolute;

            inset: 0;

            right: -26%;

            background: url(./public/web/img/promotion/arrow-white.png) no-repeat;

            background-size: 35%;

            background-position: 100% center;

            z-index: -1;

        }



        .flip>.card::before {

            transform: scaleY(-1) rotate(14deg);

        }

    }



    #exampleModal .form-control:focus~label,

    #exampleModal .form-floating>.form-control:not(:placeholder-shown)~label {

        background-color: #212529;

    }
</style>



<section class="position-relative banner trading-section">

    <div class="container">

        <div class="row gy-4 align-items-center">

            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 text-center">

                <h1 class="fw-bold display-3 mb-4 wow fadeInUp">Dollar Trip <span class="text-primary">IB Contest</span></h1>

                <p class="wow fadeInUp">Join the YaMarkets Dollar Trip IB Contest for a chance to win $10,000 and an unforgettable trip to Dubai. Compete for the highest Net Deposit and secure your spot in this exciting challenge. Participate now and start winning!</p>

                <p class="mb-4 wow fadeInUp">

                    <small>Period 01<sup>st</sup> June 2024 to 10<sup>th</sup> of July 2024</small>

                </p>

                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Deposit Now</a>

            </div>

        </div>

    </div>

</section>



<section class="bg-dark">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8 offset-lg-2 text-center wow fadeInUp">

                <h2 class="title mb-3">IB Contest <span class="text-primary">Winning Criteria</span></h2>

                <p class="mb-4">Learn about the criteria to win the Dollar Trip IB Contest and be eligible to win the grand prize!</p>

            </div>



            <div class="col-md-4 arrow position-relative wow fadeInUpBig" data-wow-delay="200ms">

                <div class="card bg-transparent">

                    <img src="<?= base_url() ?>public/web/img/promotion/prize1.png" alt="" class="rounded-circle object-fit-cover mx-auto" width="120" height="120">

                    <div class="card-body text-center">

                        <h5 class="card-title text-primary">1<sup>st</sup> Prize</h5>

                        <p class="mb-0 card-text">$10,000 & Trip to Dubai <br />Net Deposit: 150000 <br /> Volume: 500</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 arrow position-relative flip wow fadeInUpBig" data-wow-delay="400ms">

                <div class="card bg-transparent">

                    <img src="<?= base_url() ?>public/web/img/promotion/prize2.png" alt="" class="rounded-circle object-fit-cover mx-auto" width="120" height="120">

                    <div class="card-body text-center">

                        <h5 class="card-title text-primary">2<sup>nd</sup> Prize</h5>

                        <p class="mb-0 card-text">$8,000 & Trip to Dubai <br />Net Deposit: 120000 <br /> Volume: 500</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 wow fadeInUpBig" data-wow-delay="600ms">

                <div class="card bg-transparent">

                    <img src="<?= base_url() ?>public/web/img/promotion/prize3.png" alt="" class="rounded-circle object-fit-cover mx-auto" width="120" height="120">

                    <div class="card-body text-center">

                        <h5 class="card-title text-primary">3<sup>rd</sup> Prize</h5>

                        <p class="mb-0 card-text">$5,000 & Trip to Dubai <br />Net Deposit: 100000 <br /> Volume: 500</p>

                    </div>

                </div>

            </div>



            <div class="col-lg-8 offset-lg-2 text-center wow fadeInUp">

                <div class="table-responsive">

                    <table class="table table-stripped table-dark table-hover text-center">

                        <tr>

                            <th>Prize</th>

                            <th>Net Deposit</th>

                            <th>Dollar Prize</th>

                            <th>Volume</th>

                            <th>Trip</th>

                        </tr>

                        <!-- <tr>

                            <td>150000</td>

                            <td>$10,000</td>

                            <td>500</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>120000</td>

                            <td>$8,000</td>

                            <td>500</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>100000</td>

                            <td>$5,000</td>

                            <td>500</td>

                            <td>Dubai</td>

                        </tr> -->

                        <tr>

                            <td>4<sup>th</sup></td>

                            <td>90000</td>

                            <td>$4,000</td>

                            <td>500</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>5<sup>th</sup></td>

                            <td>80000</td>

                            <td>$3,000</td>

                            <td>500</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>6<sup>th</sup></td>

                            <td>70000</td>

                            <td>$2,000</td>

                            <td>500</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>7<sup>th</sup></td>

                            <td>60000</td>

                            <td>$1,500</td>

                            <td>450</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>8<sup>th</sup></td>

                            <td>50000</td>

                            <td>$1,000</td>

                            <td>400</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>9<sup>th</sup></td>

                            <td>40000</td>

                            <td>$750</td>

                            <td>300</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>10<sup>th</sup></td>

                            <td>25000</td>

                            <td>$500</td>

                            <td>250</td>

                            <td>Dubai</td>

                        </tr>

                        <tr>

                            <td>11<sup>th</sup></td>

                            <td>15000</td>

                            <td>$0</td>

                            <td>200</td>

                            <td>Dubai</td>

                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

</section>


<section>

    <div class="container overflow-hidden">

        <div class="row gy-4 text-center">

            <div class="col-12 wow fadeInUp">

                <h2 class="title mb-4">How to <span class="text-primary">Participate</span>?</h2>

            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUpBig" data-wow-delay="100ms">

                <div class="card bg-transparent linear-border h-100">

                    <div class="card-body">

                        <img src="<?= base_url() ?>public/web/img/promotion/participate_step1.png" alt="" height="140" width="170" class="img-fluid mb-3" />

                        <h5 class="card-title text-primary">Register & Refer</h5>

                        <p class="cart-text mb-0">Register as a YaMarkets IB partner and begin referring your clients to open Live Trading accounts.</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUpBig" data-wow-delay="200ms">

                <div class="card bg-transparent linear-border h-100">

                    <div class="card-body">

                        <img src="<?= base_url() ?>public/web/img/promotion/participate_step2.png" alt="" height="140" width="170" class="img-fluid mb-3" />

                        <h5 class="card-title text-primary">Deposit & Trade</h5>

                        <p class="cart-text mb-0">Your referred clients will deposit funds into their live accounts and start trading. The higher the net deposit, the greater your chances to win.</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUpBig" data-wow-delay="300ms">

                <div class="card bg-transparent linear-border h-100">

                    <div class="card-body">

                        <img src="<?= base_url() ?>public/web/img/promotion/participate_step3.png" alt="" height="140" width="170" class="img-fluid mb-3" />

                        <h5 class="card-title text-primary">Aim for the Top</h5>

                        <p class="cart-text mb-0">Increase your net deposit and trading volume through your clients' deposits to compete for the grand prize and a trip to Dubai.</p>

                    </div>

                </div>

            </div>

            <div class="col-12 text-center">
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Deposit Now</a>
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

                        <li>Starts from 1st June 2024 to 10th July 2024.</li>

                        <li>ECN account type is not valid fot this contest.</li>

                        <li>Participants shall be eligible to redeem the Prize based on the Deposit Target and Volume Target accumulated based on net deposit and trading volume scores, as deposited and traded by their directly introduced clients.</li>

                        <li>Deposit Target is calculated by accumulated net deposits (deposits – withdrawals) to the Clients directly introduced by the Affiliate only, towards the Deposit Target.</li>

                        <li>Affiliate can monitor his Deposit and Volume Targets on his IB CRM area.</li>

                        <li>The Affiliate’s own accounts are excluded from the YaMarkets IB promotion, therefore deposits and volume traded on Affiliate’s own trading account shall not be counted towards the Deposit and Volume Targets.</li>

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

                <form action="<?=base_url('website/contest_submit_data')?>" method="post" class="contact-form">

                    <div class="row gy-4">

                        <div class="col-md-12">

                            <div class="form-floating">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" class="form-control" id="contest_name" name="contest_name" placeholder="contest_name" value="Dollar Trip IB Contest" />
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required />

                                <label for="name">Name</label>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-floating">

                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required />

                                <label for="email">Enter email</label>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-floating">

                                <input type="tel" class="form-control" name="mobile_no" id="mobile_no" value="+91" maxlength="13" pattern="{0-9}[10]" placeholder="Enter mobile no." required />

                                <label for="phone">Enter mobile no.</label>

                            </div>

                        </div>

                        <div class="col-12">

                            <div class="form-floating">

                                <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message"></textarea>

                                <label for="message">Message</label>

                            </div>

                        </div>

                        <div class="col-12">

                            <button type="submit" name="submit" class="btn btn-outline-primary px-5 py-2">Submit</button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>