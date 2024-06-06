<?php

$this->load->helper('url');



$current_uri = uri_string();

$segments = explode('/', $current_uri);

$page_name = end($segments);

if ($page_name == '') {

    $page_name = 'home';
}



$seo_data = $this->Seo_Model->getseo_data($page_name);

$seo_data_blog = $this->Blog_Model->blog_detail_data_seo($page_name);



$seo_title = "";

$meta_description = '';

$keywords = '';











if ($seo_data) {

    $row = reset($seo_data);

    $seo_title = $row->seo_title;

    $keywords = $row->seo_keywords;

    $meta_description = $row->seo_desc;
} elseif ($seo_data_blog) {

    function compareStrings($str1, $str2)
    {

        $len1 = mb_strlen($str1);

        $len2 = mb_strlen($str2);



        if ($len1 !== $len2) {

            return false;
        }



        for ($i = 0; $i < $len1; $i++) {

            if (mb_ord($str1, $i) !== mb_ord($str2, $i)) {

                return false;
            }
        }



        return true;
    }



    foreach ($seo_data_blog as $row) {

        $slugFromData = strtolower(trim($row->slug));

        $pageName = strtolower(trim($page_name));

        $encodingSlug = mb_detect_encoding($slugFromData);

        $encodingPage = mb_detect_encoding($pageName);

        if ($encodingSlug !== 'UTF-8') {

            $slugFromData = mb_convert_encoding($slugFromData, 'UTF-8', $encodingSlug);
        }

        if ($encodingPage !== 'UTF-8') {

            $pageName = mb_convert_encoding($pageName, 'UTF-8', $encodingPage);
        }

        // echo 'Slug From Data: ' . $slugFromData . '<br>';

        // echo 'Page Name: ' . $pageName . '<br>';

        if (compareStrings($slugFromData, $pageName)) {

            // echo('h');

            $seo_title = $row->seo_title;

            $meta_description = $row->seo_desc;

            $keywords = $row->meta_tags;
        } else {

            echo ('gg');
        }
    }
}





$CI = &get_instance();

$CI->load->helper('ip_helper');

$user_country = getUserCountryByIp($CI);









?>







<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <title><?= $seo_title ?></title>

    <meta name="description" content="<?= $meta_description ?>" />

    <meta name="keywords" content="<?= $keywords ?>" />

    <link rel="canonical" href="<?= current_url() ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <link rel="shortcut icon" href="<?= base_url() ?>public/web/img/favicon.png" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/slick/css/slick.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/slick/css/slick-theme.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/font-awesome/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/animate/css/animate.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/fancybox/css/fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/intlTelInput/css/intlTelInput.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/css/style.css?v=202401291210">

    <meta name="google-site-verification" content="snie5nSBYfY6zP2tXcCEGlcltqlkE8tHHt2UQuHvctg" />





    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-201864065-1"
        type="cac99c0894162ffd7f576c4a-text/javascript"></script>



    <script type="cac99c0894162ffd7f576c4a-text/javascript">
    ! function(f, b, e, v, n, t, s) {

        if (f.fbq) return;

        n = f.fbq = function() {

            n.callMethod ?

                n.callMethod.apply(n, arguments) : n.queue.push(arguments)

        };

        if (!f._fbq) f._fbq = n;

        n.push = n;

        n.loaded = !0;

        n.version = '2.0';

        n.queue = [];

        t = b.createElement(e);

        t.async = !0;

        t.src = v;

        s = b.getElementsByTagName(e)[0];

        s.parentNode.insertBefore(t, s)

    }(window, document, 'script',

        'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '677675931046055');

    fbq('track', 'PageView');
    </script>

    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=677675931046055&ev=PageView&noscript=1" /></noscript>



    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N5P1SHFK6S"></script>

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'G-N5P1SHFK6S');
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-480946225"></script>

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'AW-480946225');
    </script>



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

        "sameAs": ["https://twitter.com/markets_ya", "https://www.linkedin.com/company/yamarketslimited",
            "https://www.facebook.com/yamarkets.official/",
            "https://www.youtube.com/channel/UCP0WDmYQ7wNZPZMI5KOC-Iw",
            "https://www.instagram.com/yamarketslimited/"
        ],

        "address": {

            "@type": "PostalAddress",

            "streetAddress": "1209, 12th Floor, Burlington Tower, Business Bay Dubai Po BOX- 74603",

            "addressLocality": "Burlington Tower, Business Bay Dubai",

            "addressCountry": "Dubai UAE"

        }

    }
    </script>

</head>



<body>

    <style>
    .top-header .fa-users {

        color: #fac211;

    }



    .top-header .btn:hover .fa-users {

        color: #0d0e11;

    }



    @media (max-width: 992px) {

        .top-header {

            display: none;

            padding: 6px;

        }



        .top-header .d-flex.align-items-center {

            flex-wrap: wrap;

        }



        .top-header .d-flex.gap-3 {

            gap: .5rem !important;

        }



        .top-header .d-flex.gap-3:last-child {

            margin-left: 0.5rem;

        }



        .top-header .btn {

            padding: 5px 10px;

            font-size: 10px;

        }



        .top-header a.btn>span {

            font-size: 8px;

            font-weight: 400;

        }



        .goog-te-gadget .goog-te-combo {

            margin: 0 !important;

            height: 25px;

            padding: 1px 8px;

            font-size: 10px;

            transform: translateY(0px);

            border: 1px solid #47484a;

        }



        #topHeader {

            border-radius: 0 0 30px 30px;

            background-color: #262626;

            padding: 2px .5rem;

            font-size: .7rem;

        }



        #translate {

            width: 120px;

            height: 25px;

        }

    }



    @media (max-width: 576px) {

        .top-header .d-flex.align-items-center {

            flex-wrap: wrap;

            justify-content: center !important;

        }

    }

    @media (max-width: 360x) {

        .top-header .d-flex.gap-3:last-child {

            margin-left: 0;

            margin-top: 0.5rem;

        }

    }

    .withdraw-card .card img {
        height: 64px;
        object-fit: contain;
    }

    .box-container,
    .box-container .box>img {
        transform: rotate(0);
    }
    </style>
    <section class="about-hero pt-lg-0">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">A company you can trust</h5>
                    <h2 class="title mb-3 wow fadeInLeftBig" data-wow-delay="200ms">About <span
                            class="text-gradient">YaMarkets!</span></h2>
                    <p class="title-para wow fadeInLeftBig" data-wow-delay="400ms">At YaMarkets, we stand as a trusted
                        name among the Top Trading Platforms and provide an effective trading platform to trade in the
                        Forex and CFD markets. Our commitment is to cultivate a reliable, accessible, and ethical
                        trading platform. We prioritize providing a hassle-free trading environment that upholds
                        integrity and operates without conflicts of interest.</p>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url() ?>public/web/img/about-yamarkets.jpg" alt="About YaMarkets!"
                        class="img-fluid pe-none" />
                </div>
            </div>
        </div>
    </section>

    <section class="withdraw-section">
        <div class="container">
            <div class="row gy-4 withdraw-card">
                <div class="col-12 text-center">
                    <h2 class="title mb-lg-5 wow fadeInUp">What Defines <span class="text-gradient">YaMarkets?</span>
                    </h2>
                </div>
                <div class="col-md-4">
                    <div class="card overflow-hidden bg-transparent text-center wow fadeInLeftBig">
                        <img src="<?= base_url() ?>public/web/website/01_trust.svg" class="card-img-top img-fluid"
                            alt="Trust" />
                        <div class="card-body">
                            <h5 class="card-title text-white fw-semibold mb-3">Trustworthy Services</h5>
                            <p class="card-text">We prioritize trust, starting with the seamless process of setting up
                                your Live Trading Account. Once your identity is verified, we swiftly arrange your
                                account, ensuring a reliable trading journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card overflow-hidden bg-transparent text-center wow fadeInUpBig">
                        <img src="<?= base_url() ?>public/web/website/01_reliabilty.svg" class="card-img-top img-fluid"
                            alt="Reliability" />
                        <div class="card-body">
                            <h5 class="card-title text-white fw-semibold mb-3">Reliable Experience</h5>
                            <p class="card-text">Our focus remains on reliability. With a thorough verification process,
                                we secure your account setup, assuring a dependable trading experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card overflow-hidden bg-transparent text-center wow fadeInRightBig">
                        <img src="<?= base_url() ?>public/web/website/01_value.svg" class="card-img-top img-fluid"
                            alt="Value" />
                        <div class="card-body">
                            <h5 class="card-title text-white fw-semibold mb-3">Value-Centric Approach</h5>
                            <p class="card-text">Experience the convenience of the Best Online Trading on various
                                devices, including PC, Android, iPad, iPhone, or through a web browser.</p>
                        </div>
                    </div>
                </div>
                <?php $this->load->view('frontend/include/button.php'); ?>
            </div>
        </div>
    </section>

    <section class="payment-section">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="text-primary fw-bold text-uppercase wow slideInLeft">Features</h5>
                    <h2 class="title wow slideInLeft" data-wow-delay="200ms">Explore Our Competitive <span
                            class="text-gradient">Offerings and Features</span></h2>
                </div>
                <div class="col-lg-6">
                    <div class="row gy-4 wrapper-card justify-content-center">
                        <div class="col-md-4">
                            <div class="card p-3 wow bounceInUp" data-wow-delay="100ms">
                                <h6 class="fw-medium text-white mb-3 opacity-75">Instruments</h6>
                                <div class="text-primary lg-font">100+</div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card p-3 wow bounceInUp" data-wow-delay="300ms">
                                <h6 class="fw-medium text-white mb-3 opacity-75">Account leverage</h6>
                                <div class="text-primary lg-font">1:1000</div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card p-3 wow bounceInUp" data-wow-delay="200ms">
                                <h6 class="fw-medium text-white mb-3 opacity-75">Spreads as low as 0 pips</h6>
                                <div class="text-primary lg-font">0.0</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 wow bounceInUp" data-wow-delay="400ms">
                                <h6 class="fw-medium text-white mb-3 opacity-75">Account type</h6>
                                <div class="text-primary lg-font">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="timeline-section">
        <div class="container">
            <div class="row align-items-center gy-4 mb-5">
                <div class="col-md-8">
                    <h5 class="text-primary text-uppercase wow slideInLeft" data-wow-delay="100ms">YaMarkets Through
                        Years</h5>
                    <h2 class="title wow slideInLeft" data-wow-delay="200ms">Our <span
                            class="text-gradient">Story</span> Far</h2>
                </div>
                <div class="col-md-4">
                    <div class="text-end arrow-btn">
                        <button class="bg-transparent prev-arr wow slideInRight" data-wow-delay="200ms">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13.2499L1.00006 6.99993L7 0.75" stroke="white" stroke-width="1.49998"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </button>
                        <button class="bg-transparent ms-2 next-arr wow slideInRight" data-wow-delay="100ms">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0.750127L6.99994 7.00007L1 13.25" stroke="white" stroke-width="1.49998"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-12">
                    <div class="timeline-slider">
                        <div>
                            <div class="slider-inn position-relative">
                                <p class="wow fadeInUp text-white" data-wow-delay="100ms">YaMarkets was founded with a
                                    vision to enter the Forex and CFD markets, laying the groundwork for a reliable and
                                    accessible trading platform.</p>
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="200ms">2016</h5>
                            </div>
                        </div>
                        <div>
                            <div class="slider-inn position-relative">
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="400ms">2017</h5>
                                <p class="wow fadeInUp text-white" data-wow-delay="300ms">YaMarkets saw significant
                                    growth and expanded its client base, introducing new features to enhance the trading
                                    experience.</p>
                            </div>
                        </div>
                        <div>
                            <div class="slider-inn position-relative">
                                <p class="wow fadeInUp text-white" data-wow-delay="600ms">Focus on technological
                                    advancements, introducing user-friendly interfaces and innovative tools for traders.
                                </p>
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="600ms">2018</h5>
                            </div>
                        </div>
                        <div>
                            <div class="slider-inn position-relative">
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="800ms">2019</h5>
                                <p class="wow fadeInUp text-white" data-wow-delay="900ms">Further enhancement of
                                    services, prioritizing reliability, and introducing more diverse trading
                                    instruments.</p>
                            </div>
                        </div>
                        <div>
                            <div class="slider-inn position-relative">
                                <p class="wow fadeInUp text-white" data-wow-delay="900ms">Adapting to market changes and
                                    economic shifts while maintaining a steady and dependable trading platform.</p>
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="800ms">2020</h5>
                            </div>
                        </div>
                        <div>
                            <div class="slider-inn position-relative">
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="800ms">2021</h5>
                                <p class="wow fadeInUp text-white" data-wow-delay="900ms">Emphasis on customer
                                    satisfaction, feedback integration, and refining services based on user experiences.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="slider-inn position-relative">
                                <p class="wow fadeInUp text-white" data-wow-delay="900ms">Striving for regulatory
                                    compliance and transparency to ensure trust and security for all traders.</p>
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="800ms">2022</h5>
                            </div>
                        </div>
                        <div>
                            <div class="slider-inn position-relative">
                                <h5 class="wow fadeInUp text-gradient fw-semibold d-inline-block"
                                    data-wow-delay="800ms">2023</h5>
                                <p class="wow fadeInUp text-white" data-wow-delay="900ms">Continuing evolution with a
                                    commitment to providing advanced solutions and accessible trading options for all
                                    users.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-section bg-black">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-transparent wow fadeInLeftBig">
                        <div class="overflow-hidden rounded-4">
                            <img src="<?= base_url() ?>public/web/img/goals.jpg"
                                class="card-img-top rounded-4 wow swing" alt="Our goals" />
                        </div>
                        <div class="card-body px-0 mt-3">
                            <h5 class="card-title text-primary">Our Mission</h5>
                            <p class="card-text">At YaMarkets, our mission is rooted in maintaining a secure and stable
                                environment for conducting business. We commit ourselves to transparency and honesty,
                                valuing trust as the cornerstone that unites our clients and our team.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-transparent wow fadeInUpBig col-rev">
                        <div class="card-body px-0 pt-md-0">
                            <h5 class="card-title text-primary">Our Vision</h5>
                            <p class="card-text">We envision YaMarkets as a thriving international financial trading
                                entity, delivering steadfast brokerage services while maximizing benefits for our
                                partners and traders. Our success is built upon our people, our clients, and our
                                employees, along with innovative trading solutions and advanced technology.</p>
                        </div>
                        <div class="overflow-hidden rounded-4 mt-3">
                            <img src="<?= base_url() ?>public/web/img/vision.jpg"
                                class="card-img-top rounded-4 wow swing" alt="Our vision" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-transparent wow fadeInRightBig">
                        <div class="overflow-hidden rounded-4">
                            <img src="<?= base_url() ?>public/web/img/values.jpg"
                                class="card-img-top rounded-4 wow swing" alt="Our values" />
                        </div>
                        <div class="card-body px-0 mt-3">
                            <h5 class="card-title text-primary">Core Values</h5>
                            <p class="card-text">In our professional endeavours, we emphasize the significance of
                                operating within a secure and stable business landscape. Our commitment to transparency
                                and honesty resonates in our values, fostering trust between our clients and us, the
                                fundamental principle of conducting business ethically.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment-section">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="text-primary fw-bold text-uppercase wow slideInLeft">Liquidity Providers</h5>
                    <h2 class="title wow slideInLeft" data-wow-delay="200ms">Get <span
                            class="text-gradient"></span>Seamless and <span class="text-gradient d-lg-block">Direct
                            Liquidity Streams</span></h2>
                </div>
                <div class="col-lg-6">
                    <div class="box-container">
                        <div class="box"></div>
                        <!-- <div class="box wow bounceInDown" data-wow-delay="100ms">
                        <img src="<?= base_url() ?>public/paymentgateway_logo/match-trade.png" alt="PayZapp" />
                    </div> -->
                        <div class="box wow bounceInDown" data-wow-delay="200ms">
                            <img src="<?= base_url() ?>public/paymentgateway_logo/match-prime.png" alt="Visa" />
                        </div>
                        <div class="box wow bounceInDown" data-wow-delay="300ms">
                            <img src="<?= base_url() ?>public/paymentgateway_logo/lmax.png" alt="Phone Pay" />
                        </div>
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
                    <h5 class="text-primary fw-bold">Supported Payment Systems</h5>
                    <h2 class="title">Register Now for <span class="text-gradient">Seamless Trading </span>
                        <div class="d-lg-block text-gradient">with YaMarkets</div>
                    </h2>
                </div>
                <?php $this->load->view('frontend/include/button.php'); ?>
            </div>
        </div>
    </section>

    <script type="text/javascript" id="zsiqchat">
    var $zoho = $zoho || {};
    $zoho.salesiq = $zoho.salesiq || {
        widgetcode: "siq4ddd561baf4facfd88dc59cce5b0b284be720103c657001641c57cdfa0c40506",
        values: {},
        ready: function() {}
    };
    var d = document;
    s = d.createElement("script");
    s.type = "text/javascript";
    s.id = "zsiqscript";
    s.defer = true;
    s.src = "https://salesiq.zohopublic.in/widget";
    t = d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s, t);
</script>
<script src="<?= base_url() ?>public/web/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/slick/js/slick.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/youtube-popup/youtube-popup.js"></script>
<script src="<?= base_url() ?>public/web/vendor/fancybox/js/fancybox.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/wow/js/wow.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/intlTelInput/js/intlTelInput.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/intlTelInput/js/utils.js"></script>
<script src="<?= base_url() ?>public/web/js/custom.js?v=202312011501"></script>
<script>
    if (screen.width < 992) {
        $('#topHeader').click(() => {
            $('.top-header').slideToggle();
            $('#topHeader>.fa-solid').toggleClass('fa-chevron-down fa-chevron-up');
        })
    }
</script>

<script>
    const callback = document.querySelector("#callback-phone");
    window.intlTelInput(callback, {
        autoPlaceholder: "off",
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "js/utils.js",
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<?php $this->load->view('frontend/include/jsfile'); ?>