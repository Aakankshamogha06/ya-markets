<style>
    .trading-section {
        min-height: calc(100vh - 130px);
        display: flex;
        align-items: center;
        justify-content: center;
        background: url(./public/web/img/promotion/background.png) no-repeat;
        background-size: cover;
        background-position: center center;
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

    .dollar-img {
        max-height: 220px;
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

    #tradingInfo.nav-pills .nav-link {
        color: #fff;
        border-radius: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 20px;
        font-weight: 500;
    }

    #tradingInfo.nav-pills .nav-link:is(:hover, .active) {
        background-color: unset;
        color: #fac211;
        border-bottom: 2px solid
    }

    .rank {
        top: -16px;
        left: 50%;
        transform: translateX(-50%);
        padding: 2px 19px;
        border-radius: 21px;
        background: #fac211;
        color: #000;
        text-wrap: nowrap;
    }

    .prize-box {
        border-radius: 1rem;
        background-color: #0d0e11;
        color: #fff;
        padding: 1rem;
        text-align: center;
    }

    .prize {
        font-size: 2.6rem;
        line-height: 3rem;
        font-weight: 600;
        color: #fff;
    }

    .price-card>.wow {
        transition: all .3s ease-in-out;
    }

    .price-card>.wow:hover {
        transform: scale(1.05) translateY(-8px);
    }

    /*  @media (min-width: 767px) {
        .price-card>.wow:first-child {
            flex: 0 0 51%;
        }
    } */

    .prize-img {
        margin-block: 1rem;
        height: 100px;
    }

    .sticky-top.z-2.py-0 {
        top: 129px;
    }

    @media (max-width: 992px) {
        .sticky-top.z-2.py-0 {
            top: 60px;
        }
    }

    @media (max-width: 767px) {
        .trading-section {
            min-height: auto;
        }

        #tradingInfo.nav-pills .nav-link {
            font-size: 16px;
        }

        .trading-section>img {
            max-width: 12rem;
        }

        .bullet-points li>span:first-child {
            border: 2px solid;
            transform: unset;
        }

        .bullet-points li>span:first-child>span {
            transform: unset;
        }

        .bullet-points li>span:last-child {
            width: calc(100% - 50px);
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

    .top-performer {
        --bs-table-bg: #0000;
        --bs-table-color: #fff;
        --bs-table-striped-color: #fff;
        --bs-table-striped-bg: #000;
    }
</style>

<section class="position-relative banner trading-section">
    <img src="<?= base_url() ?>public/web/img/promotion/dollar-left.png" alt="" class="position-absolute img-fluid left-img d-none d-lg-block" />
    <img src="<?= base_url() ?>public/web/img/promotion/trophy-right.png" alt="" class="position-absolute img-fluid right-img d-none d-lg-block" />
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 d-lg-none text-center">
                <img src="<?= base_url() ?>public/web/img/promotion/dollar-left.png" alt="" class="img-fluid dollar-img" />
            </div>
            <div class="col-lg-6 offset-lg-3 text-center">
                <h5 class="text-primary">Trader of the Month</h5>
                <h1 class="fw-bold display-3 mb-4 wow fadeInUp">Monthly Trading <span class="text-primary">Challenge</span></h1>
                <p class="mb-4 wow fadeInUp">Think you've got the chops to be the top trader? Show Off Your Trading Skills, Get to the Top with the highest Profit Percentage and become the Monthly Trading Champion!</p>
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Participate now</a>
                <p class="mt-3 wow fadeInUp text-primary">
                    <small>*All prizes are credited to a Live Account.</small>
                </p>
            </div>
        </div>
    </div>
</section>


<div>
    <section class="sticky-top z-2 py-0" style="background-color:#0d0e11;">
        <div class="container">
            <ul class="nav nav-pills justify-content-center gap-3 py-2 bg-dark" id="tradingInfo" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-info" type="button" role="tab" aria-controls="pills-info" aria-selected="true">info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-faq-tab" data-bs-toggle="pill" data-bs-target="#pills-faq" type="button" role="tab" aria-controls="pills-faq" aria-selected="false">faq</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-rules-tab" data-bs-toggle="pill" data-bs-target="#pills-rules" type="button" role="tab" aria-controls="pills-rules" aria-selected="false">rules</button>
                </li>
            </ul>
        </div>
    </section>

    <div class="row gy-4">
        <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab" tabindex="0">
                    <section class="bg-dark overflow-visible">
                        <div class="container">
                            <div class="row gy-5">
                                <!-- <div class="col-lg-4">
                                    <div class="sticky-top z-1 top-50 text-center text-lg-start">
                                        <h3>DURATION</h3>
                                        <div class="text-primary display-2 fw-semibold mb-5">Monthly</div>
                                        <h3>PLATFORM</h3>
                                        <div class="text-primary display-4 fw-semibold">MT5</div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-7 offset-lg-1"> -->
                                <div class="col-lg-12">
                                    <div class="d-flex gap-3 flex-wrap justify-content-between">
                                        <div>
                                            <h6>DURATION</h6>
                                            <div class="text-primary display-6 fw-semibold mb-5">1 Month</div>
                                        </div>
                                        <div>
                                            <h6>PLATFORM</h6>
                                            <div class="text-primary display-6 fw-semibold">MT5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5 gy-5 align-items-center justify-content-center price-card">
                                        <div class="wow fadeInUp">
                                            <div class="prize-box position-relative">
                                                <div class="position-absolute border border-warning rank">1st Place</div>
                                                <div class="text-center">
                                                    <img src="<?= base_url() ?>public/web/img/promotion/prize-1st.png" alt="" class="img-fluid prize-img" />
                                                </div>
                                                <div class="prize"><span class="text-primary">$</span>500</div>
                                            </div>
                                        </div>
                                        <div class="wow fadeInUp">
                                            <div class="prize-box position-relative">
                                                <div class="position-absolute border border-warning rank">2nd Place</div>
                                                <div class="text-center">
                                                    <img src="<?= base_url() ?>public/web/img/promotion/prize-02.png" alt="" class="img-fluid prize-img" />
                                                </div>
                                                <div class="prize"><span class="text-primary">$</span>300</div>
                                            </div>
                                        </div>
                                        <div class="wow fadeInUp">
                                            <div class="prize-box position-relative">
                                                <div class="position-absolute border border-warning rank">3rd Place</div>
                                                <div class="text-center">
                                                    <img src="<?= base_url() ?>public/web/img/promotion/prize-3rd.png" alt="" class="img-fluid prize-img" />
                                                </div>
                                                <div class="prize"><span class="text-primary">$</span>100</div>
                                            </div>
                                        </div>
                                        <div class="wow fadeInUp">
                                            <div class="prize-box position-relative">
                                                <div class="position-absolute border border-warning rank">4th Place</div>
                                                <div class="text-center">
                                                    <img src="<?= base_url() ?>public/web/img/promotion/prize-4th.png" alt="" class="img-fluid prize-img" />
                                                </div>
                                                <div class="prize"><span class="text-primary">$</span>60</div>
                                            </div>
                                        </div>
                                        <div class="wow fadeInUp">
                                            <div class="prize-box position-relative">
                                                <div class="position-absolute border border-warning rank">5th Place</div>
                                                <div class="text-center">
                                                    <img src="<?= base_url() ?>public/web/img/promotion/prize-5th.png" alt="" class="img-fluid prize-img" />
                                                </div>
                                                <div class="prize"><span class="text-primary">$</span>40</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="withdraw-section">
                        <div class="container">
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-6">
                                    <h3 class="text-primary mb-3">Who wins</h3>
                                    <div class="d-flex gap-3 mb-3">
                                        <span class="text-primary">
                                            <i class="fa-solid fa-crown fa-2x"></i>
                                        </span>
                                        <p class="mb-4">The participant with the highest balance at the end of round wins the main prize</p>
                                    </div>
                                    <div class="next-round-step">
                                        <h3 class="mb-3">How to Join <span class="d-lg-block text-primary">and Win?</span></h3>
                                        <ul class="list-unstyled bullet-points">
                                            <li class="d-flex gap-2 mb-3">
                                                <span class="border-0"><i class="mt-1 fa-solid fa-check-double text-primary"></i></span>
                                                <div>
                                                    <h6 class="mb-1 text-primary">Join the Contest</h6>
                                                    <p class="mb-0">Sign up or log in to your YaMarkets account.</p>
                                                </div>
                                            </li>
                                            <li class="d-flex gap-2 mb-3">
                                                <span class="border-0"><i class="mt-1 fa-solid fa-check-double text-primary"></i></span>
                                                <div>
                                                    <h6 class="mb-1 text-primary">Gear Up</h6>
                                                    <p class="mb-0">Open a new contest account to participate.</p>
                                                </div>
                                            </li>
                                            <li class="d-flex gap-2 mb-3">
                                                <span class="border-0"><i class="mt-1 fa-solid fa-check-double text-primary"></i></span>
                                                <div>
                                                    <h6 class="mb-1 text-primary">Choose The Platform</h6>
                                                    <p class="mb-0">Download the MT5 trading platform or use the convenient web version.</p>
                                                </div>
                                            </li>
                                            <li class="d-flex gap-2 mb-3">
                                                <span class="border-0"><i class="mt-1 fa-solid fa-check-double text-primary"></i></span>
                                                <div>
                                                    <h6 class="mb-1 text-primary">Trade Your Way to the Top</h6>
                                                    <p class="mb-0">Start trading on MT5 using your contest account. The higher your balance, the closer you get to winning!</p>
                                                </div>
                                            </li>
                                            <li class="d-flex gap-2">
                                                <span class="border-0"><i class="mt-1 fa-solid fa-check-double text-primary"></i></span>
                                                <div>
                                                    <h6 class="mb-1 text-primary">Become the Top Winner</h6>
                                                    <p class="mb-0">Compete for the Top 5 place and claim the prize!</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="title mb-3">Top <span class="text-primary">Performers</span></h2>
                                    <div class="table-responsive">
                                        <table class="table table-striped top-performer">
                                            <thead>
                                                <tr>
                                                    <th>Rank</th>
                                                    <th>Contestant</th>
                                                    <th>Achivements</th>
                                                    <th>Gain</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Otto</td>
                                                    <td><i class="fa fa-dollar text-primary"></i></td>
                                                    <td class="text-success">+7 133.22%</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Thornton</td>
                                                    <td><i class="fa fa-dollar text-primary"></i></td>
                                                    <td class="text-success">+7 133.22%</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Jacob</td>
                                                    <td><i class="fa fa-dollar text-primary"></i></td>
                                                    <td class="text-success">+7 133.22%</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Jacob</td>
                                                    <td><i class="fa fa-dollar text-primary"></i></td>
                                                    <td class="text-success">+7 133.22%</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Jacob</td>
                                                    <td><i class="fa fa-dollar text-primary"></i></td>
                                                    <td class="text-success">+7 133.22%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <img src="<?= base_url() ?>public/web/img/promotion/winner-list.png" alt="" class="img-fluid mb-3" /> -->
                                    <p>Track your progress and witness the winners rise - Leaderboard updates every 24 hours.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="pills-faq" role="tabpanel" aria-labelledby="pills-faq-tab" tabindex="0">
                    <div class="bg-dark">
                        <div class="container">
                            <div class="accordion" id="accordionExample">
                                <div class="accordian-wrapper faq-wrapper bg-transparent">
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How often does the YaMarkets Trading Challenge take place?
                                            </button>
                                        </h4>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-white opacity-50">
                                                <p>The YaMarkets Trading Challenge occurs every month. Each month, traders can participate and compete for the top positions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordian-wrapper faq-wrapper bg-transparent">
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                What are the eligibility requirements to join the YaMarkets Trading Challenge?
                                            </button>
                                        </h4>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-white opacity-50">
                                                <p>To participate in the YaMarkets Trading Challenge, traders must be of legal age in their jurisdiction. Additionally, they need to register a new, real MT5 account. All information provided during registration must be accurate.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordian-wrapper faq-wrapper bg-transparent">
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                How are winners declared in the YaMarkets Trading Challenge?
                                            </button>
                                        </h4>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-white opacity-50">
                                                <p>Winners of the YaMarkets Trading Challenge are determined based on the highest profit percentage achieved by the end of the contest period. The participant with the highest profit percentage at the contest's conclusion will be declared the winner and awarded the first-place prize of $500.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-rules" role="tabpanel" aria-labelledby="pills-rules-tab" tabindex="0">
                    <section class="bg-dark">
                        <div class="container">
                            <div class="row gy-4">
                                <div class="col-12 text-center">
                                    <h2 class="text-primary">Trading Contest Rules</h2>
                                    <!-- <p>Get Equipped to Compete!</p> -->
                                </div>
                                <div class="col-12">
                                    <ol>
                                        <li>
                                            <strong class="text-primary">Duration:</strong>
                                            <p>The Contest runs on a monthly basis, starting from the announced start date to the finish date</p>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Registration:</strong>
                                            <ul class="mb-3">
                                                <li>Registration is open during the Contest starts before and after.</li>
                                                <li>All participants must be of legal age.</li>
                                                <li>Each participant must register a new real account for each Contest round.</li>
                                                <li>Real data must be provided during registration; any fake data may lead to disqualification.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Eligibility:</strong>
                                            <ul class="mb-3">
                                                <li>Only persons of legal age can participate.</li>
                                                <li>IP matching will result in disqualification.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Trading Conditions:</strong>
                                            <p class="mb-2">Contest accounts have the same trading conditions:</p>
                                            <ul class="mb-3">
                                                <li>Account type: As in the Ya Market MT5 account</li>
                                                <li>Trading tools: As in the Ya Markets MT5 account</li>
                                                <li>Initial deposit: 500 USD</li>
                                                <li>Leverage: 1:500</li>
                                                <li>Minimum volume: 0.01 lot; maximum volume is not limited.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Disqualification:</strong>
                                            <ul class="mb-3">
                                                <li>Any form of arbitrage trading, swapping, hedging, or pricing/quote abuse will lead to disqualification.</li>
                                                <li>The Company reserves the right to reject or disqualify participants for reasons including suspicious trading activities or cheating.</li>
                                                <li>Internal transfers to the contest account during the contest period are not allowed.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Trading Techniques:</strong>
                                            <ul class="mb-3">
                                                <li>All trading techniques are allowed, and the use of Expert Advisors is also permitted.</li>
                                                <li>Linking the contest ID with any copy trading account is also allowed.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Contest Account Status:</strong>
                                            <ul class="mb-3">
                                                <li>All open orders will not be automatically closed until participants choose to close them.</li>
                                                <li>If a participant wishes to participate in the next round, they must open a new contest MT5 account and deposit the required amount.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Winner Determination:</strong>
                                            <p>The participant with the highest profit percentage at the end of the contest is declared the winner.</p>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Prizes:</strong>
                                            <ul class="mb-3">
                                                <li>1st place: 500 USD</li>
                                                <li>2nd place: 300 USD</li>
                                                <li>3rd place: 100 USD</li>
                                                <li>4th place: 60 USD</li>
                                                <li>5th place: 40 USD</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Publicity:</strong>
                                            <ul class="mb-3">
                                                <li>Winners agree to the publication of their names on social media.</li>
                                                <li>Winners must answer interview questions for publication on the Ya Markets site.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Prize Claim:</strong>
                                            <ul class="mb-3">
                                                <li>Winners must claim their prize within 30 days after the end of the round.</li>
                                                <li>Failure to claim within the specified period may result in denial of the prize.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Data Publication:</strong>
                                            <p>Some registration data may be published on www.yamarkets.com.</p>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Prize Distribution:</strong>
                                            <p>The prize is paid into the client's Wallet and can be withdrawn.</p>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Tie-breaker:</strong>
                                            <p>If two or more winners have an equal profit ratio, the winner will be announced based on the highest lots.</p>
                                        </li>
                                        <li>
                                            <strong class="text-primary">Fraudulent Operations:</strong>
                                            <p>The Company reserves the right to declare any prize already given invalid upon evidence of attempted fraudulent operations.</p>
                                        </li>
                                    </ol>
                                    <p>By participating in the Trading Contest, all participants agree to abide by these rules and any decisions made by Ya Markets. The Company reserves the right to modify or update the rules as needed.</p>
                                </div>
                                <!-- <div class="col-12">
                                    <p class="fw-semibold">All contestants will be armed with the same arsenal:</p>
                                    <ol>
                                        <li class="mb-2"><strong class="text-primary">Platform: </strong>Standard YaMarkets MT5 account - all the tools you know and love.</li>
                                        <li class="mb-2"><strong class="text-primary">Starting Capital: </strong>Just a $500 initial deposit - light on your wallet, heavy on opportunity.</li>
                                        <li class="mb-2"><strong class="text-primary">Leverage Power: </strong>Leverage up to 1:500 to amplify your gains (remember, amplify losses too!).</li>
                                        <li><strong class="text-primary">Trade Size Flexibility: </strong>Execute trades as small as 0.01 lots and go all-in if you wish (maximum volume not capped).</li>
                                    </ol>
                                    <p>This is your chance to showcase your trading prowess on a level playing field. Let the battle commence!</p>
                                    <p>So, what are you waiting for? Sharpen your trading skills, release your inner market maestro, and dominate the competition!
                                    </p>
                                </div>
                                <div class="col-12">
                                    <h2 class="mb-3">Trading <span class="text-primary">Terms & Conditions</span></h2>
                                    <h4>Eligibility</h4>
                                    <ul>
                                        <li>You must be of legal age to participate in your jurisdiction.</li>
                                        <li>You must register a new, real MT5 account for each contest round.</li>
                                        <li>All information provided during registration must be accurate.</li>
                                    </ul>
                                    <h4>Contest Duration</h4>
                                    <ul>
                                        <li>The contest runs monthly, with specific start and end dates announced for each round.</li>
                                        <li>Registration remains open throughout the entire contest period.</li>
                                    </ul>
                                    <h4>Disqualification</h4>
                                    <ul>
                                        <li>Any form of arbitrage trading, swapping, hedging, or manipulating quotes will result in disqualification.</li>
                                        <li>YaMarkets reserves the right to disqualify participants for suspicious activity or cheating.</li>
                                        <li>Internal transfers to the contest account during the contest period are strictly prohibited.</li>
                                    </ul>
                                    <h4>Winning</h4>
                                    <ul>
                                        <li>The participant with the highest profit percentage at the contest's end will be declared the winner.</li>
                                    </ul>
                                    <h4>Additional Terms</h4>
                                    <ul>
                                        <li>Winners agree to YaMarkets publishing their names on their social media platforms and contest websites.</li>
                                        <li>Winners must claim their prize within 30 days after the contest concludes. YaMarkets reserves the right to modify or update the contest rules at any time.</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

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
                    <input type="hidden" class="form-control" id="contest_name" name="contest_name" placeholder="contest_name" value="Trading Content" />

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

                                <input type="tel" class="form-control" id="mobile_no" name="mobile_no" value="+91" maxlength="13" placeholder="Enter mobile no." required />

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