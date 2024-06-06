<style>
    a{
        color: #fac211;
    }
    a:hover {
        opacity: .7;
    }
</style>
<?php
foreach ($blog_detail_data as $row) { ?>
    <section class="withdraw-section pb-0" style="background-image: url(./img/blog-banner.png);">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="mb-3 wow fadeInLeftBig" data-wow-delay="200ms"><?= $row->blog_name ?></h2>
                    <p class="text-gradient fw-semibold d-inline-block wow fadeInLeftBig"><?= $row->author ?>
                        <span class="d-inline-block px-2"> • </span>
                        <span class="date"><i class="fa fa-calendar"></i> <?= $row->date ?></span>
                        <span class="d-inline-block px-2"> </span>
                        <!-- <span class="views"><?= $row->views ?></span> -->
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 mx-auto">
                    <img src="<?php echo base_url('images/') . $row->image; ?>" alt="How to enable security in MT5 CRM" class="img-fluid mb-4 rounded-3 pe-none wow fadeInUp" />
                    <div class="mb-5 wow fadeInUp">
                        <?= $row->long_desc ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section>
    <div class="container">
        <div class="row align-items-center gy-4 mb-5">
            <div class="col-md-8">
                <h2 class="title wow slideInLeft" data-wow-delay="200ms">Related <span class="text-gradient">blogs</span></h2>
            </div>
            <div class="col-md-4">
                <div class="text-end arrow-btn">
                    <button class="bg-transparent prev-arr wow slideInRight" data-wow-delay="200ms">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 13.2499L1.00006 6.99993L7 0.75" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </button>
                    <button class="bg-transparent ms-2 next-arr wow slideInRight" data-wow-delay="100ms">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0.750127L6.99994 7.00007L1 13.25" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-12 blog-card-section related-blog-slider">
                <?php
                foreach ($blog_view as $row) : ?>
                    <div class="card overflow-hidden wow fadeInUp" data-wow-delay="200ms">
                        <a href="<?= str_replace(' ', '-', strtolower($row->slug)); ?>">
                            <img src="<?php echo base_url('images/') . $row->image; ?>" class="card-img-top img-fluid" alt="What caused the downfall of Silicon Valley Bank?">
                        </a>
                        <div class="card-body">
                            <a href="blog/<?= str_replace(' ', '-', strtolower($row->slug)); ?>">
                                <h5 class="card-title text-white"><?= $row->blog_name ?></h5>
                            </a>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">2,600 views <span class="d-inline-block px-2">•</span><?= $row->date ?></p>
                                <div>
                                    <a href="<?= str_replace(' ', '-', strtolower($row->slug)); ?>" class="btn btn-blog">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>