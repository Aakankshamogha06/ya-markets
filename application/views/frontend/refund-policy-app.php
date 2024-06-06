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

<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">A company you can trust</h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><span class="text-gradient">Refund</span> policy</h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-5 wow fadeInUp" data-wow-delay="100ms">
                    <p>The Company may go for an exception in some cases when it is necessary to return payment made by the credit card, but only if the Client justifies the reason of doing this. The Client may submit a request to refund in case service not provided or not as described, the service received is not functioning appropriately. A refund is possible in case when the account had been deposited, but no trades were done and is made only on the credit card that was used for depositing.</p>
                    <p>In order to start the return process the Client shall submit a cancellation request by emailing to finance@yamarkets.com. A cancellation request shall contain the following information at least but not limited to:</p>
                    <ol class="opacity-50 policy-list">
                        <li>Full name of the Client;</li>
                        <li>Residential address;</li>
                        <li>Contact e-mail and phone number(-s);</li>
                        <li>Trading account number(-s);</li>
                        <li>Initial payment amount, date of payment, used payment method(i.e. credit/debit cards);</li>
                        <li>Payment identification number(if any);</li>
                        <li>The reasons of the cancellation subject to the conditions stated below.</li>
                    </ol>
                    <p>All the information in a cancellation request submitted to the Company shall be identical to that originally submitted in the initial payment.</p>
                    <p>All received cancellation requests to be dealt with by the Company on the following terms and conditions:</p>
                    <ol class="opacity-50 policy-list">
                        <li>All cancellation requests shall be for genuine and acceptable reasons, and those reasons shall be described in detail by the Client in the cancellation request;</li>
                        <li>All cancellation requests shall be submitted within 7 days from the moment of the initial payment; the Company shall notify the Client in cases where it is not possible to process the cancellation request due to card scheme or payment institution rules;</li>
                        <li>All cancellation requests shall be processed within 2 business days as per term set by the Client Agreement for claims related to non-trading operations or exceptionally more; the Company shall notify the Client in cases when additional time is required;</li>
                        <li>All cancellation requests shall be reviewed only if the requested amount does not exceed initial payment amount and as well as free margin of trading account;</li>
                        <li>Any charges deducted by the payment institution and also any loss or expense, if suffered or incurred by the Company due to adverse exchange rate fluctuation to be covered from the return amount.</li>
                    </ol>

                </div>
            </div>
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