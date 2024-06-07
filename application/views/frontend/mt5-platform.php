<style>
    .p-sm-3>img {
        width: 80px;
        height: 100px;
        object-fit: contain;
    }
</style>
<section class="account-section pb-lg-0">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-7 col-xl-6 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInUp"><?=lang('account_section_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('account_section_subheading_1')?> <span class="text-gradient d-lg-block"><?=lang('account_section_subheading_2')?></h2>
                <p class="wow fadeInUp" data-wow-delay="300ms"><?=lang('account_section_paragraph')?></p>
                <div class="d-flex align-items-center justify-content-center gap-3 gap-md-5 mt-5 app-links">
                    <a href="https://metatraderweb.app/trade" target="_blank" class="wow fadeInUp" data-wow-delay="100ms">
                        <img src="<?= base_url() ?>public/web/img/web.svg" alt="Web" class="img-fluid" />
                        <p class="mt-2"><?=lang('account_section_web_link')?></p>
                    </a>
                    <a href="https://download.mql5.com/cdn/web/yamarkets.limited/mt5/yamarkets5setup.exe" target="_blank" class="wow fadeInUp" data-wow-delay="200ms">
                        <img src="<?= base_url() ?>public/web/img/windows.svg" alt="Windows" class="img-fluid" />
                        <p class="mt-2"><?=lang('account_section_windows_link')?></p>
                    </a>
                    <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=YaMarkets-Server" target="_blank" class="wow fadeInUp" data-wow-delay="300ms">
                        <img src="<?= base_url() ?>public/web/img/apple-store.svg" alt="App store" class="img-fluid" />
                        <p class="mt-2"><?=lang('account_section_apple_store_link')?></p>
                    </a>
                    <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=YaMarkets-Server" target="_blank" class="wow fadeInUp" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/web/img/play-store.svg" alt="Google play" class="img-fluid" />
                        <p class="mt-2"><?=lang('account_section_google_play_link')?></p>
                    </a>
                    <a href="metatrader5.apk" target="_blank" class="wow fadeInUp" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/web/img/APK.png" alt="APK File" class="img-fluid" />
                        <p class="mt-2"><?=lang('account_section_apk_file_link')?></p>
                    </a>
                </div>
                <div class="group-btn text-center mt-5">
                    <a href="./mt4-platform" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('account_section_view_mt4_platform')?></a>
                    <a href="./comparison" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('account_section_compare_platforms')?></a>
                </div>
            </div>
            <div class="text-center bg-shadow">
                <img src="<?= base_url() ?>public/web/img/trade-on-world.png" alt="Trade on world class MT4 platforms" class="img-fluid" />
                <div class="play-btn">
                    <a role="button" class="youtube-btn" youtubeid="yTjzljdyWYk">
                        <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.78861 23.0179C2.17908 23.414 1.56223 23.4372 0.93807 23.0873C0.313908 22.7375 0.00121907 22.1962 0 21.4635V2.53756C0 1.80612 0.312689 1.26486 0.93807 0.913769C1.56345 0.562679 2.1803 0.585841 2.78861 0.983256L17.6917 10.4462C18.2403 10.812 18.5145 11.3301 18.5145 12.0006C18.5145 12.671 18.2403 13.1891 17.6917 13.5549L2.78861 23.0179Z" fill="#FAC211"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-visible bg-black">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 text-center text-lg-start">
                <div class="position-sticky top-25">
                    <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('benefits_section_heading')?></h5>
                    <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('benefits_section_subheading_1')?> <span class="text-gradient"><?=lang('benefits_section_subheading_2')?></span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="100ms">
                            <img src="<?= base_url() ?>public/web/img/broadened-market-access.svg" alt="Broadened Market Access" class="img-fluid">
                            <p class="my-2"><?=lang('benefits_section_broadened_market_access')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="200ms">
                            <img src="<?= base_url() ?>public/web/img/effective-hedging-ability.svg" alt="Effective Hedging Ability" class="img-fluid">
                            <p class="my-2"><?=lang('benefits_section_effective_hedging_ability')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="300ms">
                            <img src="<?= base_url() ?>public/web/img/extended-timeframe-options.svg" alt="Extended Timeframe Options" class="img-fluid">
                            <p class="my-2"><?=lang('benefits_section_extended_timeframe_options')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="400ms">
                            <img src="<?= base_url() ?>public/web/img/programming-language.svg" alt="Advanced Programming Language" class="img-fluid">
                            <p class="my-2"><?=lang('benefits_section_advanced_programming_language')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="500ms">
                            <img src="<?= base_url() ?>public/web/img/improved-market-depth.svg" alt="Improved Market Depth" class="img-fluid">
                            <p class="my-2"><?=lang('benefits_section_improved_market_depth')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="600ms">
                            <img src="<?= base_url() ?>public/web/img/integrated-economic-calendar.svg" alt="Integrated Economic Calendar" class="img-fluid">
                            <p class="my-2"><?=lang('benefits_section_integrated_economic_calendar')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('INSTALL')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('HOW_TO_INSTALL_mt5')?> <span class="text-gradient"><?=lang('MT5_PLATFORM?')?></span></h2>
                <p class="mb-5 wow fadeInUpBig" data-wow-delay="300ms"><?=lang('THE_STEP_BY_STEP_PROCESS_TO_QUICKLY_INSTALL_THE_MT5_PLATFORM_ON_YOUR_DEVICE_FOR_SEAMLESS_TRADING_WITH_YAMARKETS')?></p>
            </div>
            <div class="col-12 position-relative d-none d-md-block top-n150">
                <img src="<?= base_url() ?>public/web/img/curved-line.svg" alt="Curved Line" class="img-fluid pe-none" />
            </div>
        </div>
        <div class="row gy-5 crypto-row">
            <div class="col-md-4">
                <div class="crypto-card px-xxl-4 position-relative wow fadeInUp" data-attr="1" data-wow-delay="200ms">
                    <h4 class="card-title text-primary fw-semibold mb-md-3"><?=lang('DOWNLOAD_THE_PLATFORM')?></h4>
                    <p class="card-text"><?=lang('ACCESS_THE_PLATFORM_DOWNLOAD_LINK_PROVIDED_BY_YAMARKETS')?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="crypto-card px-xxl-4 position-relative wow fadeInUp" data-attr="2" data-wow-delay="400ms">
                    <h4 class="card-title text-primary fw-semibold mb-md-3"><?=lang('RUN_THE_EXE_FILE')?></h4>
                    <p class="card-text"><?=lang('EXECUTE_THE_DOWNLOADED_FILE_USUALLY_A_EXE_FILE_TO_BEGIN_THE_INSTALLATION_PROCESS')?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="crypto-card px-xxl-4 position-relative wow fadeInUp" data-attr="3" data-wow-delay="600ms">
                    <h4 class="card-title text-primary fw-semibold mb-md-3"><?=lang('LOGIN_TO_YOUR')?> <span class="d-lg-block"><?=lang('YAMARKETS_ACCOUNT')?></span></h4>
                    <p class="card-text"><?=lang('ONCE_INSTALLED_LAUNCH_THE_PLATFORM_AND_LOG_IN_USING_YOUR_YAMARKETS_ACCOUNT_CREDENTIALS_TO_START_TRADING')?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('YOUR_PARTNER_IN_TRADING_SUCCESS')?></h5>
                <h2 class="title"><?=lang('REGISTER_NOW_FOR_SEAMLESS_TRADING_1')?> <span class="text-gradient"><?=lang('REGISTER_NOW_FOR_SEAMLESS_TRADING_2')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('WITH_YAMARKETS')?></div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('OPEN_LIVE_ACCOUNT')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('OPEN_DEMO_ACCOUNT')?></a>
                </div>
            </div>
        </div>
    </div>
</section>