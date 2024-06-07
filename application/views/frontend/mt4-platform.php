<style>
    .p-sm-3>img {
        width: 100px;
        height: 100px;
        object-fit: contain;
    }
</style>
<section class="account-section pb-lg-0">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-7 col-xl-6 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInUp"><?=lang('MT4_PLATFORMS')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms">
                    <span class="d-lg-block"><?=lang('TRADE_ON_WORLD_CLASS')?> </span>
                    <span class="text-gradient"><?=lang('TRADE_ON_MT4_PLATFORMS')?></span>
                </h2>
                <p class="wow fadeInUp" data-wow-delay="300ms"><?=lang('USE_THIS_APP_ALONGSIDE_YOUR_MOBILE_DESKTOP_AND_WEB_BASED_YAMARKETS_MT4_MT5_TRADING_PLATFORMS_TO_KEEP_YOUR_FINGER_FIRM')?></p>
                <div class="d-flex align-items-center justify-content-center gap-3 gap-md-5 mt-5 app-links">
                    <a href="https://metatraderweb.app/trade" target="_blank" class="wow fadeInUp" data-wow-delay="100ms">
                        <img src="<?= base_url() ?>public/web/img/web.svg" alt="Web" class="img-fluid" />
                        <p class="mt-2"><?=lang('WEB')?></p>
                    </a>
                    <a href="https://download.mql5.com/cdn/web/17849/mt4/yamarkets4setup.exe" target="_blank" class="wow fadeInUp" data-wow-delay="200ms">
                        <img src="<?= base_url() ?>public/web/img/windows.svg" alt="Windows" class="img-fluid" />
                        <p class="mt-2"><?=lang('WINDOWS')?></p>
                    </a>
                    <a href="https://download.mql5.com/cdn/mobile/mt4/ios?server=YaMarkets-DEMO,YaMarkets-REAL" target="_blank" class="wow fadeInUp" data-wow-delay="300ms">
                        <img src="<?= base_url() ?>public/web/img/apple-store.svg" alt="App store" class="img-fluid" />
                        <p class="mt-2"><?=lang('APP_STORE')?></p>
                    </a>
                    <a href="https://download.mql5.com/cdn/mobile/mt4/android?server=YaMarkets-DEMO,YaMarkets-REA" target="_blank" class="wow fadeInUp" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/web/img/play-store.svg" alt="Google play" class="img-fluid" />
                        <p class="mt-2"><?=lang('GOOGLE_PLAY')?></p>
                    </a>
                    <a href="metatrader4.apk" target="_blank" class="wow fadeInUp" data-wow-delay="400ms">
                        <img src="<?= base_url() ?>public/web/img/APK.png" alt="APK File" class="img-fluid" />
                        <p class="mt-2"><?=lang('APK_FILE')?></p>
                    </a>
                </div>
                <div class="group-btn text-center mt-5">
                    <a href="./mt5-platform" class="btn btn-primary wow fadeInUp" id="platformView" data-wow-delay="100ms"><?=lang('VIEW_MT5_PLATFORM')?></a>
                    <a href="./comparison" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('COMPARE_PLATFORMS')?></a>
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
                    <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('BENEFITS')?></h5>
                    <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('ADVANTAGES_OF_YAMARKETS')?> <span class="text-gradient"><?=lang('')?>MT4 Platforms</span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row gy-4">

                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="100ms">
                            <img src="<?= base_url() ?>public/web/website/platform/mt4/1___demo account.svg" alt="demo account" class="img-fluid">
                            <p class="my-2"><?=lang('PRACTICE_TRADING_WITH_A_DEMO_ACCOUNT')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="100ms">
                            <img src="<?= base_url() ?>public/web/website/platform/mt4/1___switch between accounts.svg" alt="accounts" class="img-fluid">
                            <p class="my-2"><?=lang('CAPABILITY_TO_SWITCH_AMONG_ACCOUNTS')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="100ms">
                            <img src="<?= base_url() ?>public/web/website/platform/mt4/1___pending trade orders`.svg" alt="trade orders" class="img-fluid">
                            <p class="my-2"><?=lang('ALL_TYPES_OF_MARKET_AND_PENDING_TRADE_ORDERS')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="100ms">
                            <img src="<?= base_url() ?>public/web/website/platform/mt4/1___Full trading history.svg" alt="trading history" class="img-fluid">
                            <p class="my-2"><?=lang('COMPLETE_TRADING_HISTORY')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="100ms">
                            <img src="<?= base_url() ?>public/web/website/platform/mt4/1___ execute the order.svg" alt="order" class="img-fluid">
                            <p class="my-2"><?=lang('ORDER_EXECUTION_IN_1_SECOND')?></p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="p-sm-3 p-md-4 wow fadeInUpBig" data-wow-delay="100ms">
                            <img src="<?= base_url() ?>public/web/website/platform/mt4/1___wide range of tools for trading.svg" alt="trading tool" class="img-fluid">
                            <p class="my-2"><?=lang('AN_EXTENSIVE_ARRAY_OF_TRADING_TOOLS')?></p>
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
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('HOW_TO_INSTALL')?> <span class="text-gradient"><?=lang('MT4_PLATFORM?')?></span></h2>
                <p class="mb-5 wow fadeInUpBig" data-wow-delay="300ms"><?=lang('THE_STEP_BY_STEP_PROCESS_TO_QUICKLY_INSTALL_THE_MT4_PLATFORM_ON_YOUR_DEVICE_FOR_SEAMLESS_TRADING_WITH_YAMARKETS')?></p>
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