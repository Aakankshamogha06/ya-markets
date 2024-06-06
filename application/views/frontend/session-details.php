<?php
foreach ($session_detail as $row) { ?>
<section class="withdraw-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="title mb-3 wow fadeInLeftBig" data-wow-delay="200ms"><?=$row->session_name?></h2>
                <p class="text-gradient fw-semibold d-inline-block wow fadeInLeftBig">By YaMarkets
                    <span class="d-inline-block px-2"> • </span>
                    <span class="date"><?=$row->session_date?></span>
                    <span class="d-inline-block px-2"> • </span>
                    <span class="views"><?=$row->session_time?></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-9 mx-auto">
                <img src="<?php echo base_url('images/') . $row->detailed_img; ?>" alt="<?=$row->session_name?>"
                    class="img-fluid mb-4 rounded-3 pe-none wow fadeInUp" />
                <div class="mb-5 wow fadeInUp">
                    <?= $row->long_desc ?>
                </div>
                <div class="blog-list ps-lg-4 mb-5 wow fadeInUp">
                    <h5 class="text-primary mb-4">How to enable 2FA in YaMarkets CRM for MT5 Trading applications</h5>
                    <ol class="text-white">
                        <li class="pb-3">To enable 2FA authentication, you need to install the Google authenticator app
                            on your iOS or android device</li>
                        <li class="pb-3">Login to your CRM of MT5 Trading App</li>
                        <li class="pb-3">Under the two factor authentication in my profile section, generate a six digit
                            security code by scanning the QR code using Google authenticator app</li>
                        <li class="pb-3">Enter the six digit security code in the box</li>
                        <li class="pb-3">Your wallet is protected with 2- factor authentication.</li>
                    </ol>
                </div>
                <div class="mb-5 wow fadeInUp">
                    <h6 class="mb-3">Please find below the screenshot of the MT5 trading app, that will help you
                        understand easily to enable&nbsp;2FA</h6>
                    <div class="row gy-4 mb-3">
                        <div class="col-md-6">
                            <img src="./img/ss1.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="col-md-6">
                            <img src="./img/ss2.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <p>2FA provides you the additional layer of security even when trading account's login and password
                        are compromised. The 2FA authentication prevents unlawful access to make traders feel more
                        assured.</p>
                </div>
                <div class="get-started text-center wow fadeInUp">
                    <h3 class="fw-semibold mb-3">If You Are <span class="text-gradient">Interested!</span></h3>
                    <p>Kindly complete the registration process</p>
                    <div class="group-btn mt-4">
                        <button class="btn btn-primary reg" data-wow-delay="100ms" data-bs-toggle="modal"
                        value="<?= $row->id ?>" data-bs-target="#exampleModal<?= $row->id ?>">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<div class="modal fade" id="exampleModal<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <div class="modal-title fs-4 fw-semibold" id="exampleModalLabel">Register Yourself</div>
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('website/session_data_submit_data') ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" id="ctext" name="session_id" value="<?= $row->id ?>">
                                <label for="name" class="d-none">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="d-none">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile_no" class="d-none">Phone</label>
                                <input type="tel" class="form-control" id="mobile_no" name="mobile_no"
                                    pattern="{0-9}[10]" placeholder="+91 XXXXXXXXX" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location" class="d-none">Location</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Location"
                                    required>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary text-uppercase">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>