<style>
    .trading-section {
        min-height: calc(100vh - 130px);
        display: flex;
        align-items: center;
        justify-content: center;
        background: url(https://img.freepik.com/free-photo/market-share-competitor-excellent-growing-with-stocks_1150-18258.jpg?t=st=1712898780~exp=1712902380~hmac=f0598b6b578be00a2da92fcf4e6ce40e70e26a52fa0a1225bb0218020fa5e7cd&w=1060) no-repeat;
        background-size: cover;
        background-position: center center;
        position: relative;
        z-index: 0;
    }

    .trading-section::before {
        position: absolute;
        content: "";
        inset: 0;
        background-color: #000;
        opacity: 0.5;
        z-index: -1;
    }


    .morph {
        animation: morph 3s linear infinite;
    }

    .demo-list>li {
        position: relative;
        list-style-type: none;
    }

    .demo-list>li::before {
        position: absolute;
        content: '';
        top: 5px;
        left: -1.7rem;
        width: 1rem;
        height: 1rem;
        background: url(../public/web/img/promotion/check.png) no-repeat;
        background-size: contain;
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

    .icon>img {
        filter: brightness(0.9) invert(.7) sepia(.5) hue-rotate(10deg) saturate(200%);
        width: 40px;
    }


    #exampleModal .form-floating>.form-control:not(:placeholder-shown)~label {
        background-color: #212529;
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

<section class="position-relative trading-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1 class="fw-bold display-3 mb-4 wow fadeInUp">Demo Trading <span class="text-primary">Platform</span></h1>
                <p class="mb-4 wow fadeInUp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur placeat mollitia commodi repellat laudantium animi quo exercitationem reiciendis eligendi iure?</p>
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Open Demo Account</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6">
                <h2 class="mb-2 wow fadeInLeft">What is a <span class="text-primary">Demo Account</span></h2>
                <p class="wow fadeInLeft">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni aut odio, saepe dicta laboriosam nemo dolorum tempora! Qui maxime officia laudantium vel architecto recusandae explicabo fuga! Odit quibusdam cupiditate itaque.</p>
                <h4 class="wow fadeInLeft">What can I expect?</h4>
                <ul class="demo-list wow fadeInLeft">
                    <li class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, consequuntur.</li>
                    <li class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ex deleniti rerum quis minima architecto.</li>
                    <li class="mb-2">Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum iure doloremque recusandae aliquid quo suscipit doloribus ipsam libero quaerat eos?</li>
                </ul>
                <a role="button" class="btn btn-primary wow fadeInUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Open Demo Account</a>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInRight">
                <img src="https://img.freepik.com/free-photo/application-contact-communication-connection-concept_53876-120049.jpg?t=st=1712911939~exp=1712915539~hmac=44226f8e314181a0cd785301696ec0efcc62b374a5a6c738bfe04eca68e85d55&w=996" alt="" class="img-fluid morph" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4 why-choose-us">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-2 wow fadeInUp">Why <span class="text-primary">Choose YaMarkets?</span></h2>
                <p class="mb-4 wow fadeInUp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus laboriosam in pariatur. Iure ea nisi ab corrupti facilis culpa quod molestias, similique eaque nesciunt cupiditate quia sunt blanditiis ex veniam!</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="100ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/expertise-and-reliability.svg" alt="Expertise and Reliability" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary">Expertise and Reliability</h5>
                        <p class="mb-0">Benefit from YaMarkets' extensive expertise and reliability in the Forex and CFD
                            markets, ensuring a dependable and safe trading experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="200ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/advance-trading-tools.svg" alt="Advance Trading Tools" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary">Advance Trading Tools</h5>
                        <p class="mb-0">Trade using innovative trading tools and technology that empower your trading
                            strategies and keeps you ahead in your trading game.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="300ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/secure-environment.svg" alt="Secure Environment" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary">Secure Environment</h5>
                        <p class="mb-0">Trade with confidence knowing that YaMarkets prioritizes security, providing a
                            safe and transparent platform for your funds and transactions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card wow slideInDown" data-wow-delay="400ms">
                    <div class="card-body">
                        <div class="icon">
                            <img src="<?= base_url() ?>public/web/img/diverse-trading-opportunities.svg" alt="Diverse Trading Opportunities" class="img-fluid" />
                        </div>
                        <h5 class="card-title mb-2 text-primary">Diverse Trading Opportunities</h5>
                        <p class="mb-0">Explore a wide range of trading instruments and competitive spreads, offering
                            diverse opportunities for traders at all levels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark reward-section position-relative overflow-visible">
    <div class="container">
        <div class="row gy-4 align-items-center text-center text-lg-start">
            <div class="col-lg-5 wow fadeInLeft">
                <img src="https://images.unsplash.com/photo-1644924735973-0ba06d83268e?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid morph object-fit-cover" />
            </div>
            <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                <h2 class="fw-semibold mb-3">Try with free money before <span class="text-primary">doing Live&nbsp;trading</span></h2>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quae, pariatur, corporis eaque architecto sint eos qui atque eius nostrum enim hic. Aspernatur iure porro, in esse dicta eligendi, est quia fugiat reprehenderit quos dolore assumenda eaque accusamus perspiciatis laborum voluptates nostrum quam officia illum, nemo qui cumque. At nulla suscipit voluptatem veritatis possimus dolorum debitis illo, voluptatum iusto sed.</p>
                <button role="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Open Demo Account</button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-md-6 wow fadeInLeft text-center text-md-start">
                <h3>Download MT5 <span class="text-primary">Mobile Trader</span></h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat, vel, amet sed enim laudantium architecto nisi illo illum a officia ex consequatur perferendis sit assumenda. Quia atque velit nulla doloribus obcaecati. Maiores natus molestias fugit excepturi cumque, culpa dolore.</P>
                <a href="#" class=" btn bg-body">
                    <img src="<?= base_url() ?>/public/web/img/promotion/google-play-btn-en.svg" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-6 wow fadeInRight text-center">
                <img src="https://dummyimage.com/400x400" alt="" class="img-fluid rounded" />
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
                            <button type="submit" class="btn btn-outline-primary px-5 py-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>