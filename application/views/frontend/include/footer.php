<footer id="footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3">
                <div class="wow fadeInUp">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>public/web/img/logo.png" alt="footer logo" class="img-fluid mb-5" />
                    </a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary w-75 mb-3"><?=lang('register_section_live_account')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary w-75"><?=lang('register_section_demo_account')?></a>
                </div>
                <div class="footer-links mt-3 mt-lg-5 wow fadeInUp">
                    <!-- <h6>Connect with us</h6>
                    <hr> -->
                    <ul class="list-unstyled">
                        <li class="d-flex gap-3 align-items-center mb-2">
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 17.938C8.98271 17.6813 7.13885 16.6661 5.84319 15.0988C4.54752 13.5314 3.89728 11.5295 4.02462 9.49997C4.15196 7.47041 5.04733 5.56549 6.52874 4.17238C8.01016 2.77927 9.96645 2.00252 12 2C14.036 1.99849 15.9961 2.77334 17.4807 4.16668C18.9653 5.56002 19.8628 7.467 19.9903 9.49904C20.1178 11.5311 19.4657 13.5353 18.1669 15.1033C16.868 16.6712 15.0203 17.685 13 17.938V20.012C16.946 20.104 20 20.735 20 21.5C20 22.328 16.418 23 12 23C7.582 23 4 22.328 4 21.5C4 20.735 7.054 20.104 11 20.012V17.938ZM12 16C13.5913 16 15.1174 15.3679 16.2426 14.2426C17.3679 13.1174 18 11.5913 18 10C18 8.4087 17.3679 6.88258 16.2426 5.75736C15.1174 4.63214 13.5913 4 12 4C10.4087 4 8.88258 4.63214 7.75736 5.75736C6.63214 6.88258 6 8.4087 6 10C6 11.5913 6.63214 13.1174 7.75736 14.2426C8.88258 15.3679 10.4087 16 12 16ZM12 12C11.4696 12 10.9609 11.7893 10.5858 11.4142C10.2107 11.0391 10 10.5304 10 10C10 9.46957 10.2107 8.96086 10.5858 8.58579C10.9609 8.21072 11.4696 8 12 8C12.5304 8 13.0391 8.21072 13.4142 8.58579C13.7893 8.96086 14 9.46957 14 10C14 10.5304 13.7893 11.0391 13.4142 11.4142C13.0391 11.7893 12.5304 12 12 12Z" fill="white" fill-opacity="0.8" />
                                </svg>
                            </div>
                            <span class="light-color">Suite 305, Griffith Corporate Centre, Kingstown P.O. Box 1510, Beachmont Kingstown St. Vincent and the Grenadines</span>
                        </li>
                        <li class="d-flex gap-3 align-items-center mb-2">
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 12C19.7333 12 19.4957 11.904 19.287 11.712C19.0783 11.52 18.958 11.2827 18.926 11C18.7093 9.45 18.055 8.129 16.963 7.037C15.871 5.945 14.55 5.291 13 5.075C12.7167 5.04167 12.479 4.925 12.287 4.725C12.095 4.525 11.9993 4.28333 12 4C12 3.71667 12.1 3.479 12.3 3.287C12.5 3.095 12.7333 3.016 13 3.05C15.1 3.28333 16.8917 4.14167 18.375 5.625C19.8583 7.10833 20.7167 8.9 20.95 11C20.9833 11.2667 20.904 11.5 20.712 11.7C20.52 11.9 20.2827 12 20 12ZM15.825 12C15.6083 12 15.4167 11.925 15.25 11.775C15.0833 11.625 14.9583 11.425 14.875 11.175C14.7417 10.6917 14.4873 10.2623 14.112 9.887C13.7367 9.51167 13.3077 9.25767 12.825 9.125C12.575 9.04167 12.375 8.91667 12.225 8.75C12.075 8.58333 12 8.38333 12 8.15C12 7.81667 12.1167 7.54567 12.35 7.337C12.5833 7.12833 12.8417 7.05767 13.125 7.125C14.0583 7.34167 14.8627 7.78767 15.538 8.463C16.2133 9.13833 16.659 9.94233 16.875 10.875C16.9417 11.1583 16.8667 11.4167 16.65 11.65C16.4333 11.8833 16.1583 12 15.825 12ZM19.95 21C17.8 21 15.704 20.5207 13.662 19.562C11.62 18.6033 9.81167 17.3367 8.237 15.762C6.66233 14.1873 5.39567 12.379 4.437 10.337C3.47833 8.295 2.99933 6.19933 3 4.05C3 3.75 3.1 3.5 3.3 3.3C3.5 3.1 3.75 3 4.05 3H8.1C8.33333 3 8.54167 3.075 8.725 3.225C8.90833 3.375 9.01667 3.56667 9.05 3.8L9.7 7.3C9.73333 7.53333 9.729 7.746 9.687 7.938C9.645 8.13 9.54933 8.30067 9.4 8.45L7 10.9C7.7 12.1 8.575 13.225 9.625 14.275C10.675 15.325 11.8333 16.2333 13.1 17L15.45 14.65C15.6 14.5 15.796 14.3877 16.038 14.313C16.28 14.2383 16.5173 14.2173 16.75 14.25L20.2 14.95C20.4333 15 20.625 15.1127 20.775 15.288C20.925 15.4633 21 15.6673 21 15.9V19.95C21 20.25 20.9 20.5 20.7 20.7C20.5 20.9 20.25 21 19.95 21Z" fill="white" fill-opacity="0.8" />
                                </svg>
                            </div>
                            <a href="tel:+971545407280">+971 545407280</a>
                        </li>
                        <li class="d-flex gap-3 align-items-center">
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="white" fill-opacity="0.8" />
                                </svg>
                            </div>
                            <a href="mailto:support@yamarkets.com">support@yamarkets.com</a>
                        </li>
                    </ul>
                </div>
                <div class="social-icons mt-3 mt-lg-5 wow fadeInUp">
                    <a href="https://www.facebook.com/yamarkets.official/" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/markets_ya" target="_blank">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/yamarketslimited" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://www.instagram.com/yamarkets_official" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://in.pinterest.com/yamarketslimited/" target="_blank">
                        <i class="fa-brands fa-pinterest"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCP0WDmYQ7wNZPZMI5KOC-Iw" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row gy-4 footer-links">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <h6><?=lang('about')?></h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/about"><?=lang('about_yamarkets')?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/regulations"><?=lang('regulations')?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/why-trade-forex"><?=lang('why_trade_forex')?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/awards"><?=lang('awards')?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/faq"><?=lang('faqs')?></a>
                                    </li>

                                    <li>
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/we-are-hiring"><?=lang('we_are_hiring')?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/expo"><?=lang('expo')?></a>
                                    </li>
                                    <!-- <li class="mb-1">
                                        <a href="">Videos</a>
                                    </li> -->
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/how-to-use-zoho-chat-bot"><?=lang('how_to_use_zoho_chat_bot')?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/why-choose-us"><?=lang('why_choose_us')?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/blog"><?=lang('blog')?></a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?><?=lang('langurl')?>/contact-us"><?=lang('contact_us')?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <h6><?=lang('product')?></h6>
                        <hr>
                        <ul class="list-unstyled">
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/forex"><?=lang('forex')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/commodities"><?=lang('commodities')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/indices"><?=lang('indices')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/crypto-currencies"><?=lang('crypto_currencies')?></a>
                            </li>
                            <!-- <li>
                                <a href="<?= base_url() ?><?=lang('langurl')?>/trading-conditions">Trading conditions</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <h6><?=lang('promotions')?></h6>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <a href="<? base_url() ?><?=lang('langurl')?>/master-ib-star-contest"><?=lang('master_ib_star_contest')?></a>
                            </li>
                            <li>
                                <a href="<? base_url() ?><?=lang('langurl')?>/star-ib-partners-contest"><?=lang('star_ib_partners_contest')?></a>
                            </li>
                            <li>
                                <a href="<? base_url() ?><?=lang('langurl')?>/nfp"><?=lang('nfp')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="https://yamarkets.com/education-workshop/"><?=lang('education_workshop')?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <h6><?=lang('platform')?></h6>
                        <hr>
                        <ul class="list-unstyled">
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/mt4-platform"><?=lang('mt4_platform')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/mt5-platform"><?=lang('mt5_platform')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="https://copytrader.yamarkets.com/portal/login"><?=lang('copy_trading')?></a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?><?=lang('langurl')?>/zulutrade"><?=lang('zulutrade')?></a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?><?=lang('langurl')?>/pamm"><?=lang('paam')?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <h6><?=lang('traders')?></h6>
                        <hr>
                        <ul class="list-unstyled">
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/account-types"><?=lang('account_types')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/funding-option"><?=lang('funding_options')?></a>
                            </li>
                            <!-- <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/conversion-rate">Conversion rate</a>
                            </li> -->
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/instruments-list"><?=lang('instruments_list')?></a>
                            </li>
                            <!-- <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/local-currencies">Local currencies</a>
                            </li> -->
                            <li>
                                <a href="<?= base_url() ?><?=lang('langurl')?>/analytics"><?=lang('analytics')?></a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?><?=lang('langurl')?>/trading-conditions"><?=lang('trading_conditions')?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <h6><?=lang('education')?></h6>
                        <hr>
                        <ul class="list-unstyled">
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/webinars"><?=lang('live_webinars')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/seminars"><?=lang('seminars')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="<?= base_url() ?><?=lang('langurl')?>/economic-calender"><?=lang('economic_calender')?></a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?><?=lang('langurl')?>/calculator"><?=lang('calculator')?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <h6><?=lang('partners')?></h6>
                        <hr>
                        <ul class="list-unstyled">
                            <li class="mb-1">
                                <a href="https://www.yamarketspartners.com/introducing-broker.php" target="_blank"><?=lang('introducing_broker')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="https://www.yamarketspartners.com/affiliate.php" target="_blank"><?=lang('affiliate')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="https://www.yamarketspartners.com/regional-partner.php" target="_blank"><?=lang('regional_partner')?></a>
                            </li>
                            <li class="mb-1">
                                <a href="https://www.yamarketspartners.com/payment-partner.php" target="_blank"><?=lang('payment_partner')?></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="bottom-footer">
    <div class="container">
        <div class="inner-footer">
            <div class="row gy-4">
                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                    <h6 class="fw-medium mb-3"><?=lang('owned_operated_by')?></h6>
                    <ul class="companied-text mb-0">
                        <li><?=lang('mauritius_registered')?></li>
                       
                         <li><?=lang('south_africa_licensed')?></li>
                          <li><?=lang('st_vincent_registered')?></li>
                        <li><?=lang('vanuatu_registered')?></li>
                       
                    </ul>
                </div>
                <div class="col-12 companied-text footer-links wow fadeInUp" data-wow-delay="200ms">
                    <h6 class="fw-medium mb-2"><?=lang('risk_warning')?></h6>
                    <p class="mb-0"><?=lang('risk_statement')?> <a href="<?= base_url() ?>risk-disclosure" class="fw-semibold"><?=lang('risk_disclosure')?></a></p>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="200ms">
                    <p class="mb-0"><span class="text-primary"><?=lang('disclaimer_:')?></span> <?=lang('disclaimer_text')?></p>
                </div>
            </div>
        </div>
        <div class="copyright my-3">
            <div class="d-flex flex-wrap justify-content-between">
                <p><?=lang('all_rights_reserved_1')?> &copy; 2016-<?= date('Y') ?> | <?=lang('all_rights_reserved_2')?></p>
                <div class="quick-links mb-3">
                    <a href="<?= base_url() ?>docs/clients-agreement.pdf" target="_blank"><?=lang('client_agreement')?></a>
                    <a href="<?= base_url() ?><?=lang('langurl')?>/disclaimer"><?=lang('disclaimer')?></a>
                    <a href="<?= base_url() ?><?=lang('langurl')?>/privacy-policy"><?=lang('privacy_policy')?></a>
                    <a href="<?= base_url() ?>docs/complaint-policy.pdf" target="_blank"><?=lang('complaint_policy')?></a>
                    <a href="<?= base_url() ?><?=lang('langurl')?>/aml-policy"><?=lang('aml_policy')?></a>
                    <a href="<?= base_url() ?><?=lang('langurl')?>/refund-policy"><?=lang('refund_policy')?></a>
                    <a href="<?= base_url() ?><?=lang('langurl')?>/kyc-policy"><?=lang('kyc_policy')?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="callback-btn" title="Callback" data-bs-toggle="modal" data-bs-target="#callBack">
    <i class="fa-solid fa-mobile-screen"></i>
</button>

<button type="button" class="btn back-to-top">
    <i class="fa fa-chevron-up"></i>
</button>



<!-- Modal -->
<div class="modal fade" id="callBack" tabindex="-1" aria-labelledby="callBackLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h4 class="modal-title fs-5" id="callBackLabel">Enter your details to receive a call back from us</h4>
                <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" method="post">
                    <div class="row g-4 mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="callback-phone" class="form-label">Phone</label>
                                <input type="tel" name="phone" id="callback-phone" maxlength="10" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" id="message" rows="5" class="form-control"></textarea>
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

<script type="text/javascript" id="zsiqchat">
    var $zoho = $zoho || {};
    $zoho.salesiq = $zoho.salesiq || {
        widgetcode: "siq4ddd561baf4facfd88dc59cce5b0b284be720103c657001641c57cdfa0c40506",
        values: {},
        ready: function() {}
    };
    var d = document;
    s = d.createElement("script");
    s.type = "text/javascript";
    s.id = "zsiqscript";
    s.defer = true;
    s.src = "https://salesiq.zohopublic.in/widget";
    t = d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s, t);
</script>
<script src="<?= base_url() ?>public/web/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/slick/js/slick.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/youtube-popup/youtube-popup.js"></script>
<script src="<?= base_url() ?>public/web/vendor/fancybox/js/fancybox.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/wow/js/wow.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/intlTelInput/js/intlTelInput.min.js"></script>
<script src="<?= base_url() ?>public/web/vendor/intlTelInput/js/utils.js"></script>
<script src="<?= base_url() ?>public/web/js/custom.js?v=202312011501"></script>
<script>
    if (screen.width < 992) {
        $('#topHeader').click(() => {
            $('.top-header').slideToggle();
            $('#topHeader>.fa-solid').toggleClass('fa-chevron-down fa-chevron-up');
        })
    }
</script>

<script>
    const callback = document.querySelector("#callback-phone");
    window.intlTelInput(callback, {
        autoPlaceholder: "off",
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "js/utils.js",
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<?php 
$this->load->view('frontend/include/jsfile');
?>

</body>

</html>