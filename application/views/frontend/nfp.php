<section class="overflow-visible withdraw-section" style="background-image: url(<?= base_url() ?>public/web/img/blog-banner.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center">
                <h2 class="title wow fadeInLeftBig"><span class="text-gradient">NFP </span>facebook contest</h2>
                <p class="wow fadeInLeftBig" data-wow-delay="200ms">Put your NFP prediction on our facebook page and
                    stand a chance to win $100 from us.</p>
                <div class="d-flex align-items-center justify-content-center gap-3 gap-md-5 mt-5 contest-links">
                    <div class="wow fadeInUp" data-wow-delay="100ms">
                        <a href="https://www.facebook.com/yamarkets.official/" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                        <a href="https://twitter.com/markets_ya" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
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
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="600ms">
                        <a href="https://in.pinterest.com/yamarketslimited/" target="_blank">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                    </div>
                </div>
                <div class="group-btn text-center mt-5">
                    <a href="https://www.facebook.com/photo.php?fbid=855475773257842&set=pb.100063862818155.-2207520000&type=3" target="_blank" class="btn btn-primary mb-3 mb-md-0 wow fadeInUp" data-wow-delay="100ms">Join now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-visible py-3">
    <div class="bg-linear-gradient py-3 rotate-n4">
        <marquee behavior="" direction="">
            <div class="d-flex gap-4 align-items-center">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div>•</div>
                    <div class="winner-announce">Win $100</div>
                    <p class="mb-0 text-uppercase text-white fw-semibold">on your new trading account</p>
                <?php } ?>
            </div>
        </marquee>
    </div>
</section>

<section class="overflow-visible withdraw-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex flex-column gap-4 text-center mb-5 wow fadeInUpBig">
                    <p class="mb-0">Put your NFP Prediction on YaMarkets Facebook page – Simply Predict the NFP figure
                        on the comment and win the prize. Make your comment before the deadline to be a valid
                        participant in the competition. Win $100 New Trading Account as the winner of the NFP Contest.
                    </p>
                    <h5 class="mb-0">The complete guide to non-farm payrolls (NFP)</h5>
                    <p class="mb-0">Non-farm payrolls data releases are influential on both economic policy and
                        financial markets. Discover what non-farm payrolls are, the upcoming NFP dates for 2023 and how
                        you can trade them.</p>
                    <h5 class="mb-0">What are non-farm payrolls?</h5>
                    <p class="mb-0">Non-farm payrolls (NFP) are monthly measurements of how many workers there are in
                        the US, excluding farm workers and a few other job types such as government workers, private
                        households and non-profit employees.</p>
                    <p class="mb-0">The data is collected on a monthly basis by the Bureau of Labor Statistics (BLS) and
                        put into the ‘Employment Situation’ report, which also includes the unemployment rate. The
                        report is released on the first Friday of every month at approximately 8:30am EST – which is
                        1:30pm GMT.</p>
                    <h5 class="mb-0">When NFP is released?</h5>
                    <p class="mb-0">NFP is reported by the US Bureau of Labor Statistics every first Friday of month.
                    </p>
                </div>
            </div>
            <div class="col-xxl-8 mx-auto">
                <div class="countdown" id="countdown">
                    <h4 class="mb-3 wow fadeInUp">Next NFP release</h4>
                    <div id="countdown">
                        <ul class="list-unstyled text-center wow fadeInUpBig">
                            <li>
                                <span id="days"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium">days</div>
                            </li>
                            <li>
                                <span id="hours"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium">Hours</div>
                            </li>
                            <li>
                                <span id="minutes"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium">Minutes</div>
                            </li>
                            <li>
                                <span id="seconds"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium">Seconds</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-visible how-to-apply">
    <div class="container">
        <div class="row row-gap-4 border border-start-0 border-end-0">
            <div class="col-lg-5">
                <figure class="mb-0 py-5 position-relative wow slideInLeft">
                    <img src="<?= base_url() ?>public/web/img/how-to-apply.png" alt="How to Apply?" class="img-fluid" />
                    <figcaption class="position-absolute top-50 translate-middle-y ps-lg-5 ps-3">
                        <h2 class="title">How to <br /><span class="text-gradient">Apply?</span></h2>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-7">
                <div class="p-lg-5 wow slideInRight">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item linear-border mb-5 rounded-3">
                            <div class="acc-num">1</div>
                            <div class="w-100">
                                <div class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Like the page
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-white">Like the Facebook page of YaMarkets</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item linear-border mb-5 rounded-3">
                            <div class="acc-num">2</div>
                            <div class="w-100">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Share
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-white">Share the page with your Connections</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item linear-border rounded-3">
                            <div class="acc-num">3</div>
                            <div class="w-100">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Predict
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-white">Predict the NFP figure in the Comments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-visible py-3">
    <div class="bg-linear-gradient py-3 rotate-4">
        <marquee behavior="" direction="right">
            <div class="d-flex gap-4 align-items-center">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div>•</div>
                    <div class="winner-announce text-uppercase">12th March 2024</div>
                    <p class="mb-0 text-uppercase text-white fw-semibold">Result announcement</p>
                <?php } ?>
            </div>
        </marquee>
    </div>
</section>

<section class="overflow-visible">
    <div class="container">
        <div class="row gy-5">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">Contest winners</h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms">NFP Facebook <span class="text-gradient">Contest Winners</span></h2>
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
                        <?php
                        $c = 1;
                        foreach ($nfp_view as $row) : ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex flex-wrap align-items-center gap-3">
                                            <?php if ($row->image) { ?>
                                                <img src="<?php echo base_url('images/') . $row->image; ?>" alt="" class="img-fluid" width="15%" />
                                                <p class="text-primary mb-0"><?= $row->name ?></p>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td>$<?= $row->prize_won ?></td>
                                    <td><?= $row->month ?></td>
                                    <td><?= $row->year ?></td>
                                    <td>
                                        <a href="<?php echo base_url('images/') . $row->image; ?>" class="btn btn-outline-secondary" data-fancybox="gallery1" width="50%">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="<?= base_url('nfp-winners'); ?>" class="btn btn-primary load-btn">View all <i class="fa fa-arrow-down"></i></a>
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
                        <li>The campaign results will be declared latest by 9th January 2024.</li>
                        <li>All YaMarkets Ultimate account holders can participate in this contest.</li>
                        <li>There will be only one winner in this contest.</li>
                        <li>A participant cannot win the NFP contest twice.</li>
                        <li>The campaign results will be declared within seven days.</li>
                        <li>$100 prize will be automatically credited to the Ultimate account of the winner.</li>
                        <li>Winner can withdraw profit amount within one withdrawal transaction or use the amount
                            towards the margin positions.</li>
                        <li>Only one entry per account holder is allowed. If a member has multiple accounts then only
                            one bid is allowed. In case of multiple entries, only the first entry will be considered.
                        </li>
                        <li>The Company reserves the right to modify or cancel the Promotion at any time and at its sole
                            discretion or cease this Promotion without any prior notice</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    /* countdown timer */
    const countdownElement = document.getElementById('countdown');
    const daysElement = countdownElement.querySelector('#days');
    const hoursElement = countdownElement.querySelector('#hours');
    const minutesElement = countdownElement.querySelector('#minutes');
    const secondsElement = countdownElement.querySelector('#seconds');

    // EVENT DATE
    const endDate = new Date('2024-12-18 12:00:00');
    let secondsLeft = (endDate.getTime() - new Date().getTime()) / 1000;

    function updateCountdown() {
        secondsLeft -= 1;

        const days = Math.floor((secondsLeft / 86400) % 30);
        daysElement.textContent = days < 10 ? '0' + days : days;

        const hours = Math.floor((secondsLeft % 86400) / 3600);
        hoursElement.textContent = hours < 10 ? '0' + hours : hours;

        const minutes = Math.floor((secondsLeft % 3600) / 60);
        minutesElement.textContent = minutes < 10 ? '0' + minutes : minutes;

        const seconds = Math.floor(secondsLeft % 60);
        secondsElement.textContent = seconds < 10 ? '0' + seconds : seconds;

        // when timer countdown end
        if (secondsLeft <= 0) {
            const countdownContent = document.querySelector('.countdown-content');
            const countdownContentFinal = document.querySelector('.countdown-content-final');
            countdownContent.classList.add('d-none');
            countdownContentFinal.classList.add('d-flex');
        }

    }
    setInterval(updateCountdown, 1000);
</script>