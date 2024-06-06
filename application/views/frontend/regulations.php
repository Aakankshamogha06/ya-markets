<style>
    .box-container,
    .box-container .box>img {
        transform: rotate(0);
    }
</style>

<section class="pb-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('regulations_heading')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('regulations_subheading_1')?> <span class="text-gradient"><?=lang('regulations_subheading_2')?></span></h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4">
            <?php foreach ($certificate_view as $row) : ?>
                <div class="col-md-6">
                    <div class="linear-border wow fadeInUp" data-wow-delay="100ms">
                        <img src="<?php echo base_url('images/') . $row->image; ?>" alt="MWALI International Services Authority" class="img-fluid w-100" />
                        <a href="<?php echo base_url('images/') . $row->certificate; ?>" target="_blank" class="d-flex justify-content-between align-items-center certificate">
                            <p class="text-white fw-semibold mb-0">View certificate</p>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="payment-section bg-black">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow slideInLeft"><?=lang('liquidity_providers_heading')?></h5>
                <h2 class="title wow slideInLeft" data-wow-delay="200ms"><?=lang('liquidity_providers_subheading_1')?> <span class="text-gradient"></span><?=lang('liquidity_providers_subheading_2')?> <span class="text-gradient d-lg-block"><?=lang('liquidity_providers_subheading_3')?></span></h2>
            </div>
            <div class="col-lg-6">
                <div class="box-container">
                    <div class="box"></div>
                    <!-- Uncomment this section if you want to display the image -->
                    <!-- <div class="box wow bounceInDown" data-wow-delay="100ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/match-trade.png" alt="PayZapp" />
                    </div> -->
                    <div class="box wow bounceInDown" data-wow-delay="200ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/match-prime.png" alt="Visa" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="300ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/lmax.png" alt="Phone Pay" />
                    </div>
                    <!-- Uncomment this section if you want to display the image -->
                    <!-- <div class="box wow bounceInDown" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/cfh-claering.png" alt="UPI" />
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('supported_payment_systems_heading')?></h5>
                <h2 class="title"><?=lang('supported_payment_systems_subheading_1')?> <span class="text-gradient"><?=lang('supported_payment_systems_subheading_2')?></span>
                    <div class="d-lg-block text-gradient"><?=lang('supported_payment_systems_subheading_3')?></div>
                </h2>
            </div>
            <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>
