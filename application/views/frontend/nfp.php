<section class="overflow-visible withdraw-section" style="background-image: url(<?= base_url() ?>public/web/img/blog-banner.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center">
                <h2 class="title wow fadeInLeftBig"><span class="text-gradient"><?=lang('nfp_contest_title_1')?> </span><?=lang('nfp_contest_title_2')?></h2>
                <p class="wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('nfp_contest_description')?></p>
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
                    <a href="https://www.facebook.com/photo.php?fbid=855475773257842&set=pb.100063862818155.-2207520000&type=3" target="_blank" class="btn btn-primary mb-3 mb-md-0 wow fadeInUp" data-wow-delay="100ms"><?=lang('nfp_join_now')?></a>
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
                    <div class="winner-announce"><?=lang('nfp_marquee_content_announce')?></div>
                    <p class="mb-0 text-uppercase text-white fw-semibold"><?=lang('nfp_marquee_content_description')?></p>
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
                    <p class="mb-0"><?=lang('nfp_nfp_prediction_guide')?>
                    </p>
                    <h5 class="mb-0"><?=lang('nfp_nfp_guide_title')?></h5>
                    <p class="mb-0"><?=lang('nfp_nfp_guide_content')?></p>
                    <h5 class="mb-0"><?=lang('nfp_what_are_nfp')?></h5>
                    <p class="mb-0"><?=lang('nfp_nfp_definition')?>
                    <h5 class="mb-0"><?=lang('nfp_nfp_release')?></h5>
                    <p class="mb-0"><?=lang('nfp_nfp_release_info')?>
                    </p>
                </div>
            </div>
            <div class="col-xxl-8 mx-auto">
                <div class="countdown" id="countdown">
                    <h4 class="mb-3 wow fadeInUp"><?=lang('nfp_next_nfp_release')?></h4>
                    <div id="countdown">
                        <ul class="list-unstyled text-center wow fadeInUpBig">
                            <li>
                                <span id="days"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium"><?=lang('nfp_days')?></div>
                            </li>
                            <li>
                                <span id="hours"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium"><?=lang('nfp_hours')?></div>
                            </li>
                            <li>
                                <span id="minutes"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium"><?=lang('nfp_minutes')?></div>
                            </li>
                            <li>
                                <span id="seconds"></span>
                                <hr class="counter-line" />
                                <div class="text-primary fw-medium"><?=lang('nfp_seconds')?></div>
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
                        <h2 class="title"><?=lang('nfp_how_to_apply_title')?></span></h2>
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
                                    <?=lang('nfp_like_the_page')?>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-white"><?=lang('nfp_how_to_apply_description_1')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item linear-border mb-5 rounded-3">
                            <div class="acc-num">2</div>
                            <div class="w-100">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?=lang('nfp_share')?>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-white"><?=lang('nfp_how_to_apply_description_2')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item linear-border rounded-3">
                            <div class="acc-num">3</div>
                            <div class="w-100">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?=lang('nfp_predict')?>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-white"><?=lang('nfp_how_to_apply_description_3')?></p>
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
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('nfp_contest_winners_title')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('nfp_nfp_facebook_contest_winners_title_1')?> <span class="text-gradient"><?=lang('nfp_nfp_facebook_contest_winners_title_2')?></span></h2>
            </div>
            <div class="col-12">
                <div class="table-responsive wow fadeInUp">
                    <table class="table contest-winner-table text-nowrap">
                        <thead class="text-uppercase">
                            <tr>
                                <th width="500"><?=lang('nfp_name')?></th>
                                <th><?=lang('nfp_prize_won')?></th>
                                <th><?=lang('nfp_month')?></th>
                                <th><?=lang('nfp_year')?></th>
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
                <a href="<?= base_url('nfp-winners'); ?>" class="btn btn-primary load-btn"><?=lang('nfp_view_all')?> <i class="fa fa-arrow-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linear-border contest-terms">
                    <h2 class="title wow fadeInUp text-center mb-5" data-wow-delay="100ms"><?=lang('nfp_terms_conditions_title')?></h2>
                    <ol class="text-white opacity-50 wow fadeInUp">
                        <li><?=lang('nfp_campaign_results_declaration')?></li>
                        <li><?=lang('nfp_account_holders_participation')?></li>
                        <li><?=lang('nfp_one_winner')?></li>
                        <li><?=lang('nfp_single_winner_rule')?></li>
                        <li><?=lang('nfp_campaign_results_declaration_within_seven_days')?></li>
                        <li><?=lang('nfp_prize_credited_to_winner_account')?></li>
                        <li><?=lang('nfp_winner_withdrawal_rule')?></li>
                        <li><?=lang('nfp_single_entry_per_account')?></li>
                        <li><?=lang('nfp_promotion_modification_or_cancellation')?></li>
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