<style>
    .card:hover {
        opacity: .7;
    }

    .card>.card-img-top {
        max-height: 250px;
    }

    .hidden {
        display: none;
    }
</style>

<section class="withdraw-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5> -->
                <h2 class="title wow fadeInLeftBig">One-to-One Session</h2>
            </div>
        </div>
    </div>
</section>
<section class="pt-0">
    <div class="container">
        <div class="get-started text-center wow fadeInUp">
            <section class="system">
                <!-- <h3 class="fw-semibold mb-3">If You Are <span class="text-gradient">Interested!</span></h3> -->
                <!-- <p>Kindly complete the registration process</p> -->
                <h3 class="fw-semibold mb-2"><span class="text-primary">One-to-One session</span></h3>
                <p>Please select your Country</p>
                <?php
                foreach ($session_view as $row) : ?>
                    <div class="mt-4">
                        <!-- <button class="btn btn-primary reg" data-wow-delay="100ms" data-bs-toggle="modal"
                        value="<?= $row->id ?>" data-bs-target="#exampleModal<?= $row->id ?>">Register</button> -->
                        <div class="row">
                            <div class="col-md-3 mx-auto">
                                <select class="form-select" name="session_country" id="dropdown">
                                    <option selected value=" ">Country</option>
                                    <option value="<?= $row->id ?>"><?= $row->session_country ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container hidden" id="button2">
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="group-btn text-center mt-4">
                                    <a href="<?= base_url() ?>webinar" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms">Online</a>
                                    <a href="<?= base_url() ?>website/session/<?= str_replace(' ', '-', strtolower($row->session_country)); ?>" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms">Offline</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</section>
<script>
    document.getElementById('dropdown').addEventListener('change', function() {
        var selectedOption = this.value;
        var button1 = document.getElementById('button1');
        var button2 = document.getElementById('button2');

        if (selectedOption !== ' ') {
            button2.classList.remove('hidden');
        } else if (selectedOption === ' ') {
            button2.classList.add('hidden');
        } else {
            "something is wrong";
        }
    });
</script>