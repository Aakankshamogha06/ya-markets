<section class="pb-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('hiring_heading')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('hiring_subheading')?> <span class="text-gradient"><?=lang('hiring_subheading_highlight')?></span></h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <?php foreach ($career_details_view as $row) : ?>
            <div class="accordian-wrapper wow fadeInUp">
                <div class="container">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4 class="text-white"><?= $row->position ?></h4>
                            <div class="d-flex gap-4 align-items-center">
                                <p class="text-primary mb-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?= $row->id ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?= $row->id ?>"><?= $row->position ?><i class="fa fa-chevron-down ms-1"></i>
                                </p>
                                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply now</a>
                            </div>
                        </div>
                        <div id="panelsStayOpen-collapse<?= $row->id ?>" class="accordion-collapse collapse">
                            <div class="accordion-body text-white">
                                <?= $row->description ?>
                                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('payment_systems_heading')?></h5>
                <h2 class="title"><?=lang('partner_trading_heading')?> <span class="text-gradient"><?=lang('partner_trading_subheading_highlight')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('partner_trading_subheading_with')?></div>
                </h2>
            </div>
           <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>
<!-- <?=lang('')?> -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <div class="modal-title fs-4 fw-semibold" id="exampleModalLabel">Graphic Designer</div>
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/Career_Details/job_application_data') ?>" method="post" enctype="multipart/form-data">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="d-none"><?=lang('full_name_placeholder')?></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="d-none"><?=lang('email_placeholder')?></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile_no" class="d-none"><?=lang('phone_placeholder')?></label>
                                <input type="tel" class="form-control" id="mobile_no" name="mobile_no" value="+91" max_length="13" pattern=[0-9]{10} placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profile" class="d-none"><?=lang('profile_placeholder')?></label>
                                <input type="text" class="form-control" id="profile" name="profile" placeholder="Profile" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="resume" class="input-file" role="button">
                                    <i class="fa-solid fa-paperclip me-2" style="color:#fac211;"></i> <?=lang('resume_attachment_label')?>
                                    <input type="file" class="form-control visually-hidden" id="resume" name="resume" placeholder="Attach Resume" required/>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="message" class="d-none"><?=lang('message_placeholder')?></label>
                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="6" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary text-uppercase"><?=lang('submit_button')?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let phone = document.querySelector("#mobile_no");
    window.intlTelInput(phone, {
        autoPlaceholder: "off",
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "js/utils.js",
    });
</script>