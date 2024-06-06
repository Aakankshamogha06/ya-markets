<?php foreach ($expo_detail_data as $row) { ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="text-primary fw-bold text-uppercase wow fadeInUpBig">Expo gallery</h5>
                    <h2 class="title mb-2 wow fadeInUpBig" data-wow-delay="200ms"><span class="text-gradient"><?= $row->title ?></span>
                    </h2>
                    <p class="wow fadeInUpBig" data-wow-delay="300ms">
                        <span><i class="fa-solid fa-calendar-days text-primary"></i> <?= $row->date ?></span>,
                        <span> <i class="fa-solid fa-location-dot text-primary"></i> <?= $row->location ?></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="social-icons d-block mb-3 wow fadeInUp">
                        <p class="mb-2">Share on: </p>
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank" class="ms-3">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="ms-3">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" target="_blank" class="ms-3">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a role="button" target="_blank" class="ms-3" id="copyUrl">
                            <i class="fa-regular fa-clipboard"></i>
                        </a>
                    </div>
                    <div class="wow fadeInUp">

                        <p>
                            <?= $row->long_desc ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gallery-container">
                        <?php
                        $sam = $row->id;
                        $expo_gallery_view = $this->Expo_Model->expo_gallery_view($sam);

                        foreach ($expo_gallery_view as $row) {

                        ?>
                            <figure class="wow bounceIn">
                                <img class="img-fluid" src="<?php echo base_url("gallery_semi/") . $row->img; ?>" alt="A windmill" />
                                <div class="gallery-icon">
                                    <a href="<?php echo base_url("gallery_semi/") . $row->img; ?>" data-fancybox="gallery1">
                                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                                    </a>
                                </div>
                            </figure>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="system">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12 text-center">
                    <h5 class="text-primary fw-bold">Supported Payment Systems</h5>
                    <h2 class="title">For convenient <span class="text-gradient">deposits </span>
                        <div class="d-lg-block text-gradient">and withdrawals</div>
                    </h2>
                </div>
                <div class="col-12">
                    <div class="group-btn text-center mt-4">
                        <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms">Open live account</a>
                        <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms">Open demo account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<script>
    function _handleCopy(event) {
        event.preventDefault();
        var textarea = document.createElement("textarea");
        textarea.style.cssText = `
            position: fixed;
            visibilty: hidden;
        `;
        textarea.value = window.location.href;
        document.body.appendChild(textarea);
        textarea.select();
        try {
            var copiedURL = document.execCommand('copy');
            if (copiedURL) {
                alert('URL Copied');
                // console.log(textarea.value)
            } else {
                console.log('Copy failed');
            }
        } catch (err) {
            console.log('Copy failed', err);
        }
        document.body.removeChild(textarea);
    }

    document.getElementById('copyUrl').addEventListener('click', _handleCopy);
</script>