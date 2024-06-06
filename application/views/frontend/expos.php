<style>
    .card img {
        object-position: left top;
    }

    .line-clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }
</style>

<section class="forex-page z-0 position-relative overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative z-1 text-center">
                <h2 class="title mb-3 wow fadeInUp"><?=lang('expos_heading_1')?><span class="text-gradient"> <?=lang('expos_heading_2')?></span></h2>
                <p class="mb-0 wow fadeInUp" data-wow-delay="100ms"><?=lang('expos_description')?></p>
            </div>
        </div>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 290" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgb(33,37,41)" offset="0%"></stop>
                <stop stop-color="rgb(33,37,41)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,87L40,96.7C80,106,160,126,240,135.3C320,145,400,145,480,140.2C560,135,640,126,720,145C800,164,880,213,960,232C1040,251,1120,242,1200,241.7C1280,242,1360,251,1440,241.7C1520,232,1600,203,1680,169.2C1760,135,1840,97,1920,72.5C2000,48,2080,39,2160,48.3C2240,58,2320,87,2400,116C2480,145,2560,174,2640,174C2720,174,2800,145,2880,135.3C2960,126,3040,135,3120,140.2C3200,145,3280,145,3360,130.5C3440,116,3520,87,3600,96.7C3680,106,3760,155,3840,169.2C3920,184,4000,164,4080,174C4160,184,4240,222,4320,198.2C4400,174,4480,87,4560,58C4640,29,4720,58,4800,96.7C4880,135,4960,184,5040,212.7C5120,242,5200,251,5280,251.3C5360,251,5440,242,5520,207.8C5600,174,5680,116,5720,87L5760,58L5760,290L5720,290C5680,290,5600,290,5520,290C5440,290,5360,290,5280,290C5200,290,5120,290,5040,290C4960,290,4880,290,4800,290C4720,290,4640,290,4560,290C4480,290,4400,290,4320,290C4240,290,4160,290,4080,290C4000,290,3920,290,3840,290C3760,290,3680,290,3600,290C3520,290,3440,290,3360,290C3280,290,3200,290,3120,290C3040,290,2960,290,2880,290C2800,290,2720,290,2640,290C2560,290,2480,290,2400,290C2320,290,2240,290,2160,290C2080,290,2000,290,1920,290C1840,290,1760,290,1680,290C1600,290,1520,290,1440,290C1360,290,1280,290,1200,290C1120,290,1040,290,960,290C880,290,800,290,720,290C640,290,560,290,480,290C400,290,320,290,240,290C160,290,80,290,40,290L0,290Z"></path>
    </svg>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row gy-4">
            
            <?php foreach ($expo_view as $row) : ?>
                <div class="col-xl-6">
                    <div class="card linear-border bg-black h-100 bg-linear-gradient wow fadeInUp" data-wow-delay="100ms">
                        <div class="row col-rev g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title mb-3 text-primary"><?= $row->title ?></h5>
                                    <?= substr($row->long_desc, 0, 120); ?>.....
                                    <p class="card-text"><small><i class="fa-solid fa-calendar-days"></i>  <?= $row->date ?></small></p>
                                    <a href="expo/<?= str_replace(' ', '-', strtolower($row->title)); ?>" class="btn btn-outline-primary"><?=lang('about_section_read_more')?></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo base_url('images/') . $row->cover_image; ?>" class="img-fluid h-100 rounded-end object-fit-cover" alt="<?= $row->title ?>" />
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
                <h5 class="text-primary fw-bold"><?=lang('partner_success_heading')?></h5>
                <h2 class="title"> <?=lang('partner_success_subheading_1')?> <span class="text-gradient"><?=lang('partner_success_subheading_2')?></span>
                    <div class="d-lg-block text-gradient"><?=lang('partner_success_subheading_3')?></div>
                </h2>
            </div>
           <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>