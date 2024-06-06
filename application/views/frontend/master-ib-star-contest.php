<style>
    .modal-content {
        background: #0d0e11;
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

    @media (max-width: 767px) {
        .forex-page {
            height: 100%;
        }
    }
</style>

<section class="position-relative overflow-hidden forex-page">
    <div class="container position-relative z-1">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h5 class="text-primary mb-3 fw-bold text-uppercase wow fadeInDown">QUARTERLY 1ST ROUND</h5>
                <h2 class="title mb-3 wow fadeInUp">Leaders (Master IB) <span class="text-gradient">Stars Contest</span></h2>
                <p class="mb-4 wow fadeInup">The YaMarkets Leaders (Master IB) Stars Contest is an annual contest with quarterly rounds exclusively for YaMarkers Partners. This contest comes with a great opportunity for emerging partners to showcase their skills and win extra rewards for their dedication.</p>
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="p-3">
                            <i class="fa-solid fa-dollar fa-2x text-gradient mb-2"></i>
                            <p>$50 per IB</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3">
                            <i class="fa-solid fa-percent fa-2x text-gradient mb-2"></i>
                            <p>upto $10,000 cash prize</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3">
                            <i class="fa-solid fa-hand-holding-dollar fa-2x text-gradient mb-2"></i>
                            <p>0.25 cent</p>
                        </div>
                    </div>
                </div>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp">Join Now</a>
            </div>
        </div>
    </div>
    <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
        <path fill="#212529" fill-opacity="1" d="M0,96L120,80C240,64,480,32,720,37.3C960,43,1200,85,1320,106.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-4">
                <div class="bg-linear-gradient rounded h-100 p-3 linear-border wow fadeInLeft">
                    <figure>
                        <i class="fa-solid fa-handshake-angle text-primary fa-2x"></i>
                    </figure>
                    <h5>Participate and Grow as a YaMarkets Introducing Brokers</h5>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?= base_url() ?>public/web/img/participate.png" alt="Participate and Grow" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-4">
                <div class="bg-linear-gradient rounded h-100 p-3 linear-border wow fadeInRight">
                    <figure>
                        <i class="fa-solid fa-blender text-primary fa-2x"></i>
                    </figure>
                    <h5>Get at the Top of the Leaderboard and Win Exclusive Rewards</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-4 text-center">
                <img src="<?= base_url() ?>public/web/img/top-3-leaders.jpg" alt="The Top 3 Leaders" class="img-fluid rounded mt-5 wow fadeInLeftBig" />
            </div>
            <div class="col-lg-8">
                <h4 class="text-center wow fadeInRightBig mt-lg-5 mb-3">The Top 3 Leaders will be qualified every Quarter</h4>
                <div class="table-responsive wow fadeInRightBig">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="text-primary">Criteria</th>
                                <th class="text-primary">Eligibility</th>
                                <th class="text-primary">Rewards</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SUB -IB Activation </td>
                                <td>20</td>
                                <td>$50 per IB</td>
                            </tr>
                            <tr>
                                <td>Net Deposit</td>
                                <td>$50000</td>
                                <td>upto $10,000 cash prize</td>
                            </tr>
                            <tr>
                                <td>Trading Volume</td>
                                <td>1000</td>
                                <td>0.25 cent</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 text-center">
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp">Join Now</a>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section overflow-hidden">
    <div class="container">
        <div class="row gy-4 forex-cards">
            <div class="col-md-4">
                <div class="card pb-0 h-100 text-center wow fadeInUpBig" data-wow-delay="100ms">
                    <figure class="position-relative z-0">
                        <i class="fa-solid fa-money-bill-transfer text-primary fa-2x ty-10"></i>
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0">Extra $750 for monthly promotional expenses until the next quarter.</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pb-0 h-100 text-center wow fadeInUpBig" data-wow-delay="300ms">
                    <figure class="position-relative z-0">
                        <i class="fa-solid fa-hands-praying text-primary fa-2x ty-10"></i>
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0">Dedicated quarterly budget of $1500 for seminars or workshops.</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pb-0 h-100 text-center wow fadeInUpBig" data-wow-delay="500ms">
                    <figure class="position-relative z-0">
                        <i class="fa-solid fa-building-columns text-primary fa-2x ty-10"></i>
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0">Dedicated 4 exclusive educational webinars for the team.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center gy-4 col-rev">
            <div class="col-md-6">
                <!--  <h3 class="text-primary wow fadeInLeft">About Gala Dinner</h3>
                <p class="mb-2 wow fadeInLeft" data-wow-delay="100ms">Gala Dinner will be organised in between 10th Jan 2025 - 26th Jan 2025</p>
                <p class="mb-5 wow fadeInLeft" data-wow-delay="300ms">Don't miss this unforgettable event. Participate in the Star IB Content, rise to the Top 40 Partners, and join us for an extraordinary evening filled with lively celebrations, exclusive networking opportunities, and moments that will stay with you for a lifetime.</p> -->
                <h4 class="text-primary wow fadeInLeft">Partner Advantages</h4>
                <p class="wow fadeInLeft">Experience unique advantages and rewards designed for partner growth and success at YaMarkets.</p>
                <p class="wow fadeInLeft">Enjoy attractive incentives, rewards, and bonuses for exceptional performance. Access a range of educational resources, including webinars and workshops, supporting your continuous professional development. Engage in exclusive events and gatherings where your achievements as a partner are celebrated and recognized.</p>
                <ol class="list-unstyled wow fadeInLeft" data-wow-delay="200ms">
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">Personalized Assistance</span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">Attractive Rewards</span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">Educational Resources</span>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-check text-primary"></i>
                        <span class="opacity-50">Exclusive Events</span>
                    </li>
                </ol>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp">Join Now</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <img src="<?= base_url() ?>public/web/img/partner-advantages.jpg" alt="" class="img-fluid rounded wow fadeInRight" />
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

                        <li>Cash prize is based on minimum 1 % of Total Net deposit value.</li>
                        <li>Sub IB Activation is minimum $5000 net business in Quarterly</li>

                        <li>Participants shall be eligible to redeem the Prize based on the Deposit Target and Volume Target accumulated based on net deposit and trading volume scores, as deposited and traded by their directly introduced clients.</li>

                        <li>Deposit Target is calculated by accumulated net deposits (deposits – withdrawals) to the Clients directly introduced by the Affiliate only, towards the Deposit Target.</li>

                        <li>Affiliate can monitor his Deposit and Volume Targets on his IB CRM area.</li>

                        <li>The Affiliate’s own accounts are excluded from the YaMarkets IB promotion, therefore deposits and volume traded on Affiliate’s own trading account shall not be counted towards the Deposit and Volume Targets.</li>

                        <li>The Deposits and trading volume of Clients introduced by sub-Affiliates of the Affiliate shall not be counted towards the Deposit and Volume Targets.</li>

                        <li>The positions opened by Clients introduced by the Affiliate, prior his registration for the YaMarkets IB Contest shall not be counted towards the Affiliate’s Volume Target.</li>

                        <li>Only forex, gold, silver and cryptocurrency positions traded by Clients directly introduced by the Affiliate shall be counted towards the Affiliate’s Volume Target.</li>

                        <li>Only active client accounts during the contest period will be considered for the calculation of volume.</li>

                        <li>Only closed deals(trades) are taken into calculation. Open trades will not contribute in volume calculation.</li>

                        <li>Top 3 Leaders will be qualified every Quarter.</li>

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
                    <input type="hidden" class="form-control" id="contest_name" name="contest_name" placeholder="contest_name" value="Master IB Star Contest" />
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
                                <input type="tel" class="form-control" id="phone" name="mobile_no" value="+91 " maxlength="14" placeholder="Enter mobile no." required />
                                <label for="phone">Enter mobile no.</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" rows="4" name="message" placeholder="Message"></textarea>
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