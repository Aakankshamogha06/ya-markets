<style>
    .award-card img {
        height: 150px;
        width: 250px;
        object-fit: contain;
        margin: auto;
    }
</style>
<section class="pb-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('awards_heading')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('awards_subheading')?>
                    <span class="text-gradient"><?=lang('awards_subheading_highlight')?></span>
                </h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row gy-4">
            <?php foreach ($awards_view as $row) : ?>
                <div class="col-lg-6">
                    <div class="card award-card bg-transparent">
                        <div class="row align-items-center g-0 text-center text-md-start py-4">
                            <div class="col-md-3 col-xl-2 wow fadeInLeftBig">
                                <a href="<?php echo base_url('images/') . $row->award_image; ?>" class="text-center" data-fancybox="awards">
                                    <img src="<?php echo base_url('images/') . $row->award_image; ?>" class="img-fluid" alt="Best FX Trading Platform in Asia: 29 - 30 September 2021" />
                                </a>
                            </div>
                            <div class="col-md-9 col-xl-10">
                                <div class="card-body text-white wow fadeInRightBig">
                                    <h4 class="card-title fw-semibold text-primary mb-4">
                                        <?= $row->award_name; ?>
                                    </h4>
                                    <p class="card-text"> <?= $row->award_desc; ?><?= $row->award_year; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('supported_payment_systems_heading')?></h5>
                <h2 class="title"> <?=lang('supported_payment_systems_subheading_1')?><span class="text-gradient"><?=lang('supported_payment_systems_subheading_2')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('supported_payment_systems_subheading_3')?></div>
                </h2>
            </div>
           <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>