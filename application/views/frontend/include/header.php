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

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/slick/css/slick.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/slick/css/slick-theme.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/font-awesome/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/animate/css/animate.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/fancybox/css/fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/intlTelInput/css/intlTelInput.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/web/css/style.css?v=202401291210">

    <meta name="google-site-verification" content="snie5nSBYfY6zP2tXcCEGlcltqlkE8tHHt2UQuHvctg" />





    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-201864065-1" type="cac99c0894162ffd7f576c4a-text/javascript"></script>



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

    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=677675931046055&ev=PageView&noscript=1" /></noscript>



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

            "sameAs": ["https://twitter.com/markets_ya", "https://www.linkedin.com/company/yamarketslimited", "https://www.facebook.com/yamarkets.official/", "https://www.youtube.com/channel/UCP0WDmYQ7wNZPZMI5KOC-Iw", "https://www.instagram.com/yamarketslimited/"],

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
    </style>

    <header id="header">

        <div class="top-header">

            <div class="container-fluid">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex gap-3">

                        <a href="https://www.yamarketspartners.com/" target="_blank" class="btn d-flex align-items-center border-color">

                            <i class="fa-solid fa-users"></i>

                            <span class="ps-2 text-primary">IB</span>

                        </a>

                        <div class="dropdown">

                            <a role="button" class="btn d-flex align-items-center" id="copyTrading" data-bs-toggle="dropdown" aria-expanded="false">

                                <span class="pe-2"><?=lang('copy_trading')?></span>

                                <i class="fa-solid fa-chevron-down"></i>

                            </a>

                            <ul class="dropdown-menu linear-gradient bg-dark p-3" aria-labelledby="copyTrading">

                                <li>

                                    <a class="dropdown-item btn btn-secondary mb-2" href="https://leaderboard.yamarkets.com/widgets/ratings?widgetKey=social_platform_ratings" target="_blank">

                                        <i class="fa-solid fa-chalkboard"></i> <?=lang('leaderboard')?>

                                    </a>

                                </li>

                                <li>

                                    <a class="dropdown-item btn btn-primary mb-2" href="./copytrade">

                                        <i class="fa-solid fa-handshake"></i> <?=lang('copy_trading')?>

                                    </a>

                                </li>

                            </ul>

                        </div>



                    </div>

                    <div class=" d-none d-lg-block">

                        <a class="navbar-brand" href="<?= base_url() ?>">

                            <?php

                            if ($user_country == 'India') {



                            ?>

                                <img src="<?= base_url() ?>public/web/img/logo.png" alt="Logo" title="YaMarkets Logo" height="60" />



                            <?php } else { ?>

                                <img src="<?= base_url() ?>public/web/img/logo.png" alt="Logo" title="YaMarkets Logo" height="60" />

                            <?php } ?>

                        </a>

                    </div>

                    <div class="d-flex align-items-center gap-3">

                        <a class="btn d-flex align-items-center" href="./zulutrade">

                            <i class="fa-solid fa-people-group"></i>

                            <span class="ps-2"><?=lang('zulutrade')?></span>

                        </a>

                        <?php

                        if ($user_country == 'India') {



                        ?>

                            <div class="dropdown">

                                <a role="button" class="btn d-flex align-items-center" id="loginButton" data-bs-toggle="dropdown" aria-expanded="false">

                                    <span class="pe-2"><?=lang('login')?></span>

                                    <i class="fa-solid fa-chevron-down"></i>

                                </a>

                                <ul class="dropdown-menu linear-gradient bg-dark p-3" aria-labelledby="loginButton">

                                    <li>

                                        <a class="dropdown-item btn btn-secondary mb-2" href="https://area.yamarkets.com/" target="_blank">

                                            <i class="fa-solid fa-key"></i> <?=lang('mt5_login')?>

                                        </a>

                                    </li>

                                    <li>

                                        <a class="dropdown-item btn btn-primary mb-2" href="https://area.yamarkets.com/register" target="_blank">

                                            <i class="fa-solid fa-right-to-bracket"></i> <?=lang('mt5_register')?>

                                        </a>

                                    </li>

                                    <li>

                                        <a class="dropdown-item btn btn-secondary mb-2" href="https://clients.yamarkets.com/login" target="_blank">

                                            <i class="fa-solid fa-key"></i> <?=lang('mt4_login')?>

                                        </a>

                                    </li>

                                    <li>

                                        <a class="dropdown-item btn btn-primary" href="https://clients.yamarkets.com/register" target="_blank">

                                            <i class="fa-solid fa-right-to-bracket"></i> <?=lang('mt4_register')?>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        <?php } else { ?>

                            <div class="dropdown">

                                <a role="button" class="btn d-flex align-items-center" id="loginButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                    <span class="pe-2"><?=lang('login')?></span>

                                    <i class="fa-solid fa-chevron-down"></i>

                                </a>

                                <ul class="dropdown-menu linear-gradient bg-dark p-3" aria-labelledby="loginButton1">

                                    <li>

                                        <a class="dropdown-item btn btn-secondary mb-2" href="https://secure.yamarkets.com/" target="_blank">

                                            <i class="fa-solid fa-key"></i> <?=lang('login')?>

                                        </a>

                                    </li>

                                    <li>

                                        <a class="dropdown-item btn btn-primary mb-2" href="https://secure.yamarkets.com/register" target="_blank">

                                            <i class="fa-solid fa-right-to-bracket"></i> <?=lang('register')?>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        <?php } ?>

                        <div class="dropdown flag-dropdown">

                            <!--<div id="translate"></div>-->

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="position-absolute z-1 start-75 translate-middle-x">

            <button class="border-0 d-lg-none" id="topHeader">

                <i class="fa-solid fa-chevron-down text-primary"></i>

            </button>

        </div>



        <nav class="navbar navbar-expand-lg navbar-dark py-0">

            <div class="container-fluid">

                <a class="navbar-brand d-lg-none" href="<?= base_url() ?>">

                    <img src="<?= base_url() ?>public/web/img/logo.png" alt="Logo" title="YaMarkets Logo" />

                </a>

                <div>

                    <!--<button class="border-0 p-2 bg-transparent d-lg-none" id="topHeader">-->

                    <!--    <i class="fa-solid fa-right-to-bracket text-primary"></i>-->

                    <!--</button>-->

                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                </div>

                <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                    <div class="offcanvas-header">

                        <a class="navbar-brand" href="<?= base_url() ?>">

                            <img src="<?= base_url() ?>public/web/img/logo.png" alt="Logo" title="YaMarkets Logo" />

                        </a>

                        <button type="button" class="btn-close invert" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                    </div>

                    <div class="offcanvas-body">

                        <div class="navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav mx-lg-auto">

                                <li class="nav-item">

                                    <a href="<?= base_url() ?>" class="nav-link"><?=lang('home')?></a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                       <?=lang('about')?>

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span><?=lang('back')?></span>

                                            </button>

                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <ul class="list-unstyled row gx-5 gy-4">

                                                    <div class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('about_yamarkets')?></div>

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">
<!-- about us -->
                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/about"><?=lang('about')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/regulations"><?=lang('regulations')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/why-choose-us"><?=lang('why_choose_us')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<div class="row gy-4">-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <div class="h6 text-uppercase mb-4">ABOUT YaMarkets</div>-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>about">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/about.png" alt="About us" class="img-fluid" />-->

                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>About us</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Learn more about YaMarkets</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="regulations">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/regulation.png" alt="Regulations" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>Regulations</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Understand the regulatory framework of YaMarkets</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>why-choose-us">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/why-choose-us-icon.png" alt="Why trade forex?" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>Why choose us?</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Choose Yamarkets</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--</div>-->

                                                    </div>

                                                    <div class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('media')?></div>

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/expo"><?=lang('expo')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="javascript:void(0"><?=lang('videos')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/awards"><?=lang('awards')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<div class="row gy-4">-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <div class="h6 text-uppercase mb-4">Media</div>-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>expo">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/expos.png" alt="Expo" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>Expo</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Explore our participation in international financial expo</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0 disabled" href="javascript:void(0)">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/clapperboard.png" alt="Videos" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>Videos</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Watch our informative videos about currency trading</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>awards">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/awards.png" alt="Awards" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>Awards</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Discover the recognitions and awards of YaMarkets</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--</div>-->

                                                    </div>

                                                    <div class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('more')?></div>

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/faq"><?=lang('faqs')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/why-trade-forex"><?=lang('why_trade_forex')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/we-are-hiring"><?=lang('we_are_hiring')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<div class="row gy-4">-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <div class="h6 text-uppercase mb-4">More</div>-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>faq">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/faq.png" alt="FAQs" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>FAQs</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Get clarity on various aspects of trading and services of YaMarkets.</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>why-trade-forex">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/why-trade-forex.png" alt="Why trade currencies?" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>Why trade currencies?</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Explore the advantages of trading in the currency market</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--    <li class="col-12">-->

                                                        <!--        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>we-are-hiring">-->

                                                        <!--            <span>-->

                                                        <!--                <img src="<?= base_url() ?>public/web/img/we-are-hiring.png" alt="We are hiring" class="img-fluid" />-->



                                                        <!--            </span>-->

                                                        <!--            <div class="dropdown-text">-->

                                                        <!--                <h4>We are hiring</h4>-->

                                                        <!--                <p class="mb-0 text-wrap">Join the YaMarkets team and explore career opportunities</p>-->

                                                        <!--            </div>-->

                                                        <!--        </a>-->

                                                        <!--    </li>-->

                                                        <!--</div>-->

                                                    </div>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <?=lang('products')?>

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span>Back</span>

                                            </button>

                                            <div class="h6 text-uppercase mb-4"><?=lang('products')?></div>

                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <ul class="list-unstyled row gx-5">

                                                    <li class="col-lg-4">

                                                        <ol class="list-unstyled row gx-0 mx-0 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/forex"><?=lang('currencies')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>forex">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/forex.png" alt="Currencies" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Currencies</h4>-->

                                                        <!--        <p class="mb-0 text-wrap">Access a wide range of currency pairs and Trading Tools</p>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <ol class="list-unstyled row gx-0 mx-0 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/commodities"><?=lang('commodities')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>commodities">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/commodities.png" alt="Commodities" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Commodities</h4>-->

                                                        <!--        <p class="mb-0 text-wrap">Trade precious Metals, Energies, and agricultural products </p>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <ol class="list-unstyled row gx-0 mx-0 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/indices"><?=lang('indices')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>indices">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/indices.png" alt="Indices" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Indices</h4>-->

                                                        <!--        <p class="mb-0 text-wrap">Discover global indices and trade in major stock indices</p>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/crypto-currencies"><?=lang('crypto_currencies')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>crypto-currencies">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/trade-bitcoin.png" alt="Crypto Currencies" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Crypto Currencies</h4>-->

                                                        <!--        <p class="mb-0 text-wrap">Trade Digital Assets and Cryptocurrencies securely</p>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                    </li>

                                                    <!-- <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>trading-conditions">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/trading.png" alt="Trading" class="img-fluid" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>Trading Conditions</h4>

                                                                <p class="mb-0 text-wrap">Learn about our trading conditions at YaMarkets and trade responsibly.</p>

                                                            </div>

                                                        </a>

                                                    </li> -->

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <?=lang('traders')?>

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span><?=lang('back')?></span>

                                            </button>

                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <ul class="list-unstyled row gx-5 gy-4">

                                                    <li class="col-lg-4">

                                                        <div class="mb-4">

                                                            <div class="h6 text-uppercase mb-4"><?=lang('account_types')?></div>

                                                            <!--<a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>account-types">-->

                                                            <!--    <span>-->

                                                            <!--        <img src="<?= base_url() ?>public/web/img/account.png" alt="Account Types" class="img-fluid" />-->

                                                            <!--    </span>-->

                                                            <!--    <div class="dropdown-text">-->

                                                            <!--        <h4>Account Types</h4>-->

                                                            <!--    </div>-->

                                                            <!--</a>-->

                                                            <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/account-types"><?=lang('ultimate')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/account-types"><?=lang('standard')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/account-types"><?=lang('royale')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/account-types"><?=lang('ecn')?></a>

                                                                </li>

                                                            </ol>

                                                        </div>

                                                        <div>

                                                            <div class="h6 text-uppercase mb-4"><?=lang('funding_options')?></div>

                                                            <!--<a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>funding-option">-->

                                                            <!--    <span>-->

                                                            <!--        <img src="<?= base_url() ?>public/web/img/funding.png" alt="Funding" class="img-fluid" />-->

                                                            <!--    </span>-->

                                                            <!--    <div class="dropdown-text">-->

                                                            <!--        <h4>Funding Options</h4>-->

                                                            <!--    </div>-->

                                                            <!--</a>-->

                                                            <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/funding-option"><?=lang('deposit')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/funding-option"><?=lang('withdraw')?></a>

                                                                </li>

                                                            </ol>

                                                        </div>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <div class="mb-4">

                                                            <div class="h6 text-uppercase mb-4"><?=lang('instruments_list')?></div>

                                                            <!--<a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>instruments-list">-->

                                                            <!--    <span>-->

                                                            <!--        <img src="<?= base_url() ?>public/web/img/instruments-list.png" alt="Instruments" class="img-fluid" />-->

                                                            <!--    </span>-->

                                                            <!--    <div class="dropdown-text">-->

                                                            <!--        <h4>Instruments List</h4>-->

                                                            <!--    </div>-->

                                                            <!--</a>-->

                                                            <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('currencies')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('indices')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('spot_indices')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('spot_commodities')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('commodities')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('metals')?></a>

                                                                </li>

                                                                <li class="col-lg-6">

                                                                    <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('cryptocurrencies')?></a>

                                                                </li>

                                                            </ol>

                                                        </div>

                                                    </li>

                                                    <!-- <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>local-currencies">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/financial.png" alt="Financial" class="img-fluid" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>Financial</h4>

                                                            </div>

                                                        </a>

                                                        <ol class="list-unstyled row mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/local-currencies">Local Currencies</a>

                                                            </li>

                                                        </ol>

                                                    </li> -->

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('tools')?>Tools</div>

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/economic-calender"><?=lang('economic_calendar')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/calculator"><?=lang('calculator')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/trading-conditions"><?=lang('trading_conditions')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<div class="mb-4">-->

                                                        <!--    <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>economic-calender">-->

                                                        <!--        <span>-->

                                                        <!--            <img src="<?= base_url() ?>public/web/img/economic-calendar.png" alt="Economic calendar" class="img-fluid" />-->

                                                        <!--        </span>-->

                                                        <!--        <div class="dropdown-text">-->

                                                        <!--            <h4>Economic calendar</h4>-->

                                                        <!--            <p class="mb-0 text-wrap">Stay updated on key economic events and their impact on the markets</p>-->

                                                        <!--        </div>-->

                                                        <!--    </a>-->

                                                        <!--</div>-->

                                                        <!--<div class="mb-4">-->

                                                        <!--    <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>calculator">-->

                                                        <!--        <span>-->

                                                        <!--            <img src="<?= base_url() ?>public/web/img/calculator.png" alt="Calculator" class="img-fluid" />-->

                                                        <!--        </span>-->

                                                        <!--        <div class="dropdown-text">-->

                                                        <!--            <h4>Calculator</h4>-->

                                                        <!--            <p class="mb-0 text-wrap">Calculate various aspects of your trades for better decision-making</p>-->

                                                        <!--        </div>-->

                                                        <!--    </a>-->

                                                        <!--</div>-->

                                                        <!--<div>-->

                                                        <!--    <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>trading-conditions">-->

                                                        <!--        <span>-->

                                                        <!--            <img src="<?= base_url() ?>public/web/img/trading.png" alt="Trading" class="img-fluid" />-->

                                                        <!--        </span>-->

                                                        <!--        <div class="dropdown-text">-->

                                                        <!--            <h4>Trading Conditions</h4>-->

                                                        <!--            <p class="mb-0 text-wrap">Learn about our trading conditions at YaMarkets and trade responsibly.</p>-->

                                                        <!--        </div>-->

                                                        <!--    </a>-->

                                                        <!--</div>-->



                                                    </li>



                                                    <!-- <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>conversion-rate">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/conversion.png" alt="Conversion" class="img-fluid" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>Conversion Rate</h4>

                                                                <p class="mb-0 text-wrap">Instantly convert currencies with our accurate Conversion Rate Calculator.</p>

                                                            </div>

                                                        </a>

                                                    </li> -->

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        <?=lang('platform')?>

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span>Back</span>

                                            </button>

                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <ul class="list-unstyled row gx-5 gy-4">

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('platform')?></div>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>mt4-platform">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/platform.png" alt="Platform" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Platform</h4>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/mt4-platform"><?=lang('mt4_platform')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/mt5-platform"><?=lang('mt5_platform')?></a>

                                                            </li>

                                                        </ol>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('comparison')?></div>

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/comparison"><?=lang('comparison')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>comparison">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/comparison.png" alt="Comparison" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Comparison</h4>-->

                                                        <!--        <p class="mb-0 text-wrap">Explore the difference between Meta Trader platforms</p>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('socials_platform')?></div>



                                                        <ol class="list-unstyled row gy-2 gx-0 ms-0 mb-3 drop-inner-links">

                                                            <li class="col-lg-6">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/copytrade">

                                                                    <i class="fa-solid fa-handshake"></i> <?=lang('copy_trading')?>

                                                                </a>

                                                            </li>

                                                            <li class="col-lg-6">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/zulutrade">

                                                                    <i class="fa-solid fa-people-group"></i> <?=lang('zulutrade')?>

                                                                </a>

                                                            </li>

                                                            <li class="col-lg-6">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/pamm">

                                                                    <i class="fa-solid fa-percent"></i> <?=lang('pamm')?>

                                                                </a>

                                                            </li>

                                                        </ol>



                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <?php /* ?>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        Partners

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span>Back</span>

                                            </button>

                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <div class="h6 text-uppercase mb-4">Types of Partners</div>

                                                <ul class="list-unstyled row gx-5 gy-4">

                                                    <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>introducing-broker">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/broker.png" alt="Broker" class="img-fluid" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>Introducing Broker</h4>

                                                                <p class="mb-0 text-wrap">Lorem ipsum dolor sit amet consectetur. Id nisi sed</p>

                                                            </div>

                                                        </a>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>affiliate">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/affiliate.png" alt="Affiliate" class="img-fluid" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>Affiliate</h4>

                                                                <p class="mb-0 text-wrap">Lorem ipsum dolor sit amet consectetur. Id nisi sed</p>

                                                            </div>

                                                        </a>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>regional-partner">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/partner.png" alt="Partner" class="img-fluid" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>Regional Partner</h4>

                                                                <p class="mb-0 text-wrap">Lorem ipsum dolor sit amet consectetur. Id nisi sed</p>

                                                            </div>

                                                        </a>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>payment-partner">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/payment.png" alt="Payment" class="img-fluid" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>Payment Partner</h4>

                                                                <p class="mb-0 text-wrap">Lorem ipsum dolor sit amet consectetur. Id nisi sed</p>

                                                            </div>

                                                        </a>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <a class="dropdown-item d-flex gap-3 p-0 mb-3" href="<?= base_url() ?>white-label">

                                                            <span>

                                                                <img src="<?= base_url() ?>public/web/img/white-label.png" alt="White Label" class="img-fluid invert" />

                                                            </span>

                                                            <div class="dropdown-text">

                                                                <h4>White Label</h4>

                                                                <p class="mb-0 text-wrap">Lorem ipsum dolor sit amet consectetur. Id nisi sed</p>

                                                            </div>

                                                        </a>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <?php */ ?>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <?=lang('promotion')?>

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span>Back</span>

                                            </button>

                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <ul class="list-unstyled row gx-5 gy-4">

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('for_traders')?></div>

                                                        <ol class="list-unstyled mb-0 mega-menu-list">



                                                            <!--<li>-->

                                                            <!--    <a href="<?= base_url() ?><?=lang('langurl')?>/trader-of-the-month">Trader of the month-->

                                                            <!--        <span class="badge bg-danger fw-medium">Expired</span>-->

                                                            <!--    </a>-->

                                                            <!--</li>-->

                                                            <!-- <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/50-welcome-bonus">50% Welcome Bonus

                                                                    <span class="badge bg-success fw-medium">Live</span>

                                                                </a>

                                                            </li> -->

                                                            <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/tradable-bonus"><?=lang('tradable_bonus')?>

                                                                    <span class="badge bg-success fw-medium">Live</span>

                                                                </a>

                                                            </li>
                                                            <!-- <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/easter-offer">Get 10% Extra Real Equity

                                                                    <span class="badge bg-success fw-medium">Live</span>

                                                                </a>

                                                            </li> -->


                                                        </ol>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('for_partners')?></div>

                                                        <ol class="list-unstyled mb-0 mega-menu-list">

                                                            <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/master-ib-star-contest"><?=lang('master_ib_star_contest')?>

                                                                    <span class="badge bg-success fw-medium">Live</span>

                                                                </a>

                                                            </li>

                                                            <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/star-ib-partners-contest"><?=lang('star_ib_partners_contest')?>

                                                                    <span class="badge bg-success fw-medium">Live</span>

                                                                </a>

                                                            </li>

                                                            <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/dollar-trip-ib-contest">Dollar Trip IB Contest

                                                                    <span class="badge bg-success fw-medium">Live</span>

                                                                </a>

                                                            </li>

                                                        </ol>

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('contest')?></div>

                                                        <ol class="list-unstyled mb-0 mega-menu-list">

                                                            <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/nfp"><?=lang('nfp')?>

                                                                    <span class="badge bg-success fw-medium">New</span>

                                                                </a>

                                                            </li>

                                                            <!-- <li>

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/review-bonanza">Review Bonanza

                                                                    <span class="badge bg-success fw-medium">New</span>

                                                                </a>

                                                            </li> -->

                                                        </ol>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <?=lang('academy')?>

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span>Back</span>

                                            </button>



                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <ul class="list-unstyled row gx-5 gy-4">

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('education')?></div>

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/webinars"><?=lang('webinars')?></a>

                                                            </li>

                                                        </ol>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>webinars">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/notebook.png" alt="Webinars" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Webinars</h4>-->

                                                        <!--        <p class="mb-0 text-wrap">Attend insightful webinars, and gain knowledge from industry experts.</p>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('seminars')?></div>

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/seminars"><?=lang('seminars')?></a>

                                                            </li>

                                                            <li class="col-12">

                                                                <a target="blank" href="education-workshop"><?=lang('education_workshop')?></a>

                                                                <span class="badge bg-success fw-medium">New</span>

                                                            </li>

                                                        </ol>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0" href="<?= base_url() ?>seminars">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/educational-video.png" alt="Seminars" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Seminars</h4>-->

                                                        <!--        <p class="mb-0 text-wrap">Participate in seminars and expand your understanding of markets</p>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                    </li>

                                                    <li class="col-lg-4">

                                                        <div class="h6 text-uppercase mb-4"><?=lang('analytics')?></div>

                                                        <!--<a class="dropdown-item d-flex gap-3 p-0 mb-3" href="javascript:void(0)">-->

                                                        <!--    <span>-->

                                                        <!--        <img src="<?= base_url() ?>public/web/img/analytics.png" alt="Analytics" class="img-fluid" />-->

                                                        <!--    </span>-->

                                                        <!--    <div class="dropdown-text">-->

                                                        <!--        <h4>Analytics</h4>-->

                                                        <!--    </div>-->

                                                        <!--</a>-->

                                                        <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">

                                                            <li class="col-lg-6">

                                                                <a href="ihttps://yamarketsacademy.com/"><?=lang('introduction_videos')?></a>

                                                            </li>

                                                            <li class="col-lg-6">

                                                                <a href="https://yamarketsacademy.com/"><?=lang('technical_views')?></a>

                                                            </li>

                                                            <li class="col-lg-6">

                                                                <a href="https://yamarketsacademy.com/"><?=lang('featured_ideas')?></a>

                                                            </li>

                                                            <li class="col-lg-6">

                                                                <a href="https://yamarketsacademy.com/"><?=lang('web_tv')?></a>

                                                            </li>

                                                            <li class="col-lg-6">

                                                                <a href="https://yamarketsacademy.com/"><?=lang('news_analysis')?></a>

                                                            </li>

                                                        </ol>

                                                    </li>



                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <!--<li class="nav-item d-lg-none">-->

                                <!--    <a href="https://area.yamarkets.com/" class="nav-link">MT5 Login</a>-->

                                <!--</li>-->

                                <!--<li class="nav-item d-lg-none">-->

                                <!--    <a href="https://area.yamarkets.com/register" class="nav-link">MT5 Register</a>-->

                                <!--</li>-->

                                <!--<li class="nav-item d-lg-none">-->

                                <!--    <a href="https://clients.yamarkets.com/login" class="nav-link">MT4 Login</a>-->

                                <!--</li>-->

                                <!--<li class="nav-item d-lg-none">-->

                                <!--    <a href="https://clients.yamarkets.com/register" class="nav-link">MT4 Register</a>-->

                                <!--</li>-->

                                <li class="nav-item">

                                    <a href="<?= base_url() ?><?=lang('langurl')?>/blog" class="nav-link"><?=lang('blog')?></a>

                                </li>

                                <li class="nav-item">

                                    <a href="<?= base_url() ?><?=lang('langurl')?>/contact-us" class="nav-link"><?=lang('contact_us')?></a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        Languages

                                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </a>

                                    <div class="dropdown-menu">

                                        <div class="container">

                                            <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">

                                                <i class="fa-solid fa-chevron-left"></i>

                                                <span>Back</span>

                                            </button>

                                            <div class="h6 text-uppercase mb-4">Languages</div>

                                            <div class="h-vh-80 overflow-y-auto overflow-x-hidden">

                                                <ul class="list-unstyled row gx-5">

                                                    <li class="col-lg-4">

                                                        <ol class="list-unstyled row gx-0 mx-0 drop-inner-links">

                                                            <!-- <li class="col-12">

                                                                <a href="<?= base_url() ?><?=lang('langurl')?>/forex">Currencies</a>

                                                            </li> -->
                                                            <ul>
                                        <li><a href="<?= site_url('website/switch_language/english') ?>">English</a></li>
                                        <li><a href="<?= site_url('website/switch_language/hindi') ?>">Hindi</a></li>
                                        <li><a href="<?= site_url('website/switch_language/arabic') ?>">Arabic</a></li>
                                    </ul>

                                                        </ol>


                                                   


                                                   
                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </header>