<style>
    section {
        padding: 100px 0;
    }

    .trading-section {
        min-height: calc(100vh - 130px);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        --bs-card-spacer-y: 1.5rem;
        --bs-card-spacer-x: 1.5rem;
    }

    .card>.card-body.text-white:hover {
        background: #000;
    }

    .get-card {
        --bs-card-bg: #0d0e11;
        --bs-card-border-width: 0;
        transition: all .3s ease;
    }

    .get-card:hover {
        transform: translateY(-12px) scale(1.04);
    }

    #exampleModal .form-floating>.form-control:not(:placeholder-shown)~label {
        background-color: #212529;
    }

    @media (max-width: 991px) {
        .col-rev {
            flex-direction: column-reverse;
        }
    }

    @media (max-width: 767px) {
        .trading-section {
            min-height: 100%;
        }

        .trading-section .container>.row {
            flex-direction: column-reverse;
        }
    }
</style>

<section class="trading-section position-relative overflow-hidden">
    <div class="container position-relative z-1">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="fw-bold display-5 mb-3 wow fadeInUp">User <span class="text-primary">Friendly</span></h1>
                <p class="mb-4 wow fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut odio dolores ut sit libero qui aperiam, quisquam ducimus magnam, esse nesciunt earum recusandae ipsum laborum maiores ex a cumque.</p>
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Open Demo Account</a>
            </div>
            <div class="col-lg-6 col-xxl-5 offset-xxl-1 text-center wow fadeInUp">
                <img src="https://images.ctfassets.net/hzjmpv1aaorq/3Xgt4obLwWQwVpz89pUP33/8fcdcecb7cd85d841ae55553aa7e2f59/hero-image.webp?fm=webp&q=80" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 180" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path style="transform:translate(0, 0px); opacity:1" fill="#1b1b1b" d="M0,90L40,90C80,90,160,90,240,102C320,114,400,138,480,135C560,132,640,102,720,96C800,90,880,108,960,96C1040,84,1120,42,1200,21C1280,0,1360,0,1440,15C1520,30,1600,60,1680,72C1760,84,1840,78,1920,87C2000,96,2080,120,2160,120C2240,120,2320,96,2400,90C2480,84,2560,96,2640,96C2720,96,2800,84,2880,66C2960,48,3040,24,3120,39C3200,54,3280,108,3360,108C3440,108,3520,54,3600,39C3680,24,3760,48,3840,48C3920,48,4000,24,4080,36C4160,48,4240,96,4320,105C4400,114,4480,84,4560,60C4640,36,4720,18,4800,30C4880,42,4960,84,5040,105C5120,126,5200,126,5280,105C5360,84,5440,42,5520,30C5600,18,5680,36,5720,45L5760,54L5760,180L5720,180C5680,180,5600,180,5520,180C5440,180,5360,180,5280,180C5200,180,5120,180,5040,180C4960,180,4880,180,4800,180C4720,180,4640,180,4560,180C4480,180,4400,180,4320,180C4240,180,4160,180,4080,180C4000,180,3920,180,3840,180C3760,180,3680,180,3600,180C3520,180,3440,180,3360,180C3280,180,3200,180,3120,180C3040,180,2960,180,2880,180C2800,180,2720,180,2640,180C2560,180,2480,180,2400,180C2320,180,2240,180,2160,180C2080,180,2000,180,1920,180C1840,180,1760,180,1680,180C1600,180,1520,180,1440,180C1360,180,1280,180,1200,180C1120,180,1040,180,960,180C880,180,800,180,720,180C640,180,560,180,480,180C400,180,320,180,240,180C160,180,80,180,40,180L0,180Z"></path>
    </svg>
</section>

<section style="background-color: #1b1b1b;">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-lg-8 offset-lg-2 text-center wow fadeInUp">
                <h2 class="title mb-3">Lorem <span class="text-primary">Ipsum</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque aperiam soluta alias, ratione neque tenetur! Tempore, sint veritatis incidunt atque, consectetur temporibus modi fugiat adipisci unde nam quos quidem?</p>
            </div>
            <div class="col-lg-6 col-sm-6 wow fadeInLeft">
                <div class="card h-100 linear-border bg-transparent">
                    <div class="card-body text-white">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-3 text-center">
                                <div class="display-5 fw-semibold mb-3 mb-lg-0">5</div>
                            </div>
                            <div class="col-lg-9 text-center text-lg-start">
                                <h5 class="card-title text-primary">User friendly/Easy To Use trading&nbsp;Platforms</h5>
                                <p class="mb-0 card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, voluptas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp">
                <div class="card h-100 linear-border bg-transparent">
                    <div class="card-body text-center text-white">
                        <div class="display-5 fw-semibold mb-3">100</div>
                        <h5 class="card-title text-primary">Low Trading Charges</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, veniam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp">
                <div class="card h-100 linear-border bg-transparent">
                    <div class="card-body text-center text-white">
                        <div class="display-5 fw-semibold mb-3">5000</div>
                        <h5 class="card-title text-primary">Easy Deposits and Withdrawal</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, veniam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp">
                <div class="card h-100 linear-border bg-transparent">
                    <div class="card-body text-center text-white">
                        <div class="display-5 fw-semibold mb-3">1000</div>
                        <h5 class="card-title text-primary">A Freee Demo Account</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, veniam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp">
                <div class="card h-100 linear-border bg-transparent">
                    <div class="card-body text-center text-white">
                        <div class="display-5 fw-semibold mb-3">100+</div>
                        <h5 class="card-title text-primary">Instruments</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, veniam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 wow fadeInRight">
                <div class="card h-100 linear-border bg-transparent">
                    <div class="card-body text-white">
                        <div class="row align-items-center col-rev h-100">
                            <div class="col-lg-9 text-center text-lg-start">
                                <h5 class="card-title text-primary">Social Trading Platform</h5>
                                <p class="mb-0 card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, veniam!</p>
                            </div>
                            <div class="col-lg-3 text-center">
                                <div class="display-5 fw-semibold  mb-3 mb-lg-0">10</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 col-lg-8 offset-lg-2 text-center wow fadeInUp">
                <h2 class="title mb-3">How to <span class="text-primary">get started</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati fugiat adipisci consectetur architecto cum dolor voluptates quo. Repellat ea, accusantium est voluptas quam, quasi eaque suscipit adipisci iusto ut placeat?</p>
            </div>
            <div class="col-md-4">
                <div class="get-card card h-100 text-center wow fadeInUpBig" data-wow-delay="100ms">
                    <div class="card-body ">
                        <h5 class="mb-3 card-title text-primary fw-semibold">Open an account</h5>
                        <figure class="">
                            <img src="https://cdn-icons-png.flaticon.com/512/9677/9677108.png" alt="Open an account" class="img-fluid" width="80" height="80" />
                            <!-- <i class="fa-solid fa-key text-primary fa-3x"></i> -->
                        </figure>
                        <p class="mb-0 card-text">Click the button below and follow our easy account setup process</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="get-card card h-100 text-center wow fadeInUpBig" data-wow-delay="200ms">
                    <div class="card-body ">
                        <h5 class="mb-3 card-title text-primary fw-semibold">Make a deposit</h5>
                        <figure class="">
                            <!-- <i class="fa-solid fa-money-bill-transfer text-primary fa-3x"></i> -->
                            <img src="https://cdn-icons-png.flaticon.com/512/7828/7828336.png" alt="Make a deposit" class="img-fluid" width="80" height="80" />
                        </figure>
                        <p class="mb-0 card-text">Get ready to take advantage of the next trading opportunity</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="get-card card h-100 text-center wow fadeInUpBig" data-wow-delay="300ms">
                    <div class="card-body ">
                        <h5 class="mb-3 card-title text-primary fw-semibold">Start trading</h5>
                        <figure class="">
                            <img src="https://cdn-icons-png.flaticon.com/512/9321/9321148.png" alt="Start trading" class="img-fluid" width="80" height="80" />
                            <!-- <i class="fa-solid fa-building-columns text-primary fa-3x"></i> -->
                        </figure>
                        <p class="mb-0 card-text">Open your trading platform and place your first trade with YaMarkets</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-2">Why <span class="text-primary">Choose Us</span>?</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora nostrum dignissimos architecto aut hic perferendis repellendus praesentium aliquid non eum?</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/promotion.exness.com/en/instant_1121/c6a57e7e-group-1616-1_10ei095000000000000000.png" alt="" class="img-fluid rounded-3" />
                            <div class="position-absolute bottom-0 start-0 bg-black opacity-75 px-3 py-2 w-100">
                                <p class="mb-0 text-primary">Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/promotion.exness.com/en/instant_1121/c6a57e7e-group-1616-1_10ei095000000000000000.png" alt="" class="img-fluid rounded-3" />
                            <div class="position-absolute bottom-0 start-0 bg-black opacity-75 px-3 py-2 w-100">
                                <p class="mb-0 text-primary">Lorem ipsum</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="position-relative mt-4">
                    <img src="https://d9hhrg4mnvzow.cloudfront.net/promotion.exness.com/en/instant_1121/c6a57e7e-group-1616-1_10ei095000000000000000.png" alt="" class="img-fluid rounded-3" />
                    <div class="position-absolute bottom-0 start-0 bg-black opacity-75 px-3 py-2 w-100">
                        <p class="mb-0 text-primary">Lorem ipsum dolor sit amet consectetur</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="position-relative">
                    <img src="https://d9hhrg4mnvzow.cloudfront.net/promotion.exness.com/en/instant_1121/c6a57e7e-group-1616-1_10ei095000000000000000.png" alt="" class="img-fluid w-100 object-fit-cover rounded-3" style="height: 513px;" />
                    <div class="position-absolute bottom-0 start-0 bg-black opacity-75 px-3 py-2 w-100">
                        <p class="mb-0 text-primary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, harum?</p>
                    </div>

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