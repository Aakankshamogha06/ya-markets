<style>
    .card img {
        max-height: 267px;
        object-fit: cover;
        object-position: center center;
    }
</style>
<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title mb-3 text-center wow fadeInUp"><?=lang('seminar_title_1')?>
                    <span class="text-gradient"><?=lang('seminar_title_2')?></span>
                </h2>
                <p class="wow fadeInUp" data-wow-delay="100ms"><?=lang('seminar_paragraph_1')?></p>
                <p class="wow fadeInUp" data-wow-delay="200ms"><?=lang('seminar_paragraph_2')?></p>
                <p class="wow fadeInUp" data-wow-delay="300ms"><?=lang('seminar_paragraph_3')?></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4 blog-card-section">
            <?php
            foreach ($seminar_view as $row) {
            ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="card m-0 border-0 wow fadeInUp" data-wow-delay="200ms">
                        <a href="<?= base_url() ?>seminar-gallery/<?= str_replace(' ', '-', strtolower($row->name)); ?>">
                            <img src="<?php echo base_url("images/") . $row->cover_image; ?>" class="card-img-top img-fluid" alt="Seminar in Tanzania – Simple Strategies that work better in Forex">
                        </a>
                        <div class="card-body">
                            <label class="text-primary fw-semibold mb-1">SEMINAR</label>
                            <a href="<?= base_url() ?>seminar-gallery/<?= str_replace(' ', '-', strtolower($row->name)); ?>">
                                <h5 class="card-title text-white"><?= $row->name ?></h5>
                            </a>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0"><?= $row->location ?><span class="d-inline-block px-2">•</span> <?= $row->date ?></p>
                                <div>
                                    <a href="<?= base_url() ?>seminar-gallery/<?= str_replace(' ', '-', strtolower($row->name)); ?>" class="btn btn-blog">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-12 text-center">
                <button class="btn btn-primary load-btn"><?=lang('load_more_button')?> <i class="fa fa-arrow-down"></i></button>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('system_section_title')?></h5>
                <h2 class="title"><?=lang('system_register_title_1')?> <span class="text-gradient"><?=lang('system_register_title_2')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('system_register_subtitle')?></div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('system_open_live_account')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('system_open_demo_account')?></a>
                </div>
            </div>
        </div>
    </div>
</section>