<style>
    i.fa.fa-calendar {
        color: #fac211;
    }
</style>
<section class="withdraw-section" style="background-image: url(<?= base_url() ?>public/web/img/blog-banner.png);">
    <div class="container">
        <div class="row gy-2 align-items-center text-center text-lg-start">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('blog_withdraw_section_title')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('blog_withdraw_section_subtitle_1')?> <span class="text-gradient d-xl-block"><?=lang('blog_withdraw_section_subtitle_2')?></span></h2>
            </div>
            <div class="col-lg-6">
                <p class="wow fadeInRightBig"><?=lang('blog_withdraw_section_description')?></p>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row gy-4 blog-card-section">
            <?php
            foreach ($blog_view as $row) : ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="card m-0 overflow-hidden wow fadeInUp" data-wow-delay="200ms">
                        <a href="blog/<?= str_replace(' ', '-', strtolower($row->slug)); ?>">
                            <img src="<?php echo base_url('images/') . $row->image; ?>" class="card-img-top img-fluid" alt="blog_img">
                        </a>
                        <div class="card-body">
                            <a href="blog/<?= str_replace(' ', '-', strtolower($row->slug)); ?>">
                                <h5 class="card-title text-white"><?= $row->blog_name ?></h5>
                            </a>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0"><i class="fa fa-calendar"></i><span class="d-inline-block px-2"></span><?= $row->date ?></p>
                                <div>
                                    <a href="blog/<?= str_replace(' ', '-', strtolower($row->slug)); ?>" class="btn btn-blog">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>