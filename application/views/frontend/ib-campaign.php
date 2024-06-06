<style>
    #home::before {
        position: absolute;
        content: '';
        background-image: linear-gradient(to left, #000000, #241f10);
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        opacity: 0.9;
    }

    @media (min-width: 992px) {


        .icon.arr::before {
            position: absolute;
            content: '';
            right: -65px;
            width: 120px;
            height: 25px;
            background: url(../public/web/img/promotion/step-arrow.png) no-repeat;

        }
    }

    .hero-title {
        font-size: calc(1.775rem + 1.5vw);
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

    .table> :not(caption)>*>* {
        --bs-table-bg: transparent;
        border-color: #fac21133;
        color: #fff;
    }

    .ib-campaign {
        background-image: url('../public/web/img/promotion/bg.jpg') !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        padding-top: 100px;
        padding-bottom: 100px !important;
    }

    .bg-image {
        background-image: url('img/promotion/bg-2.png') !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }

    #overlay::before {
        position: absolute;
        content: '';
        background-image: linear-gradient(to left, #000000, #9d7600);
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        opacity: .3;
    }


    .box-wrap {
        background: #0d0e11;
        box-shadow: 0 0 10px rgb(0 0 0/52%);
        padding: 20px;
        height: 100%;
        border-radius: 11px;

    }

    .box-wrap .card-body {
        padding: 0
    }

    .mt-top {
        margin-top: -190px;
    }

    .ptb {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .pb {
        padding-bottom: 150px !important;
    }


    .carousel {
        position: relative;
        width: 100%;
        margin: 0 auto;
        max-width: 500px;
        min-height: 500px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .carousel__item {
        display: flex;
        align-items: center;
        position: absolute;
        width: 100%;
        padding: 0 12px;
        opacity: 0;
        will-change: transform, opacity;
        -webkit-animation: carousel-animate-vertical 27s linear infinite;
        animation: carousel-animate-vertical 27s linear infinite;
    }

    .carousel__item:nth-child(1) {
        -webkit-animation-delay: calc(3s * -1);
        animation-delay: calc(3s * -1);
    }

    .carousel__item:nth-child(2) {
        -webkit-animation-delay: calc(3s * 0);
        animation-delay: calc(3s * 0);
    }

    .carousel__item:nth-child(3) {
        -webkit-animation-delay: calc(3s * 1);
        animation-delay: calc(3s * 1);
    }

    .carousel__item:nth-child(4) {
        -webkit-animation-delay: calc(3s * 2);
        animation-delay: calc(3s * 2);
    }

    .carousel__item:nth-child(5) {
        -webkit-animation-delay: calc(3s * 3);
        animation-delay: calc(3s * 3);
    }

    .carousel__item:nth-child(6) {
        -webkit-animation-delay: calc(3s * 4);
        animation-delay: calc(3s * 4);
    }

    .carousel__item:nth-child(7) {
        -webkit-animation-delay: calc(3s * 5);
        animation-delay: calc(3s * 5);
    }

    .carousel__item:nth-child(8) {
        -webkit-animation-delay: calc(3s * 6);
        animation-delay: calc(3s * 6);
    }

    .carousel__item:last-child {
        -webkit-animation-delay: calc(-3s * 2);
        animation-delay: calc(-3s * 2);
    }

    .carousel__item-head {
        border-radius: 50%;
        background-color: #f9c213;
        width: 80px;
        height: 80px;
        padding: 14px;
        position: relative;
        margin-right: -45px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
        z-index: 5;
    }

    .carousel__item-body {
        width: 100%;
        background-color: #000000;
        border-radius: 8px;
        padding: 20px 20px 20px 70px;
    }

    .steps-section .title {
        text-transform: uppercase;
        font-size: 22px;
        color: #f9c213;
        line-height: 1;
    }

    .steps-section .p {

        color: #fff;

    }

    .steps-section {
        padding: 0;
        padding-bottom: 60px;
    }

    .video-wrapper {
        background: #0d0e11;
        box-shadow: 0 0 10px rgb(0 0 0/52%);
        padding: 40px 20px;
        border-radius: 11px;
    }

    @-webkit-keyframes carousel-animate-vertical {
        0% {
            transform: translateY(100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }

        3%,
        11.1111111111% {
            transform: translateY(100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        14.1111111111%,
        22.2222222222% {
            transform: translateY(0) scale(1);
            opacity: 1;
            visibility: visible;
        }

        25.2222222222%,
        33.3333333333% {
            transform: translateY(-100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        36.3333333333% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: visible;
        }

        100% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }
    }

    @keyframes carousel-animate-vertical {
        0% {
            transform: translateY(100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }

        3%,
        11.1111111111% {
            transform: translateY(100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        14.1111111111%,
        22.2222222222% {
            transform: translateY(0) scale(1);
            opacity: 1;
            visibility: visible;
        }

        25.2222222222%,
        33.3333333333% {
            transform: translateY(-100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        36.3333333333% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: visible;
        }

        100% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }
    }

    @media(max-width:767.98px) {
        .order-xs-2 {
            order: 2;
        }

        .order-xs-1 {
            order: 1;
        }

        .pt-xs-0 {
            padding-top: 0 !important;
        }
    }
</style>

<section id="home" class="ib-campaign d-flex align-items-center position-relative pb-lg-0">
    <div class="container position-relative z-1">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 order-xs-2 text-center"><img src="<?= base_url() ?>public/web/img/promotion/web.png" alt="" class="wow fadeInUp w-75" data-wow-delay="200ms"></div>
            <div class="col-lg-6 order-xs-1 offset-lg-1">
                <h1 class="hero-title mb-3 wow fadeInUp">
                    <span class="text-gradient">Elite </span>
                    <span class="">IB Program</span>
                </h1>
                <!-- <h1 class="hero-title mb-3 wow fadeInUp">
                    <span class="text-gradient">Experience the Power of Partnership with YaMarkets </span>
                    <span class="">- Where Success Begins</span>
                </h1> -->
                <p class="mb-4 wow fadeInUp" data-wow-delay="200ms">
                    At YaMarkets, we are dedicated to empowering traders worldwide with cutting-edge tools and resources to excel in the dynamic world of financial markets. As a testament to our commitment, we are thrilled to introduce our latest IB Reward Program.
                </p>
                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary wow fadeInUp" data-wow-delay="400ms">Get Bonus</a>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 text-center">
                <h2 class="title wow fadeInRightBig mb-2">Unlock Your Potential with our <span class="text-gradient">IB Reward Program</span></h2>
                <p class="mb-5 wow fadeInRightBig">Are you ready to maximize your earnings as an Introducing Broker (IB)? Look no further. Our IB Reward Program offers an unparalleled opportunity for you to amplify your income and thrive in the trading landscape.</p>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3 class="text-center text-primary">Reward</h3>
                        <div class="table-responsive wow fadeInRightBig">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="text-primary">Net Deposit</th>
                                        <th class="text-primary">Rewards</th>
                                        <th class="text-primary">Lots</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1$ to $24999</td>
                                        <td>Rs 1</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>$25000 to $49999</td>
                                        <td>Rs 2</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>$50000 above</td>
                                        <td>Rs 3</td>
                                        <td>300</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-center text-primary">South Africa Reward</h3>
                        <div class="table-responsive wow fadeInRightBig">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="text-primary">Net Deposit</th>
                                        <th class="text-primary">Rewards</th>
                                        <th class="text-primary">Lots</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>$1 to $4999</td>
                                        <td>SAR 1</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>$5000 to $19999</td>
                                        <td>SAR 2</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>$20000 above</td>
                                        <td>SAR 3</td>
                                        <td>300</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="terms" class="bg-dark border-0 steps-section d-flex align-items-center pt-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1 class="my-4 text-white">Why Partner with <span class="text-gradient">YaMarkets as an IB?</span></h1>

            </div>
            <div class="col-lg-6">
                <div class='wrapper'>
                    <div class='carousel'>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body linear-border '>
                                <p class='title mb-2  mt-0'>Generous Rewards</p>
                                <p class="mb-0">Our IB Reward program offers generous incentives tailored to recognize the efforts of our partners.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body  linear-border'>
                                <p class='title mb-2  mt-0'>Flexible Partnership Structure</p>
                                <p class="mb-0">We understand that every partner has unique needs and preferences. </p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body  linear-border'>
                                <p class='title mb-2 mt-0'>Dedicated Support</p>
                                <p class="mb-0">As an IB with YaMarkets, you're never alone on your journey to success. </p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body  linear-border'>
                                <p class='title mb-2 mt-0'>Cutting-Edge Technology</p>
                                <p class="mb-0">With lightning-fast execution and robust security measures, you can trust YaMarkets to meet the evolving needs of your clients.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body linear-border '>
                                <p class='title mb-2  mt-0'>Generous Rewards</p>
                                <p class="mb-0">Our IB Reward program offers generous incentives tailored to recognize the efforts of our partners.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body  linear-border'>
                                <p class='title mb-2 mt-0'>Dedicated Support</p>
                                <p class="mb-0">As an IB with YaMarkets, you're never alone on your journey to success. </p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body  linear-border'>
                                <p class='title mb-2  mt-0'>Flexible Partnership Structure</p>
                                <p class="mb-0">We understand that every partner has unique needs and preferences. </p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body  linear-border'>
                                <p class='title mb-2 mt-0'>Dedicated Support</p>
                                <p class="mb-0">As an IB with YaMarkets, you're never alone on your journey to success. </p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class='carousel__item-body  linear-border'>
                                <p class='title mb-2 mt-0'>Cutting-Edge Technology</p>
                                <p class="mb-0">With lightning-fast execution and robust security measures, you can trust YaMarkets to meet the evolving needs of your clients.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 pt-4 pt-xs-0 text-center wow fadeInUp" data-wow-delay="300ms">
                <img src="<?= base_url() ?>public/web/img/promotion/banner-left.png" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<section id="howItWorks" class="how-it-works bg-black system pb">
    <div class="container">
        <div class="container position-relative z-1">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <h2 class="title mb-4"><span class="text-gradient">How to </span>Get Started</h2>
                    <buttom role="button" class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Claim Bonus</buttom>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="container mt-top ptb">
    <div class="row g-4">
        <div class="col-lg-3 col-md-6">
            <div class="box-wrap linear-border wow fadeInUp">
                <div class="card bg-transparent position-relative">
                    <div class="card-body text-center">
                        <div class="icon  mx-auto">
                            <i class="fa-regular fa-handshake"></i>
                        </div>
                        <h5 class="card-title text-primary">Join YaMarkets</h5>
                        <p class="card-text">If you're not already a part of our community, sign up today and become a YaMarkets Introducing Broker.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="box-wrap mt-4 linear-border wow fadeInDown" data-wow-delay="200ms">
                <div class="card bg-transparent position-relative">
                    <div class="card-body text-center">
                        <div class="icon  mx-auto">
                            <i class="fa-solid fa-share-nodes"></i>
                        </div>
                        <h5 class="card-title text-primary">Promote YaMarkets</h5>
                        <p class="card-text">Spread the word about YaMarkets and our cutting-edge trading services to your network.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="box-wrap linear-border wow fadeInUp" data-wow-delay="400ms">
                <div class="card bg-transparent position-relative">
                    <div class="card-body text-center">
                        <div class="icon  mx-auto">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h5 class="card-title text-primary">Earn Rewards</h5>
                        <p class="card-text">As your referred traders engage in trading activities, you'll start earning rewards based on their performance.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="box-wrap  mt-4 linear-border wow fadeInDown" data-wow-delay="600ms">
                <div class="card bg-transparent position-relative">
                    <div class="card-body text-center">
                        <div class="icon  mx-auto">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <h5 class="card-title text-primary">Enjoy the Benefits</h5>
                        <p class="card-text">Sit back, relax, and enjoy the benefits of being a part of the YaMarkets family. With our IB Reward program, your success is our success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="overlay" class="bg-image position-relative" style="background-image: url('../public/web/img/promotion/bg-shape.png')!important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <h2 class="title mb-2 wow fadeInUp" data-wow-delay="200ms">Join the <span class="text-gradient">YaMarkets Family Today</span></h2>
                <p class="mb-4 text-white wow fadeInUp" data-wow-delay="400ms">Embark on a rewarding partnership with YaMarkets and elevate your earning potential as an Introducing Broker. With our IB Reward Program, the opportunities are limitless, and your success knows no bounds.</p>
                <p class="mb-4 text-white wow fadeInUp" data-wow-delay="600ms">Ready to take the next step? Sign up as an IB with YaMarkets today and seize the rewards of a thriving partnership.</p>
            </div>
            <div class="col-lg-6">
                <div class="video-wrapper linear-border">
                    <div class="video-box">
                        <a role="button" class="play-btn youtube-btn" youtubeid="Sh6d8pkaZPU">
                            <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.78861 23.0176C2.17908 23.4138 1.56223 23.437 0.93807 23.0871C0.313908 22.7372 0.00121907 22.196 0 21.4633V2.53732C0 1.80588 0.312689 1.26462 0.93807 0.913525C1.56345 0.562435 2.1803 0.585597 2.78861 0.983012L17.6917 10.446C18.2403 10.8117 18.5145 11.3298 18.5145 12.0003C18.5145 12.6708 18.2403 13.1889 17.6917 13.5546L2.78861 23.0176Z" fill="#FAC211"></path>
                            </svg>
                        </a>
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
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('website/elite_rewards_submit_data');?>" method="post" class="contact-form">
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