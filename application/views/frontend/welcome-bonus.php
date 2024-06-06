<style>
    @media (min-width: 992px) {

        #home::before {

            position: absolute;

            content: '';

            background-image: url(../public/web/img/promotion/50-bonus.png);

            background-size: contain;

            background-position: center;

            background-repeat: no-repeat;

            top: 0;

            left: 0;

            width: 60%;

            height: 100%;

        }

    }



    .hero-title {

        font-size: calc(1.775rem + 1.5vw);

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



    .platforms figure::after {

        position: absolute;

        content: '';

        inset: 0;

        background-color: #fac21185;

    }



    #contact a {

        color: #fffFFF8F;

    }



    #contact a:hover {

        color: #fac211;

    }



    .icon {

        width: 4rem;

        height: 4rem;

        border: 2px dashed #fac211;

        border-radius: 50%;

        margin-bottom: 1rem;

        display: grid;

        place-items: center;

        font-size: 1.5rem;

        color: #fff;

    }



    .cubic-hover::before {

        position: absolute;

        content: '';

        top: 0;

        left: 0;

        width: 100%;

        height: 14%;

        background-color: #fac2112b;

        border-radius: 1rem 1rem 0 0;

        z-index: 0;

        transition: all .3s ease-in;

        transition-timing-function: cubic-bezier(.04, .45, .56, .64);

    }



    @media (max-width: 767px) {

        .cubic-hover:hover {

            height: 13%;

        }

    }



    .cubic-hover:hover::before {

        height: 100%;

        border-radius: 1rem;

    }



    .steps-details {

        display: block;

        margin: 0 0 -4px;

    }



    .steps-details .steps-cont ul li {

        position: relative;

        padding: 105px;

        display: block;

        border-radius: 10px;

        margin: 0 0 -2px;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li {

            padding: 80px 50px;

        }

    }



    .steps-details .steps-cont ul li .mid-icons {

        position: absolute;

        bottom: -14px;

        background: rgba(57, 100, 208, 1);

        background: -moz-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -webkit-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -o-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -ms-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        left: 0;

        right: 0;

        margin: 0 auto;

        height: 28px;

        width: 28px;

        line-height: 24px;

        border-radius: 100%;

        z-index: 1;

        text-align: center;

    }



    .steps-details .steps-cont ul li .mid-icons img {

        display: inline-block;

    }



    .steps-details .steps-cont ul li:before {

        content: '';

        position: absolute;

        left: 48px;

        right: 48px;

        top: 0;

        bottom: 0;

        border-top: 2px solid #fac211;

        border-radius: 0;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li:before {

            left: 32px;

            right: 38px;

        }

    }



    .steps-details .steps-cont ul li:after {

        content: '';

        position: absolute;

        width: 14px;

        right: 34px;

        top: 0;

        bottom: 0;

        border-right: 2px solid #fac211;

        border-top: 2px solid #fac211;

        border-bottom: 2px solid #fac211;

        border-radius: 0 10px 10px 0;

    }



    .steps-details .steps-cont ul li:first-child:before {

        display: none;

    }



    .steps-details .steps-cont ul li:first-child:after {

        border-radius: 0 0 10px 0;

        border-top: none;

        /* height: 50%; */

        top: 150px;

    }



    .steps-details .steps-cont ul li.l-con {

        text-align: right;

        position: relative;

    }



    @media only screen and (max-width: 991px) {

        .steps-details .steps-cont ul li:first-child:after {

            top: 162px;

        }

    }



    @media only screen and (max-width: 767px) {

        .steps-details .steps-cont ul li:first-child:after {

            top: 145px;

        }

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li:after {

            right: 24px;

        }

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.l-con {

            padding-right: 70px;

            padding-left: 0;

        }

    }



    .steps-details .steps-cont ul li.l-con .cont h2 {

        margin: 0 0 5px;

        font-weight: 400;

        color: #fac211;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.l-con .cont h2 {

            font-size: 24px;

        }

    }



    .steps-details .steps-cont ul li.l-con .cont p {

        margin: 0;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.l-con .cont p {

            font-size: 14px;

        }

    }



    .steps-details .steps-cont ul li.l-con span {

        position: absolute;

        right: 0;

        width: 70px;

        height: 70px;

        background: rgba(57, 100, 208, 1);

        background: -moz-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -webkit-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -o-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -ms-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        color: #fff;

        font-size: 30px;

        border-radius: 100%;

        text-align: center;

        top: 39%;

        line-height: 70px;

        z-index: 1;

        display: grid;

        place-content: center;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.l-con span {

            height: 50px;

            width: 50px;

            line-height: 50px;

            font-size: 20px;

        }

    }



    .steps-details .steps-cont ul li.r-con {

        text-align: left;

        position: relative;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.r-con {

            padding-left: 70px;

            padding-right: 0;

        }

    }



    .steps-details .steps-cont ul li.r-con:after {

        left: 34px;

        right: inherit;

        border-left: 2px solid #fac211;

        border-right: none;

        border-radius: 10px 0 0 10px;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.r-con:after {

            left: 24px;

        }

    }



    .steps-details .steps-cont ul li.r-con:last-child:after {

        border-radius: 10px 0 0 0;

        border-bottom: 0;

        height: 50%;

    }



    .steps-details .steps-cont ul li.r-con .cont h2 {

        margin: 0 0 5px;

        font-weight: 400;

        color: #fac211;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.r-con .cont h2 {

            font-size: 24px;

        }

    }



    .steps-details .steps-cont ul li.r-con .cont p {

        margin: 0;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.r-con .cont p {

            font-size: 14px;

        }

    }



    .steps-details .steps-cont ul li.r-con span {

        position: absolute;

        left: 0;

        width: 70px;

        height: 70px;

        background: rgba(57, 100, 208, 1);

        background: -moz-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -webkit-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -o-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: -ms-linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        background: linear-gradient(90deg, rgb(66, 189, 172, 100%), rgb(255, 199, 28, 100%));

        color: #fff;

        font-size: 30px;

        border-radius: 100%;

        text-align: center;

        top: 39%;

        line-height: 70px;

        z-index: 1;

        display: grid;

        place-content: center;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li.r-con span {

            height: 50px;

            width: 50px;

            line-height: 50px;

            font-size: 20px;

        }

    }



    .steps-details .steps-cont ul li:nth-child(3):after {

        content: '';

        position: absolute;

        width: 55%;

        right: 34px;

        top: 0;

        bottom: 0;

        border-right: 2px solid #fac211;

        border-top: 2px solid #fac211;

        border-bottom: 2px solid #fac211;

        border-radius: 0 10px 10px 0;

    }



    .steps-details .steps-cont ul li:nth-child(4):before {

        content: '';

        position: absolute;

        left: 48px;

        right: inherit;

        width: 45%;

        top: 0;

        bottom: 0;

        border-top: 2px solid #fff;

        border-radius: 0;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li:nth-child(4):before {

            left: 32px;

        }

    }



    .steps-details .steps-cont ul li:nth-child(4):after {

        border-left: 2px solid #fff;

        border-top: 2px solid #fff;

        border-bottom: 2px solid #fff;

    }



    .steps-details .steps-cont ul li:nth-child(4) .cont h2 {

        margin: 0 0 5px;

        font-weight: 400;

        color: #fac211;

    }



    .steps-details .steps-cont ul li:nth-child(4) .cont p {

        margin: 0;

    }



    .steps-details .steps-cont ul li:nth-child(4) span {

        position: absolute;

        right: 0;

        width: 70px;

        height: 70px;

        line-height: 66px;

        border: 2px solid #ffffff;

        background: #0d0e11;

        color: #ffffff;

        font-size: 30px;

        border-radius: 100%;

        text-align: center;

        top: 39%;

        z-index: 1;

        display: grid;

        place-content: center;

    }



    @media only screen and (max-width: 480px) {

        .steps-details .steps-cont ul li:nth-child(4) span {

            height: 50px;

            width: 50px;

            line-height: 46px;

            font-size: 20px;

        }

    }



    .steps-details {

        background: #0d0e11;

    }



    @media (max-width: 991px) {

        .forex-page {

            height: auto !important;

        }

    }
</style>



<section id="home" class="forex-page d-flex align-items-center position-relative bg-linear-gradient border-0">

    <div class="container position-relative z-1">

        <div class="row g-4 align-items-center">

            <div class="col-lg-6">

                <img src="<?= base_url() ?>public/web/img/promotion/50-bonus.png" alt=" 50% Bonus for New Clients" class="d-lg-none img-fluid" />

            </div>

            <div class="col-lg-6 text-center text-lg-end">

                <h1 class="hero-title mb-3 wow fadeInUp">

                    <span class="text-gradient">50% Welcome Bonus</span>

                    <span class=""></span>

                </h1>

                <p class="mb-4 wow fadeInUp" data-wow-delay="200ms">

                    Start your trading journey with YaMarkets and enjoy a fantastic welcome offer! Receive a 50% bonus

                    for new clients , up to $500. Take advantage of this exclusive opportunity to boost your

                    trading power from the get-go.

                </p>

                <a href="#terms" class="btn btn-primary wow fadeInUp" data-wow-delay="400ms">Get Bonus</a>

            </div>

        </div>

    </div>

</section>



<section id="terms" class="bg-dark border-0 overflow-visible">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-5 col-xl-4">

                <div class="bg-linear-gradient border-0 p-5 text-center rounded">

                    <h4 class="mb-4">Extra Margin & Support&nbsp;Floating</h4>

                    <img src="<?= base_url() ?>public/web/img/promotion/50.png" alt="" class="img-fluid py-4" />

                    <div class="h1 mb-2"><span class="text-gradient">Welcome Bonus</span></div>

                    <p>Available for all Countries</p>

                    <button role="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Claim Bonus</button>

                </div>

            </div>

            <div class="col-lg-7 col-xl-8">

                <div class="py-3 position-sticky top-25">
                    <h2 class="title mb-3 wow fadeInUp">

                        <span class="text-gradient">Welcome Bonus for new clients  </span> 
    
                    </h2>
    
                    <p class="mb-4 wow fadeInUp" data-wow-delay="200ms">
    
                        Explore this exceptional offer available to you only at YaMarkets – our exclusive welcome bonus!
    
                        Here's all the information you need about this seasonal month-on-month offer.
    
                    </p>
                   

                    <p class="">Claim our welcome bonus offer today and power your trading experience with YaMarkets!

                    </p>

                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">

                        <li class="d-flex align-items-center gap-2">

                            <span><i class="fa-solid fa-check-double text-primary"></i></span>

                            <p class="mb-0">As a new client of YaMarkets, you qualify for a generous 50% bonus on your

                                initial deposit.</p>

                        </li>

                        <li class="d-flex align-items-center gap-2">

                            <span><i class="fa-solid fa-check-double text-primary"></i></span>

                            <p class="mb-0">You can receive up to a $500 bonus, giving you extra funds to start your

                                trading journey with confidence.</p>

                        </li>

                        <li class="d-flex align-items-center gap-2">

                            <span><i class="fa-solid fa-check-double text-primary"></i></span>

                            <p class="mb-0">With this bonus, your account gets an instant boost, giving you more capital

                                to trade with.</p>

                        </li>

                        <li class="d-flex align-items-center gap-2">

                            <span><i class="fa-solid fa-check-double text-primary"></i></span>

                            <p class="mb-0">Claiming is easy, make a deposit, and the bonus is ready to be claimed thus

                                simplifying your trading journey.</p>

                        </li>

                    </ul>

                    <p>

                        <small class="text-primary">* Any withdrawal or transfer out of amount will result in the total

                            removal of your current Welcome Bonus.</small>

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<section id="steps" class="steps-details bg-mg">

    <div class="container">

        <div class="row">

            <div class="col-12 text-center">

                <h2 class="title mb-2 wow fadeInUp">Get Your<span class="text-gradient"> 50% Bonus in Four Easy

                        Steps</span></h2>

                <p class="wow fadeInUp">Register, deposit funds and get your 50% Deposit Bonus to start trading</p>

            </div>

            <div class="col-xxl-8 col-md-10 col-12 offset-xxl-2 offset-md-1">

                <div class="steps-cont">

                    <ul class="list-unstyled">

                        <li class="l-con">

                            <div class="cont">

                                <h2>01. REGISTER</h2>

                                <p>Open and verify your account to access exclusive benefits.</p>

                            </div>

                            <span>

                                <i class="fa-solid fa-arrow-right-to-bracket"></i>

                            </span>

                        </li>

                        <li class="r-con">

                            <div class="cont">

                                <h2>02. DEPOSIT FUNDS</h2>

                                <p>Add funds to your account securely and conveniently.</p>

                            </div>

                            <span>

                                <i class="fa-solid fa-hand-holding-dollar"></i>

                            </span>

                        </li>

                        <li class="l-con">

                            <div class="cont">

                                <h2>03. CLAIM YOUR BONUS</h2>

                                <p>Receive your 50% Deposit Bonus automatically upon deposit.</p>

                            </div>

                            <span>

                                <i class="fa-solid fa-arrow-right-to-bracket"></i>

                            </span>

                            <div class="mid-icons"></div>

                        </li>

                        <li class="r-con">

                            <div class="cont">

                                <h2>04. BEGIN TRADING</h2>

                                <p>Start trading with boosted capital and capture lucrative opportunities.</p>

                            </div>

                            <span><i class="fa fa-university"></i></span>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="withdraw-section bg-black">

    <div class="container">

        <div class="row gy-lg-5 gy-4">

            <div class="col-lg-8 offset-lg-2 text-center">

                <h2 class="title mb-3"><span class="text-gradient">How Bonus is Shown in</span> Your Account</h2>

            </div>

            <div class="col-lg-5 offset-lg-1">

                <div class="position-relative linear-border rounded h-100">

                    <div class="p-4 cubic-hover">

                        <h2 class=" mb-4 text-center">Without Bonus:</h2>

                        <div class="mb-4 text-center"><i class="fa-brands fa-creative-commons-nc fa-4x text-primary"></i></div>

                        <div class="row gy-4">

                            <div class="col-6 text-primary">Initial Account Equity</div>

                            <div class="col-6 text-end">$1000</div>

                            <div class="col-6 text-primary">Deposit Bonus</div>

                            <div class="col-6 text-end">0</div>

                            <div class="col-6 text-primary">Total Account Equity</div>

                            <div class="col-6 text-end">$1000 ($1000 initial deposit only)</div>

                            <div class="col-6 text-primary">Trade Amount</div>

                            <div class="col-6 text-end">$100</div>

                            <div class="col-6 text-primary">Available Equity After Trade</div>

                            <div class="col-6 text-end">$900 ($1000 - $100)</div>

                        </div>

                        <div class="mt-4 text-center h1">

                            <span class="text-gradient">$900</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="position-relative linear-border rounded h-100">

                    <div class="p-4 cubic-hover">

                        <h2 class=" mb-4 text-center">With Bonus:</h2>

                        <div class="mb-4 text-center"><i class="fa-brands fa-dollar fa-4x text-primary"></i></div>

                        <div class="row gy-4">

                            <div class="col-6 text-primary">Initial Account Equity</div>

                            <div class="col-6 text-end">$1000</div>

                            <div class="col-6 text-primary">Deposit Bonus</div>

                            <div class="col-6 text-end">$500 (50% of your initial deposit)</div>

                            <div class="col-6 text-primary">Total Account Equity</div>

                            <div class="col-6 text-end">$1500 ($1000 initial deposit + $500 bonus)</div>

                            <div class="col-6 text-primary">Trade Amount</div>

                            <div class="col-6 text-end">$100</div>

                            <div class="col-6 text-primary">Available Equity After Trade</div>

                            <div class="col-6 text-end">$1400 ($1500 - $100)</div>

                        </div>

                        <div class="mt-4 text-center h1">

                            <span class="text-gradient">$1400</span>

                        </div>

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
                    <h2 class="title wow fadeInUp text-center mb-5">Terms & Conditions</h2>
                    <ol class="text-white opacity-50 wow fadeInUp">
                        <li>The promotion runs from the 01st of March until the 05th of May 2024.</li>
                        <li>The welcome offer is valid for new clients.</li>
                        <li>The maximum total bonus awarded per client is $500.</li>
                        <li>The Tradable Bonus only applies on deposits over $100.</li>
                        <li>New clients are entitled to receive a 50% bonus on their first deposit, for a max deposit upto $1000.</li>
                        <li>The 50% welcome bonus will be automatically credited to the relevant Trading Account upon the first deposit.</li>
                        <li>This bonus is applicable only to the initial deposit made by new clients during the promotional period.</li>
                        <li>Each new client can avail of the 50% welcome bonus offer once.</li>
                        <li>The welcome bonus can be used for trading without any restrictions.</li>
                        <li>Clients with depleted balances from losses can continue trading with the Bonus for a Maximum of 7 Days, to retain the bonus a re-deposit is mandatory within 7 days.</li>
                        <li>In the case that the Client will perform any withdrawal out of a Trading Account that has the 50% Welcome Bonus in it, a corresponding Bonus removal will automatically take place.</li>
                        <li>If the Company suspects or has reason to believe that a Client has abused the terms and conditions of this Bonus Program by hedging his positions internally (using other trading accounts held with Company) or externally (using other trading accounts held with other brokers), then the Company reserves the right, without the Client’s consent, to withdraw immediately the Tradable Bonus (and the Additional Bonus if applicable ) from the Client’s trading account(s) or from his winning hedged accounts.</li>
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

                <form action="<?=base_url('website/claim_bonus');?>" method="post" class="contact-form">

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



<script>
    let phone = document.querySelector("#phone");

    window.intlTelInput(phone, {

        autoPlaceholder: "off",

        initialCountry: "in",

        separateDialCode: true,

        utilsScript: "js/utils.js",

    });
</script>