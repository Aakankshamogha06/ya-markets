<section class="withdraw-section webniar-section" style="background-image: url(<?= base_url() ?>public/web/img/webinar-banner.png);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="title mb-3 wow fadeInLeftBig" data-wow-delay="200ms">Join our live, interactive
                    <span class="text-gradient">webinar </span> for
                    <span class="text-gradient">valuable insights</span>
                </h2>
                <p class="wow fadeInLeftBig">Explore strategies to reach your maximum trading potential with YaMarkets' free educational webinar.</p>
                <a role="button" class="btn btn-primary register-btn">Register now</a>
            </div>
        </div>
    </div>
</section>

<section class="trading-webinars">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">Live webinars</h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><span class="text-gradient">Forex trading </span>webinars</h2>
            </div>
            <!--<div class="col-lg-6">-->
            <!--    <ul class="nav nav-pills mb-3 justify-content-lg-end course-tab wow fadeInRightBig" id="pills-tab" role="tablist">-->
            <!--        <li class="nav-item" role="presentation">-->
            <!--            <button class="nav-link text-uppercase active" id="pills-basic-tab" data-bs-toggle="pill" data-bs-target="#pills-basic" type="button" role="tab" aria-controls="pills-basic" aria-selected="true">-->
            <!--                <span>Basic course</span>-->
            <!--            </button>-->
            <!--        </li>-->
            <!--        <li class="nav-item" role="presentation">-->
            <!--            <button class="nav-link text-uppercase" id="pills-advanced-tab" data-bs-toggle="pill" data-bs-target="#pills-advanced" type="button" role="tab" aria-controls="pills-advanced" aria-selected="false">-->
            <!--                <span>advanced course</span>-->
            <!--            </button>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</div>-->
            <div class="col-12">
                <!--<p class="text-center">Comming Soon...</p>-->
              <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab" tabindex="0">
                        <?php 
                        foreach ($webinar_view as $row) { ?>
                            <div class="course-list row align-items-center wow fadeInUp">
                                <div class="col-lg-4">
                                    <div class="course-date">
                                        <p class="c-date mb-0"><?= $row->month_name ?><span class="text-gradient"><?= $row->day ?><sup class="text-gradient"><?= $row->day_with_suffix ?></sup></span></p>
                                        <p class="c-time text-primary mb-0"><?= date("h:i A", strtotime($row->time));  ?> IST</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="course-detail">
                                        <div>
                                            <h4 class="text-white mb-3"><?= $row->topic ?></h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <!--<div>-->
                                                <!--    <img src="<?= base_url() ?>public/web/img/course-detail-img.png" alt="Kathryn Murphy" class="img-fluid" />-->
                                                <!--</div>-->
                                                <p class="mb-0">
                                                    <small class="text-white"><?= $row->speaker ?></small>
                                                    <small class="d-block opacity-50">Speaker</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                           <?php
                                           if($row->status==1){
                                           ?>
                                            <button type="button" class="btn btn-primary reg" data-bs-toggle="modal" value="<?= $row->id ?>" data-bs-target="#exampleModal">Register now</button>
                                           <?php
                                           }
                                           else{
                                               echo'<button type="button" class="btn btn-primary deng" >Closed</button>';
                                               
                                           }
                                           ?>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-list border-top-0 row align-items-center wow fadeInUp">
                                
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 text-center">-->
            <!--    <button class="btn btn-primary load-btn">Load more <i class="fa fa-arrow-down"></i></button>-->
            <!--</div> -->
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-5">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInUp">Why you should regiSter</h5>
                <h2 class="title wow fadeInUp" data-wow-delay="200ms"><span class="text-gradient">Forex Trading </span>Webinars</h2>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent wow fadeInUp">
                    <figure class="rounded-img">
                        <img src="<?= base_url() ?>public/web/img/practical-strategies.png" class="card-img-top img-fluid" alt="Expert Guidance" />
                    </figure>
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary mb-3">Expert Guidance</h5>
                        <p class="card-text">Learn from industry experts' insights and techniques for informed trading decisions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent wow fadeInUp">
                    <figure class="rounded-img">
                        <img src="<?= base_url() ?>public/web/img/expert-guidance.png" class="card-img-top img-fluid" alt="Practical Strategies" />
                    </figure>
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary mb-3">Practical Strategies</h5>
                        <p class="card-text">Acquire proven tactics to improve your trading skills and trade effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent wow fadeInUp">
                    <figure class="rounded-img">
                        <img src="<?= base_url() ?>public/web/img/interactive-learning.png" class="card-img-top img-fluid" alt="Interactive Learning" />
                    </figure>
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary mb-3">Interactive Learning</h5>
                        <p class="card-text">Engage in dynamic sessions for better understanding and practical applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInUp">Webinars</h5>
                <h2 class="title wow fadeInUp" data-wow-delay="200ms"><span class="text-gradient">Forex Trading </span>Webinars</h2>
            </div>
            <div class="col-12">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6">
                        <img src="<?= base_url() ?>public/web/website/education/webinar/webinar.jpg" alt="Become a partner" class="img-fluid wow slideInLeft" data-wow-delay="100ms" />
                    </div>
                    <div class="col-lg-6">
                        <p class="mb-4 wow slideInRight" data-wow-delay="300ms">Explore the intricacies of Forex market sessions through YaMarkets' informative webinars. Understanding the four primary trading sessions is crucial. Each session possesses unique characteristics, affecting market activity, trading volume, and liquidity. This knowledge empowers traders to identify optimal times for specific currency pair trading, aligning with their strategies and objectives. Join our webinars to master the art of strategic trading within the diverse Forex market sessions.</p>
                        <a href="#" class="btn btn-primary wow slideInRight" data-wow-delay="500ms">Register Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h4 class="modal-title fs-5" id="exampleModalLabel">Book your Seat</h4>
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('website/webinar_user_submit_data'); ?>" method="post">
                    <div class="row g-4 mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <input type="hidden" id="ctext" name="webi_id">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="webinar-phone" class="form-label">Phone</label>
                                <input type="tel" name="mobile" id="webinar-phone" maxlength="10" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="webinar" class="form-label">Choose Countery</label>
                                <select name="country" id="country" class="form-select">
                                    <option selected disabled>Select</option>
                                    <?php
                                        $role_fetch_data = $this->Webinar_model->country_fetch();
                                        foreach ($role_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?>
                                            </option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

