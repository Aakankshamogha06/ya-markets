<style>
    .card img {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }
</style>
<section class="forex-page zulutrade-section position-relative" style="background-image: url(<?= base_url() ?>public/web/img/zulutrade-banner.jpg);">
    <div class="container text-center">
        <div class="position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column align-items-center gap-4 pb-4">
            <a href="" class="btn btn-primary px-5">Join Now</a>
            <button class="border-0 bg-transparent text-white" id="scrollDown">
                <i class="fa-solid fa-angles-down fs-4"></i>
            </button>
        </div>
    </div>
</section>

<section class="step-section">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-12 text-center">
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms">How to <span class="text-gradient">Get Started</span></h2>
                <p class="para-title wow fadeInDown">A company you can trust.</p>
            </div>
            <div class="col-lg-8 col-xl-6 mx-auto">
                <div class="position-relative step-info m-4">
                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 2px;--bs-progress-bar-bg:#fac211;">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <button type="button" id="step1" class="position-absolute top-0 start-0 translate-middle p-0 btn-sm active rounded-pill">1</button>
                    <button type="button" id="step2" class="position-absolute top-0 translate-middle p-0 btn-sm rounded-pill">2</button>
                    <button type="button" id="step3" class="position-absolute top-0 translate-middle p-0 btn-sm rounded-pill">3</button>
                    <button type="button" id="step4" class="position-absolute top-0 start-100 translate-middle p-0 btn-sm rounded-pill">4</button>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div id="content1" class="row align-items-center gy-4">
                    <div class="col-md-8">
                        <h3>Open an <span class="text-gradient">Account</span></h3>
                        <p class="para-title">If you're not already a YaMarkets user, simply create an account. It's quick and easy.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/open-an-account.jpg" alt="Open an Account" class="img-fluid rounded" />
                    </div>
                </div>
                <div id="content2" class="row align-items-center gy-4 d-none">
                    <div class="col-md-8">
                        <h3>Connect with <span class="text-gradient">ZuluTrade</span></h3>
                        <p class="para-title">Link your YaMarkets account to ZuluTrade to start exploring their social trading features.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/connect-with-ZuluTrade.jpg" alt="Connect with ZuluTrade" class="img-fluid rounded" />
                    </div>
                </div>
                <div id="content3" class="row align-items-center gy-4 d-none">
                    <div class="col-md-8">
                        <h3>Explore and <span class="text-gradient">Invest</span></h3>
                        <p class="para-title">Discover a world of trading opportunities, follow experienced traders, and build your portfolio.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/explore-and-invest.jpg" alt="Explore and Invest" class="img-fluid rounded" />
                    </div>
                </div>
                <div id="content4" class="row align-items-center gy-4 d-none">
                    <div class="col-md-8">
                        <h3>Trade with <span class="text-gradient">Confidence</span></h3>
                        <p class="para-title">Utilize our tools and the ZuluTrade community to make well-informed trading decisions.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/web/img/trade-with-confidence.jpg" alt="Trade with Confidence" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section bg-black">
    <div class="container">
        <div class="row mb-3 mb-lg-5">
            <div class="col-lg-10 col-xl-8 col-xxl-7 mx-auto text-center">
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms">What Does This Collaboration <span class="text-gradient">Mean for You?</span></h2>
                <p class="para-title wow fadeInDown">Created by the industry leaders Implo is a comprehensive set of tools which are super easy to pick up and run. It gives you a huge leg up to create your own beautiful site.</p>
            </div>
        </div>
        <div class="row gy-4 forex-cards">
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="100ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/access-to-the-best.svg" class="img-fluid" alt="Access to the Best of Both Worlds">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0">Access to the Best of Both&nbsp;Worlds</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="200ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/copy-trading.svg" class="img-fluid" alt="Copy Trading">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0">Copy Trading</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="300ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/advanced-trading.svg" class="img-fluid" alt="Advanced Trading Tools">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0">Advanced Trading Tools</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card pb-3 text-center wow fadeInUp" data-wow-delay="400ms">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/img/customer-support.svg" class="img-fluid" alt="Exceptional Customer Support">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0">Exceptional Customer Support</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-btn mt-3 mt-md-5 text-center">
            <a href="https://yamarkets.zulutrade.com/" class="btn btn-primary mb-3 mb-md-0 wow fadeInUp" data-wow-delay="100ms">Join Now</a>
        </div>
    </div>
</section>

<section class="why-choose-zulutrade" style="background-image: url(<?= base_url() ?>public/web/img/why-zulutrade.png);">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 wow fadeInUp">
                <h2 class="wow fadeInUp">Why Choose <span class="text-gradient">YaMarkets x ZuluTrade?</span></h2>
                <ol class="policy-list mt-4">
                    <li>Safety and Security: Your funds and data are our top priorities. We've implemented rigorous security measures to protect your investments and personal information for the best social trading platforms.</li>
                    <li>User-Friendly Interface: Both YaMarkets and ZuluTrade are known for their user-friendly interfaces. You'll find it easy to navigate, trade, and manage your portfolio.</li>
                    <li>Global Reach: With a combined presence in numerous countries, we offer a truly international trading experience. Trade the markets you know and explore new opportunities worldwide.</li>
                </ol>
                <p class="mb-4">Exceptional Support: Our dedicated customer support teams are available around the clock to assist you with any questions or concerns.</p>
                <a href="https://yamarkets.zulutrade.com/" class="btn btn-outline-primary">Start Your Journey with Best copy trading brokers Today</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="title wow fadeInUp">Frequently Asked <span class="text-gradient">Questions</span></h2>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="100ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Can I use my MT4 account with ZuluTrade?
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>No, currently you can only trade with a Trading Station account on read-only mode</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="200ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Which platform is used to execute trades from ZuluTrade?
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>A Trading Station account on a read-only mode.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="300ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Does ZuluTrade offer any account balance protection?
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>ZuluTrade offers "ZuluGuard", which is a feature which first monitors each Trader's behavior and automatically removes a Trader when detecting a trading strategy has deviated from its expected loss profile. And second, it creates a protection shield for your investment capital based on your own settings when you follow a Trader or a Combo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="400ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    What are the differences between copy-trading with a Profit Sharing Model account vs a Classic Model account?
                                </button>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>With a profit sharing account:</p>
                                    <ol>
                                        <li>You don't have to pay ZuluTrade a commission per trade (volume-based fees) but rather a percentage of your profit only if the Trader(s) you follow has earned you a return on your investment. The monthly performance fee is 25%. The profit-sharing model (25%) is bound per Trader, not per account.</li>
                                        <li>In case of a less favourable monthly PnL, your expense would be lower as you would only pay a subscription fee of 30 USD and a performance fee to the Traders that provided you with a return, unlike volume-based trading, where you would have to cover a fee per trade irrespective of having a profitable month or not with the Trader you follow.</li>
                                        <li>You can benefit from YaMarkets's competitive spreads without having to worry about a mark-up which can end up affecting your overall trading costs.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="500ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Can I modify stops/limits after opening a position?
                                </button>
                            </h4>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>Trading with ZuluTrade allows you to either follow a) "individual" traders or b)"Combos Plus" system while also having the option to manually close all the positions of your portfolio (not individually for each trader or combo).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="600ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    Can I change the size of an open position?
                                </button>
                            </h4>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>Existing positions cannot be amended. You can only close existing positions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="700ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    Can I copy more than one Trader?
                                </button>
                            </h4>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>Yes, you can select, as many Traders are you wish. They all have performance related stats so you can select the ones that are appropriate to your risk appetite.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="700ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                    What is the minimum size?
                                </button>
                            </h4>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>You have the option to trade Micro, Mini and Standard lots. You can change this on the ZuluTrade platform under "Account" → "Settings". You can also adjust the settings to limit the total number of lots (mini) that can be open and/or pending at any one time in your ZuluTrade Account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordian-wrapper faq-wrapper bg-transparent wow fadeInUp" data-wow-delay="700ms">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent text-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                    Can I get other traders to follow me?
                                </button>
                            </h4>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white opacity-50">
                                    <p>Yes, you can provide signals via ZuluTrade by joining the Trader Program with an YaMarkets MT4 account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
