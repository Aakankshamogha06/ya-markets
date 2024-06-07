<section class="account-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-4">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('supported_payment_systems_heading')?></h5>
                <h2 class="title mb-5 wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('account_types_heading')?> <span class="text-gradient"><?=lang('account_types_subheading')?></h2>
                <div class="nav flex-column nav-pills pt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-ultimate-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ultimate" type="button" role="tab" aria-controls="v-pills-ultimate" aria-selected="true">
                        <label class="d-flex align-items-center gap-3" for="ultimate">
                            <input type="radio" name="tabs" id="ultimate" checked />
                            <div>
                                <h6 class="mb-0"><?=lang('ultimate_tab_label')?></h6>
                                <p class="mb-0 d-none d-md-block"><?=lang('ultimate_tab_description')?></p>
                            </div>
                        </label>
                    </button>
                    <button class="nav-link" id="v-pills-standard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-standard" type="button" role="tab" aria-controls="v-pills-standard" aria-selected="false">
                        <label class="d-flex align-items-center gap-3" for="standard">
                            <input type="radio" name="tabs" id="standard" />
                            <div>
                                <h6 class="mb-0"><?=lang('standard_tab_label')?></h6>
                                <p class="mb-0 d-none d-md-block"><?=lang('standard_tab_description')?></p>
                            </div>
                        </label>
                    </button>
                    <button class="nav-link" id="v-pills-royale-tab" data-bs-toggle="pill" data-bs-target="#v-pills-royale" type="button" role="tab" aria-controls="v-pills-royale" aria-selected="false">
                        <label class="d-flex align-items-center gap-3" for="royale">
                            <input type="radio" name="tabs" id="royale" />
                            <div>
                                <h6 class="mb-0"><?=lang('royale_tab_label')?></h6>
                                <p class="mb-0 d-none d-md-block"><?=lang('royale_tab_description')?></p>
                            </div>
                        </label>
                    </button>
                    <button class="nav-link" id="v-pills-ecn-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ecn" type="button" role="tab" aria-controls="v-pills-ecn" aria-selected="false">
                        <label class="d-flex align-items-center gap-3" for="ecn">
                            <input type="radio" name="tabs" id="ecn" />
                            <div>
                                <h6 class="mb-0"><?=lang('ecn_tab_label')?></h6>
                                <p class="mb-0 d-none d-md-block"><?=lang('ecn_tab_description')?></p>
                            </div>
                        </label>
                    </button>
                </div>
            </div>
            <div class="col-lg-8 ps-xl-5">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-ultimate" role="tabpanel" aria-labelledby="v-pills-ultimate-tab" tabindex="0">
                        <div class="row align-items-end account-list">
                            <div class="col-6 pe-0 d-none d-md-block">
                                <ul class="list-unstyled">
                                    <li class="text-primary">
                                        <span><?=lang('minimum_deposit')?>t</span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('minimum_trading_volume')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('swap_free_account')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('spread_starts_from')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('commission')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('leverage')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('account_currency_types')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('margin_call')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('stop_out')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('order_execution')?></span>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-6 ps-md-0">
                                <div class="account-box">
                                    <h4 class="text-white fw-bold text-uppercase"><?=lang('')?><?=lang('ultimate')?></h4>
                                    <p class="text-white">
                                        <small><?=lang('min')?> </small>
                                        <span class="text-primary"><sup> $</sup><span class="fs-1 fw-semibold">10</span></span>
                                        <small><?=lang('deposit')?></small>
                                    </p>
                                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary"><?=lang('open_account')?></a>
                                </div>
                                <div class="account-box price-list">
                                    <ul class="list-unstyled">
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_deposit')?></span>
                                            <span>$ 10</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_trading_volume')?></span>
                                            <span>0.01</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('swap_free_account')?></span>
                                            <span>Yes</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('spread_starts_from')?></span>
                                            <span>1.8 pips</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('commission')?></span>
                                            <span>No</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('leverage')?></span>
                                            <span>1 : 1000</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('account_currency_types')?></span>
                                            <span>USD</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('margin_call')?></span>
                                            <span>80 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('stop_out')?></span>
                                            <span>50 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('order_execution')?></span>
                                            <span><?=lang('instant_execution')?></span>
                                        </li>
                                    </ul>
                                    <div class="show-plan-btn">
                                        <a href="https://area.yamarkets.com/register" class="text-primary"><?=lang('open_account')?><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-standard" role="tabpanel" aria-labelledby="v-pills-standard-tab" tabindex="0">
                        <div class="row align-items-end account-list">
                            <div class="col-6 pe-0 d-none d-md-block">
                                <ul class="list-unstyled">
                                    <li class="text-primary">
                                        <span><?=lang('')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('minimum_trading_volume')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('swap_free_account')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('spread_starts_from')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('commission')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('leverage')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('account_currency_types')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('margin_call')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('stop_out')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('order_execution')?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 ps-md-0">
                                <div class="account-box">
                                    <h4 class="text-white fw-bold text-uppercase"><?=lang('')?><?=lang('standard')?></h4>
                                    <p class="text-white">
                                        <small><?=lang('min')?></small>
                                        <span class="text-primary"><sup> $</sup><span class="fs-1 fw-semibold">500</span></span>
                                        <small><?=lang('deposit')?></small>
                                    </p>
                                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary"<?=lang('')?>><?=lang('open_account')?></a>
                                </div>
                                <div class="account-box price-list">
                                    <ul class="list-unstyled">
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_deposit')?></span>
                                            <span>$ 500</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_trading_volume')?></span>
                                            <span>0.01</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('swap_free_account')?></span>
                                            <span>Yes</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('spread_starts_from')?></span>
                                            <span>1.5 pips</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('commission')?></span>
                                            <span>No</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('leverage')?></span>
                                            <span>1 : 1000</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('account_currency_types')?></span>
                                            <span>USD</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('margin_call')?></span>
                                            <span>80 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('stop_out')?></span>
                                            <span>50 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('order_execution')?></span>
                                            <span><?=lang('')?><?=lang('instant_execution')?></span>
                                        </li>
                                    </ul>
                                    <div class="show-plan-btn">
                                        <a href="https://area.yamarkets.com/register" class="text-primary"><?=lang('open_account')?><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-royale" role="tabpanel" aria-labelledby="v-pills-royale-tab" tabindex="0">
                        <div class="row align-items-end account-list">
                            <div class="col-6 pe-0 d-none d-md-block">
                                <ul class="list-unstyled">
                                    <li class="text-primary">
                                        <span><?=lang('minimum_deposit')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('minimum_trading_volume')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('swap_free_account')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('spread_starts_from')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('commission')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('leverage')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('account_currency_types')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('margin_call')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('stop_out')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('order_execution')?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 ps-md-0">
                                <div class="account-box">
                                    <h4 class="text-white fw-bold text-uppercase"><?=lang('royale')?></h4>
                                    <p class="text-white">
                                        <small><?=lang('min')?></small>
                                        <span class="text-primary"><sup> $</sup><span class="fs-1 fw-semibold">2,500</span></span>
                                        <small><?=lang('deposit')?></small>
                                    </p>
                                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary"><?=lang('open_account')?></a>
                                </div>
                                <div class="account-box price-list">
                                    <ul class="list-unstyled">
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_deposit')?></span>
                                            <span>$ 2500</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_trading_volume')?></span>
                                            <span>0.01</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('swap_free_account')?></span>
                                            <span>Yes</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('spread_starts_from')?></span>
                                            <span>1 pips</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('commission')?></span>
                                            <span>No</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('leverage')?></span>
                                            <span>1 : 500</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('account_currency_types')?></span>
                                            <span>USD</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('margin_call')?></span>
                                            <span>100 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('stop_out')?></span>
                                            <span>80 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('order_execution')?></span>
                                            <span><?=lang('instant_execution')?></span>
                                        </li>
                                    </ul>
                                    <div class="show-plan-btn">
                                        <a href="https://area.yamarkets.com/register" class="text-primary"><?=lang('open_account')?><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-ecn" role="tabpanel" aria-labelledby="v-pills-ecn-tab" tabindex="0">
                        <div class="row align-items-end account-list">
                            <div class="col-6 pe-0 d-none d-md-block">
                                <ul class="list-unstyled">
                                    <li class="text-primary">
                                        <span><?=lang('minimum_deposit')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('minimum_trading_volume')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('swap_free_account')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('spread_starts_from')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('commission')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('leverage')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('account_currency_types')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('margin_call')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('stop_out')?></span>
                                    </li>
                                    <li class="text-primary">
                                        <span><?=lang('order_execution')?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 ps-md-0">
                                <div class="account-box">
                                    <h4 class="text-white fw-bold text-uppercase"><?=lang('ecn')?></h4>
                                    <p class="text-white">
                                        <small><?=lang('min')?></small>
                                        <span class="text-primary"><sup> $</sup><span class="fs-1 fw-semibold">5,000</span></span>
                                        <small><?=lang('deposit')?></small>
                                    </p>
                                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary"><?=lang('open_account')?></a>
                                </div>
                                <div class="account-box price-list">
                                    <ul class="list-unstyled">
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_deposit')?></span>
                                            <span>$ 5000</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('minimum_trading_volume')?></span>
                                            <span>0.01</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('swap_free_account')?></span>
                                            <span>Yes</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('spread_starts_from')?></span>
                                            <span>0.1 pips</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('commission')?></span>
                                            <span>Yes</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('leverage')?></span>
                                            <span>1 : 200</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('account_currency_types')?></span>
                                            <span>USD</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('margin_call')?></span>
                                            <span>70 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('stop_out')?></span>
                                            <span>50 %</span>
                                        </li>
                                        <li class="d-flex d-md-block justify-content-between">
                                            <span class="text-primary d-md-none"><?=lang('order_execution')?></span>
                                            <span><?=lang('instant_execution')?></span>
                                        </li>
                                    </ul>
                                    <div class="show-plan-btn">
                                        <a href="https://area.yamarkets.com/register" class="text-primary"><?=lang('open_account')?><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('supported_payment_systems')?></h5>
                <h2 class="title"><?=lang('register_now')?> <span class="text-gradient"><?=lang('seamless_trading')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('with_yamarkets')?></div>
                </h2>
            </div>
           <?php $this->load->view('frontend/include/button.php'); ?>
        </div>
    </div>
</section>