<style>
    .awards-slider img {
        height: 100px;
        object-fit: contain;
        margin: auto;
    }
</style>

<section class="hero-section py-0">
    <div class="container">
        <img src="<?= base_url() ?>public/web/img/graph.png" alt="Stock Graph" class="img-fluid pe-none" />
        <div class="row">
            <div class="col-12">
                <div class="position-absolute z-2 hero-text">
                    <!-- <p class="text-primary text-uppercase sub-heading wow fadeInUp" data-wow-delay="100ms">the future of Trading</p> -->
                    <p class="text-primary text-uppercase sub-heading wow fadeInUp" data-wow-delay="100ms"><?= lang('hero_section_heading') ?></p>

                    <div class="hero-slider">
                        <?php foreach ($slider_view as $row) : ?>
                            <div>
                                <div class="hero-title wow fadeInUp" data-wow-delay="300ms"><?= $row->content1 ?>&nbsp<span class="text-gradient"><?= $row->content ?></span></div>
                                <p class="wow fadeInUp" data-wow-delay="600ms"><?= $row->sub_content ?></p>
                                <div class="group-btn">
                                    <a href="<?= $row->btn1_link ?>" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?= $row->btn1_h ?></a>
                                    <a href="<?= $row->btn2_link ?>" class="btn btn-secondary ms-sm-2 wow fadeInUp" data-wow-delay="300ms"><?= $row->btn2_h ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="group-card position-relative z-2 py-lg-0 pt-0">
    <div class="container gy-4">
        <div class="d-grid">
            <div class="card">
                <p class="mb-2">
                    <small class="text-uppercase"><?= lang('group_card_section_account_leverage') ?></small>
                </p>
                <h3 class="text-primary mb-0 fw-bold">1:1000</h3>
                <img src="<?= base_url() ?>public/web/website/icon/1_ACCOUNT LEVERAGE.svg" alt="Account Leverage" class="img-fluid coin-img" />
            </div>
            <div class="card">
                <p class="mb-2">
                    <small class="text-uppercase"><?= lang('group_card_section_account_type') ?></small>
                </p>
                <h3 class="text-primary mb-0 fw-bold">4</h3>
                <img src="<?= base_url() ?>public/web/website/icon/1_ACCOUNT TYPE.svg" alt="Account Type" class="img-fluid coin-img" />
            </div>
            <div class="play-btn">
                <a role="button" class="youtube-btn" youtubeid="QM36CINq67M">
                    <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.78861 23.0179C2.17908 23.414 1.56223 23.4372 0.93807 23.0873C0.313908 22.7375 0.00121907 22.1962 0 21.4635V2.53756C0 1.80612 0.312689 1.26486 0.93807 0.913769C1.56345 0.562679 2.1803 0.585841 2.78861 0.983256L17.6917 10.4462C18.2403 10.812 18.5145 11.3301 18.5145 12.0006C18.5145 12.671 18.2403 13.1891 17.6917 13.5549L2.78861 23.0179Z" fill="#FAC211" />
                    </svg>
                </a>
            </div>
            <div class="card">
                <p class="mb-2">
                    <small class="text-uppercase"><?= lang('group_card_section_instruments') ?></small>
                </p>
                <h3 class="text-primary mb-0 fw-bold">100+</h3>
                <img src="<?= base_url() ?>public/web/website/icon/1_INSTRUMENTS.svg" alt="Instruments" class="img-fluid coin-img" />
            </div>
            <div class="card">
                <p class="mb-2">
                    <small class="text-uppercase"><?= lang('group_card_section_spreads') ?></small>
                </p>
                <h3 class="text-primary mb-0 fw-bold">0.0</h3>
                <img src="<?= base_url() ?>public/web/website/icon/1_SPREADS AS LOW AS 0 PIPS.svg" alt="Spreads as low as 0 pips" class="img-fluid coin-img" />
            </div>
        </div>
    </div>
</section>

<section class="about-section bg-black overflow-visible">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6">
                <p class="sub-heading text-uppercase text-primary wow fadeInDown" data-wow-delay="100ms"><?= lang('about_section_trust') ?></p>
                <h1 class="title wow fadeInUp" data-wow-delay="200ms"><?= lang('about_section_title_p1') ?> <span class="text-gradient"><?= lang('about_section_title_p2') ?></span></h1>
                <p class="title-para mb-4 wow fadeInUp" data-wow-delay="300ms"><?= lang('about_section_content') ?></p>
                <div class="card mb-3 wow fadeInUpBig" data-wow-delay="300ms">
                    <h5 class="text-primary fw-semibold"><?= lang('about_section_card1_title') ?></h5>
                    <p class="mb-0"><?= lang('about_section_card1_content') ?></p>
                </div>
                <div class="card mb-5 wow fadeInUpBig" data-wow-delay="500ms">
                    <h5 class="text-primary fw-semibold"><?= lang('about_section_card2_title') ?></h5>
                    <p class="mb-0"><?= lang('about_section_card2_content') ?></p>
                </div>
                <a href="<?= base_url() ?><?= lang('langurl') ?>/about" class="btn btn-outline-primary wow fadeInUpBig" data-wow-delay="600ms"><?= lang('about_section_read_more') ?></a>
            </div>
            <div class="col-lg-6 align-self-end">
                <div class="circle position-relative wow fadeInDown">
                    <img src="<?= base_url() ?>public/web/website/about-image.png" alt="about yamarkets" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="traders-section">
    <div class="container">
        <div class="row gy-4 mb-5 col-rev align-items-center">
            <div class="col-md-5">
                <div class="card wow slideInLeft">
                    <h5 class="text-primary fw-semibold mb-3"><?= lang('traders_section_card1_title') ?></h5>
                    <p class="mb-0"><?= lang('traders_section_card1_content') ?></p>
                </div>
            </div>
            <div class="col-md-7 col-lg-5 offset-lg-2">
                <div class="d-grid">
                    <div style="--bg-color: #fac211;" class="hover-yl wow fadeInUpBig" data-wow-delay="50ms">
                        <a href="<?= base_url() ?><?= lang('langurl') ?>/webinars">
                            <div>
                                <i class="fa-solid fa-users-rectangle"></i>
                            </div>
                            <?= lang('traders_section_webinars') ?>
                        </a>
                    </div>
                    <div style="--bg-color: #000000;" class="wow fadeInUpBig" data-wow-delay="100ms">
                        <a href="<?= base_url() ?><?= lang('langurl') ?>/seminars">
                            <div>
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <?= lang('traders_section_seminars') ?>
                        </a>
                    </div>
                    <div style="--bg-color: #000000;" class="wow fadeInUpBig" data-wow-delay="150ms">
                        <a href="javascript:()">
                            <div>
                                <i class="fa-solid fa-video"></i>
                            </div>
                            <?= lang('traders_section_videos') ?>
                        </a>
                    </div>
                    <div style="--bg-color: #fac211;" class="hover-yl wow fadeInUpBig" data-wow-delay="200ms">
                        <a href="<?= base_url() ?><?= lang('langurl') ?>/economic-calender">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <?= lang('traders_section_economic') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4 align-items-center">
            <div class="col-md-7 col-lg-5">
                <div class="d-grid">
                    <div style="--bg-color: #000000;" class="wow fadeInUpBig" data-wow-delay="250ms">
                        <a href="<?= base_url() ?><?= lang('langurl') ?>/trading-strategies">
                            <div>
                                <i class="fa-regular fa-snowflake"></i>
                            </div>
                            <?= lang('traders_section_trading') ?>
                        </a>
                    </div>
                    <div style="--bg-color: #fac211;" class="hover-yl wow fadeInUpBig" data-wow-delay="300ms">
                        <a href="<?= base_url() ?><?= lang('langurl') ?>/mt4-platform">
                            <div>
                                <i class="fa fa-tablet"></i>
                            </div>
                            <?= lang('traders_section_meta4') ?>
                        </a>
                    </div>
                    <div style="--bg-color: #fac211;" class="hover-yl wow fadeInUpBig" data-wow-delay="350ms">
                        <a href="<?= base_url() ?><?= lang('langurl') ?>/why-choose-us">
                            <div>
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <?= lang('traders_section_whychoose') ?>
                        </a>
                    </div>
                    <div style="--bg-color: #000000;" class="wow fadeInUpBig" data-wow-delay="400ms">
                        <a href="<?= base_url() ?><?= lang('langurl') ?>/mt5-platform">
                            <div>
                                <i class="fa fa-laptop"></i>
                            </div>
                            <?= lang('traders_section_meta5') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-lg-2">
                <div class="card wow slideInRight">
                    <h5 class="text-primary fw-semibold mb-3"><?= lang('traders_section_card2_title') ?></h5>
                    <p class="mb-0"><?= lang('traders_section_card2_content') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="awards-section">
    <div class="container-fluid px-0">
        <div class="row gy-4">
            <div class="col-12 pb-4">
                <h5 class="text-primary text-uppercase sub-heading text-center mb-5 wow fadeInDown"><?= lang('awards') ?></h5>
                <div class="awards-slider">
                    <?php foreach ($awards_view as $row) : ?>
                        <div>
                            <img src="<?php echo base_url('images/') . $row->award_image; ?>" alt="Award 1" class="img-fluid wow slideInDown" />
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <a href="<?= base_url() ?><?= lang('langurl') ?>/awards" class="text-primary mt-5">
                <div class="col-12 text-center wow fadeInUp">
                    <?= lang('about_section_read_more') ?>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="payment-section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary text-uppercase fw-bold wow slideInLeft"><?= lang('payment_section_title') ?></h5>
                <h2 class="title wow slideInLeft" data-wow-delay="200ms"><?= lang('payment_section_subtitle_p1') ?> <span class="text-gradient"><?= lang('payment_section_subtitle_p2') ?> </span><span class="text-gradient d-lg-block">
                        <?= lang('payment_section_subtitle_p3') ?></span></h2>
            </div>
            <div class="col-lg-6">
                <div class="box-container">
                    <div class="box"></div>
                    <div class="box wow bounceInDown" data-wow-delay="100ms">
                        <img src="<?= base_url() ?>public/web/img/pay-zapp.png" alt="PayZapp" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="200ms">
                        <img src="<?= base_url() ?>public/web/img/visa.png" alt="Visa" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="300ms">
                        <img src="<?= base_url() ?>public/web/img/phonepe.png" alt="Phone Pay" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/web/img/net-banking.png" alt="Net Banking" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="500ms">
                        <img src="<?= base_url() ?>public/web/img/upi.png" alt="UPI" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="600ms">
                        <img src="<?= base_url() ?>public/web/img/mastercard.png" alt="Master Card" />
                    </div>
                    <div class="box wow bounceInDown" data-wow-delay="700ms">
                        <img src="<?= base_url() ?>public/web/img/bank-transfer.png" alt="Bank Transfer" />
                    </div>
                    <div class="box"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trading-section bg-black">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-5">
                <div class="opacity-75 wow slideInLeft">
                    <img src="<?= base_url() ?>public/web/img/trading-tool.svg" alt="Trading Tools" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h5 class="text-primary text-uppercase wow slideInRight"><?= lang('trading_section_title') ?></h5>
                <h2 class="title wow slideInRight" data-wow-delay="100ms"><?= lang('trading_section_subtitle_p1') ?> <span class="text-gradient"><?= lang('trading_section_subtitle_p2') ?></span></h2>
                <p class="title-para mb-4 wow slideInRight" data-wow-delay="200ms"><?= lang('trading_section_content') ?></p>
                <a href="<?= base_url() ?><?= lang('langurl') ?>/trading-central" class="btn btn-outline-primary wow slideInRight" data-wow-delay="300ms"><?= lang('trading_section_read_more') ?></a>
            </div>
        </div>
    </div>
</section>
<!-- <?= lang('') ?> -->

<section class="register-section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7 col-xl-8">
                <div class="register-video">
                    <!-- <h5 class="text-primary text-uppercase fw-bold wow slideInLeft">How to Get Started?</h5> -->
                    <h2 class="title mb-4 wow slideInLeft" data-wow-delay="100ms"><?= lang('register_section_title_p1') ?> <span class="text-gradient"><?= lang('register_section_title_p2') ?></span></h2>
                    <div class="video-box">
                        <a role="button" class="play-btn youtube-btn" youtubeid="cdoZibiI2PA">
                            <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.78861 23.0176C2.17908 23.4138 1.56223 23.437 0.93807 23.0871C0.313908 22.7372 0.00121907 22.196 0 21.4633V2.53732C0 1.80588 0.312689 1.26462 0.93807 0.913525C1.56345 0.562435 2.1803 0.585597 2.78861 0.983012L17.6917 10.446C18.2403 10.8117 18.5145 11.3298 18.5145 12.0003C18.5145 12.6708 18.2403 13.1889 17.6917 13.5546L2.78861 23.0176Z" fill="#FAC211" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="card-container">
                    <div class="card wow slideInRight" data-wow-delay="100ms">
                        <h5 class="text-primary fw-semibold mb-3">1. <?= lang('register_section_card1_title') ?></h5>
                        <p class="mb-0"><?= lang('register_section_card1_content') ?></p>
                    </div>
                    <div class="card wow slideInRight" data-wow-delay="200ms">
                        <h5 class="text-primary fw-semibold mb-3">2. <?= lang('register_section_card2_title') ?></h5>
                        <p class="mb-0"><?= lang('register_section_card2_content') ?></p>
                    </div>
                    <div class="card wow slideInRight" data-wow-delay="300ms">
                        <h5 class="text-primary fw-semibold mb-3">3. <?= lang('register_section_card3_title') ?></h5>
                        <p class="mb-0"><?= lang('register_section_card3_content') ?>
                    </div>
                </div>
                

            </div>
            <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
</section>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Yamarkets",
        "description": "YaMarkets is an industry leader in the Forex CFD markets It is our promise to deliver a powerful, user-friendly, and fair trading platform On this online Forex Trading platform.",
        "image": "https://yamarkets.com/public/web/website/about-img3.png",
        "logo": "https://yamarkets.com/public/web/img/logo.png",
        "url": "https://www.yamarkets.com/",
        "telephone": "+357 22030234",
        "sameAs": ["https://twitter.com/markets_ya", "https://www.linkedin.com/company/yamarketslimited", "https://www.facebook.com/yamarkets.official/", "https://www.youtube.com/channel/UCP0WDmYQ7wNZPZMI5KOC-Iw", "https://www.instagram.com/yamarketslimited/"],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1209, 12th Floor, Burlington Tower, Business Bay Dubai Po BOX- 74603",
            "addressLocality": "Burlington Tower, Business Bay Dubai",
            "addressCountry": "Dubai UAE"
        }
    }
</script>
<?php
if ($user_country == 'India') {

?>
    <!-- offer popup  -->
    <div id="popup">
        <button class="btn-close invert float-end p-3" id="popBtn"></button>
        <div class="popup-container">
            <a role="button" class="" data-bs-toggle="modal" data-bs-target="#location">
                <img src="<?= base_url() ?>public/web/img/popup/webinar.jpg" alt="popup" class="img-fluid" />
            </a>
        </div>
    </div>

    <!-- Modal form -->
    <div class="modal fade" id="location" tabindex="-1" aria-labelledby="locationLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <h4 class="modal-title fs-5" id="locationLabel">Enter your details</h4>
                    <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('website/model_form_submit_data'); ?>" method="post">
                        <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location-phone" class="form-label">Phone</label>
                                    <input type="tel" name="mobile" id="location-phone" maxlength="10" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nlocationame" class="form-label">Location</label>
                                    <input type="text" name="location" id="location" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<script>
    const popBtn = document.getElementById('popBtn');
    const popup = document.getElementById('popup');
    const body = document.querySelector('body');
    popBtn.onclick = () => {
        popup.style.display = 'none';
        body.classList.remove('overflow-hidden');
    }
    setTimeout(() => {
        popup.style.display = 'block';
        body.classList.add('overflow-hidden');
    }, 2000);
</script>