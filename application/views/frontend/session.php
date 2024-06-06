<style>
    .session-card {
        position: relative;
        z-index: 0;
        overflow: hidden;
        border: 0;
        background: transparent;
    }

    .session-card:before {
        content: '';
        position: absolute;
        z-index: -1;
        top: -25px;
        right: -25px;
        background: #fac21150;
        height: 32px;
        width: 32px;
        border-radius: 32px;
        transform: scale(1);
        transform-origin: 50% 50%;
        transition: transform 0.35s ease-out;
    }

    .session-card:hover:before {
        border-radius: 0;
        transform: scale(30);
    }

    .session-card img {
        min-height: 140px;
        max-height: 140px;
    }
</style>

<section>
    <div class="container">
        <div class="row g-4 blog-card-section">
            <?php foreach ($session_detail_data as $row) { ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="card m-0 overflow-hidden wow fadeInUp" data-wow-delay="200ms">
                        <img src="<?php echo base_url("images/") . $row->detailed_img; ?>" class="card-img-top img-fluid object-fit-contain" alt="" />
                        <div class="card-body">
                            <h4 class="card-title fw-semibold">
                                <span class="text-gradient"><?= $row->session_name ?></span>
                            </h4>
                            <div class="card-text">
                                <div class="d-flex justify-content-between py-2">
                                    <div class="text-white">
                                        <i class="text-primary fa-solid fa-calendar" aria-hidden="true"></i>
                                        <span><?= $row->session_date ?></span>
                                    </div>
                                    <div class="text-white">
                                        <i class="text-primary fa-solid fa-clock" aria-hidden="true"></i>
                                        <span><?= $row->session_time ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex justify-content-between py-2">
                                    <div class="text-white">
                                        <i class="text-primary fa-solid fa-map-marker" aria-hidden="true"></i>
                                        <span><?= $row->session_location ?></span>
                                    </div>
                                    <div class="text-white">
                                        <i class="text-primary fa fa-language" aria-hidden="true"></i>
                                        <span><?= $row->language ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex justify-content-between py-2">
                                    <div class="text-white">
                                        <i class="text-primary fa fa-hourglass" aria-hidden="true"></i>
                                        <span><?= $row->duration ?></span>
                                    </div>
                                    <div class="text-white">
                                        <i class="text-primary fa fa-microphone" aria-hidden="true"></i>
                                        <span><?= $row->speaker ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-text">
                                <div class="text-align-justify py2">
                                    <div class="text-white">
                                        <span><?= $row->description ?></span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card-text">
                                <div class="d-flex justify-content-between py-2">
                                    <div class="text-white">
                                        <button class="btn btn-primary reg wow fadeInUp" data-wow-delay="100ms" data-bs-toggle="modal" value="<?= $row->id ?>" data-bs-target="#Modal<?= $row->id ?>">Inquiry</button>
                                    </div>
                                    <div class="text-white">
                                        <button class="btn btn-primary reg wow fadeInUp" data-wow-delay="100ms" data-bs-toggle="modal" value="<?= $row->id ?>" data-bs-target="#exampleModal<?= $row->id ?>">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----New Modal for inquiry button---->
                <div class="modal fade" id="exampleModal<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content bg-dark">
                            <div class="modal-header border-0">
                                <div class="modal-title fs-4 fw-semibold" id="exampleModalLabel">Book Your Seat</div>
                                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('website/session_data_submit_data') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" id="ctext" name="session_id" value="<?= $row->id ?>">
                                                <label for="name" class="d-none">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="d-none">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile_no" class="d-none">Phone</label>
                                                <input type="tel" class="form-control" id="mobile_no" name="mobile_no" pattern="{0-9}[10]" placeholder="+91 XXXXXXXXX" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location" class="d-none">Location</label>
                                                <input type="text" class="form-control" id="location" name="location" placeholder="Location" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-outline-primary text-uppercase">submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Modal<?= $row->id ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content bg-dark">
                            <div class="modal-header border-0">
                                <div class="modal-title fs-4 fw-semibold" id="exampleModalLabel">Enquiry</div>
                                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('website/session_inquiry_submit_data') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" id="ctext" name="session_id" value="<?= $row->id ?>">
                                                <label for="name" class="d-none">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="d-none">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile_no" class="d-none">Phone</label>
                                                <input type="tel" class="form-control" id="mobile_no" name="mobile_no" pattern="{0-9}[10]" placeholder="+91 XXXXXXXXX" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="message" class="d-none">Message</label>
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="How can we help?"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-outline-primary text-uppercase">submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>