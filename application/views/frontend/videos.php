<section class="pb-lg-0">
    <div class="container">
        <div class="row gy-2 align-items-center text-center text-lg-start">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">EDUCATIONAL VIDEOS</h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><span class="text-gradient">Videos</span></h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <?php
        foreach ($video_category_view as $video_category_view) : ?>

            <div class="education-wrapper">
                <div class="row align-items-center gy-4 mb-5">
                    <div class="col-md-8">
                        <h4 class="mb-0"><?= $video_category_view->category ?></h4>
                    </div>
                    <div class="col-md-4">
                        <div class="text-end arrow-btn">
                            <button class="bg-transparent prev-arr1 wow slideInRight" data-wow-delay="200ms">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 13.2499L1.00006 6.99993L7 0.75" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                            <button class="bg-transparent ms-2 next-arr1 wow slideInRight" data-wow-delay="100ms">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 0.750127L6.99994 7.00007L1 13.25" stroke="white" stroke-width="1.49998" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12 edu1-slider">
                        <?php
                        $cat_id = $video_category_view->id;
                        $video = $this->Video_model->video_view_cat($cat_id);
                        foreach ($video as $video) { ?>

                            <div class="card bg-transparent mx-3 wow fadeInUp" data-wow-delay="200ms">
                                <a href="<?= $video->video_link ?>">

                                </a>

                            </div>
                        <?php } ?>
                    </div>
                </div>
                <hr class="h-ruler" />
            </div>
        <?php endforeach ?>
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