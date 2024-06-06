
<style>
    .card-box {
        min-height: 464px;
        max-height: 464px;
        height: 100%;
    }

    .card-box>figure {
        width: 100%;
        position: absolute;
    }

    .card-box>figure>img {
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 464px;
    }

    .card-box>figure::before {
        position: absolute;
        content: '';
        inset: 0;
        background-image: linear-gradient(180deg, #0005, #000c);
    }

    .card-box>.pos {
        padding: 1rem;
        transition: all .3s ease-in-out;
        transform: translateY(325px);
        background: #000000c9;
        height: 100%;
    }

    .card-box>.pos h5 {
        min-height: 50px;
    }

    .card-box:hover>.pos {
        background: #000;
        transform: translateY(0);
    }

    .card-box .icon {
        margin-bottom: 1rem;
        font-size: 2rem;
        color: #fac211;
    }

    @media (max-width: 767px) {
        .card-box>.pos {
            transform: translateY(368px);
        }
    }
</style>

<section class="overflow-visible withdraw-section" style="background-image: url(<?= base_url() ?>public/web/img/blog-banner.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-xxl-6 mx-auto text-center">
                <h2 class="title mb-2 wow fadeInLeftBig"><span class="text-gradient">YaMarkets</span> Review Bonanza</h2>
                <p class="wow fadeInLeftBig" data-wow-delay="200ms">Encourage YaMarkets customers to share their experiences and leave reviews on different review platforms to build brand credibility and engage with the community.</p>
                <div class="d-flex align-items-center justify-content-center gap-3 gap-md-5 mt-5 contest-links">
                    <!-- <div class="wow fadeInUp" data-wow-delay="100ms">
                        <a href="https://www.facebook.com/yamarkets.official/" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                        <a href="https://twitter.com/markets_ya" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="300ms">
                        <a href="https://www.instagram.com/yamarketslimited/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="400ms">
                        <a href="https://www.linkedin.com/company/yamarketslimited/" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="500ms">
                        <a href="https://www.youtube.com/channel/UCP0WDmYQ7wNZPZMI5KOC-Iw" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>-->
                    <div class="wow fadeInUp" data-wow-delay="600ms">
                        <a href="https://www.trustpilot.com/evaluate/yamarkets.com" target="_blank">
                            <i class="fa fa-star"></i>
                        </a>
                    </div> 
                </div>
                <div class="group-btn text-center mt-5">
                    <a href="https://www.trustpilot.com/evaluate/yamarkets.com" target="_blank" class="btn btn-primary mb-3 mb-md-0 wow fadeInUp" data-wow-delay="100ms">Join now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-black py-0">
    <div class="container-fluid px-0">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-5 g-0">
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="100ms">
                    <figure class="mb-0">
                        <img src="<?= base_url() ?>public/web/img/promotion/duration.jpg" alt="Duration" class="img-fluid" />
                    </figure>
                    <div class="pos">
                        <div class="icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <h5><span class="text-gradient">Duration</span></h5>
                        <p class="mb-0">Run the contest for 4 weeks to allow enough time for participants to use the product or service and share their honest opinions.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="200ms">
                    <figure class="mb-0">
                        <img src="<?= base_url() ?>public/web/img/promotion/requirements.jpg" alt="Entry Requirements" class="img-fluid" />
                    </figure>
                    <div class="pos">

                        <div class="icon">
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
                        <h5><span class="text-gradient">Entry Requirements</span></h5>
                        <p class="mb-0">Participants must be existing YaMarkets customers. To enter, participants need to submit a review of their experience with YaMarkets on the official Facebook page. The review should be detailed, highlighting specific features, benefits, or experiences that stood out.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="300ms">
                    <figure class="mb-0">
                        <img src="<?= base_url() ?>public/web/img/promotion/review-platforms.jpg" alt="Review Platforms" class="img-fluid" />
                    </figure>
                    <div class="pos">

                        <div class="icon">
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <h5><span class="text-gradient">Review Platforms</span></h5>
                        <p class="mb-0">Participants are encouraged to post their reviews on at least two different review platforms, such as Trustpilot, Forex Peace Army or any other relevant industry-specific platforms.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="400ms">
                    <figure class="mb-0">
                        <img src="<?= base_url() ?>public/web/img/promotion/verification.jpg" alt="Submission Verification" class="img-fluid" />
                    </figure>
                    <div class="pos">

                        <div class="icon">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h5><span class="text-gradient">Submission Verification</span></h5>
                        <p class="mb-0">Participants must provide screenshots or links to their reviews on the external platforms when submitting their entry on the Facebook page to verify their participation.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="500ms">
                    <figure class="mb-0">
                        <img src="<?= base_url() ?>public/web/img/promotion/scoring.jpg" alt="Scoring" class="img-fluid" />
                    </figure>
                    <div class="pos">

                        <div class="icon">
                            <i class="fa-brands fa-screenpal"></i>
                        </div>
                        <h5><span class="text-gradient">Scoring</span></h5>
                        <p class="mb-0">Entries will be judged based on the quality and depth of the reviews submitted.
                            Bonus points for creativity - encourage participants to use visuals, videos, or any other creative content to enhance their reviews.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-visible withdraw-section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="card bg-linear-gradient h-100 border-0 text-center wow fadeInUpBig" data-wow-delay="100ms">
                    <div class="card-body">
                        <img src="<?= base_url() ?>public/web/img/promotion/trophy.png" width="72" alt="Prizes" class="img-fluid mb-3">
                        <h5 class="card-title h4">
                            <span class="text-gradient">Prizes</span>
                        </h5>
                        <p class="card-text">One lucky winner will get $50 tradable bonus. Any profits made with the tradable bonus can be withdrawed once.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5">
                <div class="card bg-linear-gradient h-100 border-0 text-center wow fadeInUpBig" data-wow-delay="200ms">
                    <div class="card-body">
                        <img src="<?= base_url() ?>public/web/img/promotion/rating.png" width="72" alt="Promotion" class="img-fluid mb-3">
                        <h5 class="card-title h4">
                            <span class="text-gradient">Promotion</span>
                        </h5>
                        <p class="card-text">Promote the contest on YaMarkets' website, social media channels, and through email newsletters. Utilize a unique hashtag for social media sharing, encouraging participants to share their reviews and experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-visible">
    <div class="container">
        <div class="row gy-5">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">Announce the winners on all YaMarkets' platforms</h5>
                <h2 class="title mb-3 wow fadeInLeftBig" data-wow-delay="200ms">Results <span class="text-gradient">Announcement</span></h2>
                <p class="wow fadeInLeftBig" data-wow-delay="300ms">Feature snippets of the most compelling reviews in marketing materials or on the website to showcase customer satisfaction.</p>
            </div>
            <div class="col-12">
                <div class="table-responsive wow fadeInUp">
                    <table class="table contest-winner-table text-nowrap">
                        <thead class="text-uppercase">
                            <tr>
                                <th width="500">Name</th>
                                <th>Prize won</th>
                                <th>Month</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <img src="<?= base_url() ?>public/web/img/contest-winner-img.png" alt="" class="img-fluid" />
                                        <p class="text-primary mb-0">Jitendra Kumar Yadav</p>
                                    </div>
                                </td>
                                <td>$ 100</td>
                                <td>February</td>
                                <td>2023</td>
                                <td>
                                    <a href="<?= base_url() ?>public/web/img/contest-winner-img.png" class="btn btn-outline-secondary" data-fancybox="gallery1">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <img src="<?= base_url() ?>public/web/img/course-detail-img.png" alt="" class="img-fluid" />
                                        <p class="text-primary mb-0">Andhick</p>
                                    </div>
                                </td>
                                <td>$ 100</td>
                                <td>January</td>
                                <td>2023</td>
                                <td>
                                    <a href="<?= base_url() ?>public/web/img/course-detail-img.png" class="btn btn-outline-secondary" data-fancybox="gallery1">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="./nfp-winners" class="btn btn-primary load-btn">View all <i class="fa fa-arrow-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-5">
                <h3 class="mb-3 wow fadeInLeft" data-wow-delay="100ms">
                    <span class="text-gradient">Feedback Loop</span>
                </h3>
                <ul class="list-unstyled opacity-75">
                    <li class="d-flex gap-2 mb-2 wow fadeInLeft" data-wow-delay="200ms">
                        <span>
                            <i class="fa fa-check text-primary"></i>
                        </span>
                        <span>Use the feedback received during the contest to improve products or services.</span>
                    </li>
                    <li class="d-flex gap-2 mb-2 wow fadeInLeft" data-wow-delay="300ms">
                        <span>
                            <i class="fa fa-check text-primary"></i>
                        </span>
                        <span>Express gratitude to participants and let them know how their feedback will contribute to YaMarkets' ongoing commitment to customer satisfaction.</span>
                    </li>
                    <li class="d-flex gap-2 wow fadeInLeft" data-wow-delay="400ms">
                        <span>
                            <i class="fa fa-check text-primary"></i>
                        </span>
                        <span>By implementing this contest, YaMarkets can foster a sense of community, gather valuable feedback, and boost its online reputation across various review platforms.</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <img src="<?= base_url() ?>public/web/img/promotion/feedback.jpg" alt="Feedback Loop" class="img-fluid rounded-top-pill wow fadeInRight" data-wow-delay="200ms" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linear-border contest-terms">
                    <h2 class="title wow fadeInUp text-center mb-5" data-wow-delay="100ms">Terms & conditions</h2>
                    <ol class="text-white opacity-50 wow fadeInUp">
                        <!--<li>The campaign results will be declared latest by 14th February 2023.</li>-->
                        <!--<li>All YaMarkets Ultimate account holders can participate in this contest.</li>-->
                        <!--<li>There will be only one winner in this contest.</li>-->
                        <!--<li>A participant cannot win the NFP contest twice.</li>-->
                        <!--<li>$100 prize will be automatically credited to the Ultimate account of the winner.</li>-->
                        <!--<li>Winner can withdraw profit amount within one withdrawal transaction or use the amount towards the margin positions.</li>-->
                        <!--<li>Only one entry per account holder is allowed. If a member has multiple accounts then only one bid is allowed. In case of multiple entries, only the first entry will be considered.</li>-->
                        <!--<li>The Company reserves the right to modify or cancel the Promotion at any time and at its sole discretion or cease this Promotion without any prior notice</li>-->
                       <li> The YaMarkets Review Bonanza Contest runs monthly, starting at the beginning and ending at the last of each month.</li>
                        <li>Participants must be existing YaMarkets customers.</li>

                     <li> Every participant must fulfil the criteria, in order to be eligible for the contest.</li>

                    <li>To enter, a participant needs to submit a detailed review of their YaMarkets experience on the official Facebook page.</li>

                   <li> The reviews must further be posted on at least two different platforms like Trustpilot or Forex Peace Army.</li>

                 <li> Only reviews with attached screenshots and links for verification will be considered for the next step.</li>

                 <li>Entries are judged on the quality and depth of reviews. Moreover, YaMarkets holds the right to judge the reviews outside the mentioned terms.</li>

                 <li> The results/winners are announced during the 1st week of the following month of the contest.</li>

                  <li>  One winner gets a $50 tradable bonus; profits can only be withdrawn once.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>