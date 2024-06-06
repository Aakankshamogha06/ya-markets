<section>
    <div class="container">
        <div class="row gy-5">
            <div class="col-12">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">Fast and reliable transfers supported by the most popular providers</h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms">Funding <span class="text-gradient">options</h2>
            </div>
        </div>
    </div>
</section>

<section class="funding-section pt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase active" id="deposit-tab" data-bs-toggle="tab" data-bs-target="#deposit-tab-pane" type="button" role="tab" aria-controls="deposit-tab-pane" aria-selected="true">
                            <span>Deposit</span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="withdraw-tab" data-bs-toggle="tab" data-bs-target="#withdraw-tab-pane" type="button" role="tab" aria-controls="withdraw-tab-pane" aria-selected="false">
                            <span>Withdraw</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content overflow-x-auto overflow-y-hidden mb-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="deposit-tab-pane" role="tabpanel" aria-labelledby="deposit-tab" tabindex="0">
                        <ul class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap">Regions Covered</li>
                            <li class="w-100 text-nowrap">Transfer fee</li>
                            <li class="w-100 text-nowrap">Funding Time</li>
                            <li class="w-100">*Note</li>
                        </ul>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">India</li>
                                <li class="w-100">No fee</li>
                                <li class="w-100">Instant</li>
                                <li class="w-100">*Upload Screenshot in the CRM</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img2.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">India</li>
                                <li class="w-100">No fee</li>
                                <li class="w-100">Instant</li>
                                <li class="w-100">*Upload Screenshot in the CRM</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img3.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">India</li>
                                <li class="w-100">No fee</li>
                                <li class="w-100">Instant</li>
                                <li class="w-100">*Upload Screenshot in the CRM</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="withdraw-tab-pane" role="tabpanel" aria-labelledby="withdraw-tab" tabindex="0">
                        <ul class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap">Regions Covered</li>
                            <li class="w-100 text-nowrap">Transfer fee</li>
                            <li class="w-100 text-nowrap">Funding Time</li>
                        </ul>
                        <?php for ($i = 0; $i < 6; $i++) { ?>
                            <div class="funding-wrapper">
                                <div class="position-absolute fix-pos">
                                    <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between text-center">
                                    <li class="w-100">India</li>
                                    <li class="w-100">No fee</li>
                                    <li class="w-100">Instant</li>
                                </ul>
                                <div class="position-absolute fix-pos">
                                    <a href="#" class="btn btn-primary">Deposit</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-content overflow-x-auto overflow-y-hidden" id="myTabContent">
                    <div class="tab-pane fade show active" id="deposit-tab-pane" role="tabpanel" aria-labelledby="deposit-tab" tabindex="0">
                        <ul class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap">Regions Covered</li>
                            <li class="w-100 text-nowrap">Transfer fee</li>
                            <li class="w-100 text-nowrap">Deposit Time</li>
                            <li class="w-100">Withdraw Time</li>
                        </ul>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">5%</li>
                                <li class="w-100">Instant</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Instant</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Instant</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Instant</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Up to 1 hour</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Up to 1 hour</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Up to 1 hour</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Up to 1 hour</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Up to 1 hour</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Up to 1 hour</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                        <div class="funding-wrapper">
                            <div class="position-absolute fix-pos">
                                <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between text-center">
                                <li class="w-100">All</li>
                                <li class="w-100">No Fee</li>
                                <li class="w-100">Up to 1 hour</li>
                                <li class="w-100">Up to 24 hours</li>
                            </ul>
                            <div class="position-absolute fix-pos">
                                <a href="#" class="btn btn-primary">Deposit</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="withdraw-tab-pane" role="tabpanel" aria-labelledby="withdraw-tab" tabindex="0">
                        <ul class="list-unstyled d-flex justify-content-between text-center mb-5 py-3 fw-medium text-uppercase opacity-50">
                            <li class="w-100 text-nowrap">Regions Covered</li>
                            <li class="w-100 text-nowrap">Transfer fee</li>
                            <li class="w-100 text-nowrap">Deposit Time</li>
                        </ul>
                        <?php for ($i = 0; $i < 6; $i++) { ?>
                            <div class="funding-wrapper">
                                <div class="position-absolute fix-pos">
                                    <img src="<?= base_url() ?>public/web/img/funding-img1.png" alt="India" class="img-fluid" />
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between text-center">
                                    <li class="w-100">India</li>
                                    <li class="w-100">No fee</li>
                                    <li class="w-100">Instant</li>
                                </ul>
                                <div class="position-absolute fix-pos">
                                    <a href="#" class="btn btn-primary">Deposit</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold">Supported Payment Systems</h5>
                <h2 class="title">For convenient <span class="text-gradient">deposits </span>
                    <div class="d-lg-block text-gradient">and withdrawals</div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms">Open live account</a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms">Open demo account</a>
                </div>
            </div>
        </div>
    </div>
</section>