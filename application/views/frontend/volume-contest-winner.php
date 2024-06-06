<style>
    .trading-section {
        min-height: calc(100vh - 130px);
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(252, 195, 6, .2);
    }

    .bg-img {
        background-image: url(https://img.freepik.com/free-photo/panoramic-view-dubai-city-illuminated-neon-spectrum_23-2151305340.jpg?t=st=1712915030~exp=1712918630~hmac=66b6b101620fd856c908c1507188075239ca03bd04210c116e8ccd8d1e3aa8f3&w=1060);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-img::before {
        content: '';
        position: absolute;
        z-index: -1;
        inset: 0;
        background-image: linear-gradient(230deg, rgba(250, 194, 17, .4), rgba(0, 0, 0, 0));
    }


    .tf-work {
        background-color: #141b22;
        padding: 20px 20px 34px;
        position: relative;
        z-index: 0;
        transition: all .3s ease;
    }

    .tf-work:hover {
        box-shadow: 0 5px 15px rgb(38, 44, 49);
    }

    .tf-work::after,
    .tf-work::before {
        content: "";
        position: absolute;
        transition: all .5s ease;
        width: 30px;
        height: 30px;
        z-index: -1;
    }

    .tf-work::before {
        border-left: 5px solid #fac211;
        border-top: 5px solid #fac211;
        left: 0;
        top: 0;
    }

    .tf-work::after {
        border-bottom: 5px solid #fac211;
        border-right: 5px solid #fac211;
        bottom: 0;
        right: 0;
    }

    .tf-work:hover::before,
    .tf-work:hover::after {
        height: 100%;
        width: 100%;
    }

    .tf-work .image {
        height: 72px;
    }

    .reward-icon {
        width: 150px;
        height: 150px;
        display: grid;
        margin-inline: auto;
        place-content: center;
    }

    #exampleModal .form-floating>.form-control:not(:placeholder-shown)~label {
        background-color: #212529;
    }

    .count-list {
        position: relative;
        z-index: 0;
    }

    .count-list::before {
        position: absolute;
        content: '';
        top: 0;
        left: 25px;
        height: 98%;
        width: 1px;
        border: 1.5px dashed #fac211;
        z-index: -1;
    }

    .work-count {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #141b22;
        border: 2px solid #fac211;
        display: grid;
        place-items: center;
        font-size: 18px;
    }

    .work-count~div {
        width: calc(100% - 50px);
    }

    @media (max-width: 767px) {
        .trading-section {
            min-height: 100%;
        }

        .trading-section .container>.row {
            flex-direction: column-reverse;
        }
    }

    .morph {
        animation: morph 3s linear infinite;
    }

    @keyframes morph {

        0%,
        100% {
            border-radius: 40% 60% 70% 30% / 40% 40% 60% 50%;
        }

        34% {
            border-radius: 70% 30% 50% 50% / 30% 30% 70% 70%;
        }

        67% {
            border-radius: 100% 60% 60% 100% / 100% 100% 60% 60%;
        }
    }
</style>

<section class="trading-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1 class="fw-bold display-4 mb-4 wow fadeInUp">YaMarkets <span class="text-primary">Volume Rush Contest!</span></h1>
                <p class="mb-4 wow fadeInUp">Trade Big, Win Bigger - Top 5 Traders Get Rewarded up to <span class="text-primary fw-semibold">$123</span>!</p>
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Register Now</a>
            </div>
            <div class="col-lg-10 offset-lg-1 text-center wow fadeInUp">
                <img src="https://images.ctfassets.net/hzjmpv1aaorq/3Xgt4obLwWQwVpz89pUP33/8fcdcecb7cd85d841ae55553aa7e2f59/hero-image.webp?fm=webp&q=80" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<section class="bg-black overflow-visible">
    <div class=" container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="position-sticky top-25">
                    <h2 class="mb-4">Become The YaMarkets <span class="text-primary">Volume King!</span></h2>
                    <div class="row gy-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="tf-work h-100 wow fadeInUp">
                                <figure>
                                    <img src="https://cdn-icons-png.flaticon.com/512/2946/2946307.png" width="100" height="100" alt="Compete with the Best" class="img-fluid" />
                                </figure>
                                <h4 class="text-primary fw-semibold mb-2">Compete with the Best</h4>
                                <p class="mb-0">Go head-to-head with YaMarkets' top traders and see where you stack up.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="tf-work h-100 wow fadeInUp">
                                <figure>
                                    <img src="https://cdn-icons-png.flaticon.com/512/9845/9845029.png" width="100" height="100" alt="Increase your volume" class="img-fluid" />
                                </figure>
                                <h4 class="text-primary fw-semibold mb-2">Increase your volume</h4>
                                <p class="mb-0">Prove your skills, refine your strategies and push for maximum trading volume.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="tf-work h-100 wow fadeInUp">
                                <figure>
                                    <img src="https://cdn-icons-png.flaticon.com/512/1426/1426770.png" width="100" height="100" alt="Win Big Rewards" class="img-fluid" />
                                </figure>
                                <h4 class="text-primary fw-semibold mb-2">Win Big&nbsp;Rewards</h4>
                                <p class="mb-0">The 5 traders with the highest trading volume will be crowned the champions!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="h-100 position-relative z-0 overflow-hidden rounded-4 p-4 bg-img">
                    <h3 class="mb-4">The score table places <span class="text-primary">50 participants</span></h3>
                    <ul class="list-unstyled d-flex gap-3 flex-column">
                        <?php for ($i = 0; $i < 9; $i++) { ?>
                            <li class="d-flex gap-3 align-items-center">
                                <figure class="mb-0">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1021/1021218.png" width="50" height="50" alt="" class="img-fluid">
                                </figure>
                                <div class="fs-3 fw-medium">$5000</div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-2">Track <span class="text-primary">Your Progress!</span></h2>
                <p>See how you rank against other traders in real-time with our interactive leaderboard. Stay motivated and climb to the top for a chance to win!</p>
            </div>
            <div class="col-lg-6">
                <h2 class="h1 fw-semibold mb-3">How does <span class="d-lg-block text-primary">it work?</span></h2>
                <ul class="list-unstyled count-list">
                    <li class="d-flex align-items-center gap-3 mb-4">
                        <span class="work-count">1</span>
                        <div>
                            <p class=" mb-0">Register or authorize</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-4">
                        <span class="work-count">2</span>
                        <div>
                            <p class=" mb-0">Open a contest account</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-4">
                        <span class="work-count">3</span>
                        <div>
                            <p class=" mb-0">Download the trading platform or authorize in Web Trader</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-4">
                        <span class="work-count">4</span>
                        <div>
                            <p class=" mb-0">Wait for start on 24 May</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <span class="work-count">5</span>
                        <div>
                            <p class=" mb-0">Commence trade and compete for the main prize</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="bg-body p-4 rounded shadow">
                    <h3 class="mb-2 text-primary">Score table</h3>
                    <div class="text-center table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Contestant</th>
                                    <th>Achivements</th>
                                    <th>Gain</th>
                                    <th>Prize</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 8; $i++) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td>Otto</td>
                                        <td><i class="fa fa-dollar text-primary"></i></td>
                                        <td class="<?= ($i % 2 == 0) ? 'text-danger' : 'text-success'; ?>"><?= ($i % 2 == 0) ? '-2' : '+7'; ?> 133.22%</td>
                                        <td>$900</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-black">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linear-border contest-terms">
                    <h2 class="title wow fadeInUp text-center mb-5">Terms & Conditions</h2>
                    <ol class="text-white opacity-50 wow fadeInUp">
                        <li>Starts from 1st March 2024 to 31st March 2024.</li>
                        <li>ECN account type is not valid fot this contest.</li>
                        <li>Deposit Target is calculated by accumulated net deposits (deposits – withdrawals) to the Clients directly introduced by the Affiliate only, towards the Deposit Target.</li>
                        <li>Affiliate can monitor his Deposit and Volume Targets on his IB CRM area.</li>
                        <li>The Affiliate’s own accounts are excluded from the YaMarkets IB promotion, therefore deposits and volume traded on Affiliate’s own trading account shall not be counted towards the Deposit and Volume Targets.</li>
                        <li>The Deposits and trading volume of Clients introduced by sub-Affiliates of the Affiliate shall not be counted towards the Deposit and Volume Targets.</li>
                        <li>Only forex, gold, silver and cryptocurrency positions traded by Clients directly introduced by the Affiliate shall be counted towards the Affiliate’s Volume Target.</li>
                        <li>Only active client accounts during the contest period will be considered for the calculation of volume.</li>
                        <li>Only closed deals(trades) are taken into calculation. Open trades will not contribute in volume calculation.</li>
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
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" method="post" class="contact-form">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Name" required />
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required />
                                <label for="email">Enter email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone" value="+91 " maxlength="10" placeholder="Enter mobile no." required />
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