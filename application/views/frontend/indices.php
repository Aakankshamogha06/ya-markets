<style>
    .forex-cards .card figure::before {
        top: -70px;
    }

    .card img {
        width: 60px;
        height: 60px;
        object-fit: contain;
    }

    .indices-col>div:nth-child(4) .card figure>img {
        width: 80px;
        height: 80px;
    }

    .blue-text {
        display: none;
    }
</style>
<section class="forex-page z-0 position-relative overflow-visible" style="background-image:url(public/web/img/indices-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('indices_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('indices_trading_heading')?> <span class="text-gradient"><?=lang('indices_trading_subheading')?></span></h2>
                <p class="wow fadeInUpBig" data-wow-delay="300ms"><?=lang('indices_trading_subheading_desc')?></p>
            </div>
        </div>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(13, 14, 17, 1)" offset="0%"></stop>
                <stop stop-color="rgba(52.416, 53.406, 56.379, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,104L40,93.2C80,82,160,61,240,62.8C320,65,400,91,480,91C560,91,640,65,720,56.3C800,48,880,56,960,54.2C1040,52,1120,39,1200,32.5C1280,26,1360,26,1440,26C1520,26,1600,26,1680,21.7C1760,17,1840,9,1920,23.8C2000,39,2080,78,2160,78C2240,78,2320,39,2400,34.7C2480,30,2560,61,2640,73.7C2720,87,2800,82,2880,84.5C2960,87,3040,95,3120,91C3200,87,3280,69,3360,62.8C3440,56,3520,61,3600,52C3680,43,3760,22,3840,10.8C3920,0,4000,0,4080,8.7C4160,17,4240,35,4320,45.5C4400,56,4480,61,4560,65C4640,69,4720,74,4800,80.2C4880,87,4960,95,5040,91C5120,87,5200,69,5280,62.8C5360,56,5440,61,5520,71.5C5600,82,5680,100,5720,108.3L5760,117L5760,130L5720,130C5680,130,5600,130,5520,130C5440,130,5360,130,5280,130C5200,130,5120,130,5040,130C4960,130,4880,130,4800,130C4720,130,4640,130,4560,130C4480,130,4400,130,4320,130C4240,130,4160,130,4080,130C4000,130,3920,130,3840,130C3760,130,3680,130,3600,130C3520,130,3440,130,3360,130C3280,130,3200,130,3120,130C3040,130,2960,130,2880,130C2800,130,2720,130,2640,130C2560,130,2480,130,2400,130C2320,130,2240,130,2160,130C2080,130,2000,130,1920,130C1840,130,1760,130,1680,130C1600,130,1520,130,1440,130C1360,130,1280,130,1200,130C1120,130,1040,130,960,130C880,130,800,130,720,130C640,130,560,130,480,130C400,130,320,130,240,130C160,130,80,130,40,130L0,130Z"></path>
        <defs>
            <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(70.04, 70.04, 70.04, 1)" offset="0%"></stop>
                <stop stop-color="rgba(49.549, 49.549, 49.549, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,65L40,71.5C80,78,160,91,240,80.2C320,69,400,35,480,17.3C560,0,640,0,720,2.2C800,4,880,9,960,17.3C1040,26,1120,39,1200,49.8C1280,61,1360,69,1440,69.3C1520,69,1600,61,1680,65C1760,69,1840,87,1920,95.3C2000,104,2080,104,2160,86.7C2240,69,2320,35,2400,30.3C2480,26,2560,52,2640,62.8C2720,74,2800,69,2880,75.8C2960,82,3040,100,3120,99.7C3200,100,3280,82,3360,65C3440,48,3520,30,3600,28.2C3680,26,3760,39,3840,39C3920,39,4000,26,4080,26C4160,26,4240,39,4320,49.8C4400,61,4480,69,4560,75.8C4640,82,4720,87,4800,86.7C4880,87,4960,82,5040,71.5C5120,61,5200,43,5280,45.5C5360,48,5440,69,5520,78C5600,87,5680,82,5720,80.2L5760,78L5760,130L5720,130C5680,130,5600,130,5520,130C5440,130,5360,130,5280,130C5200,130,5120,130,5040,130C4960,130,4880,130,4800,130C4720,130,4640,130,4560,130C4480,130,4400,130,4320,130C4240,130,4160,130,4080,130C4000,130,3920,130,3840,130C3760,130,3680,130,3600,130C3520,130,3440,130,3360,130C3280,130,3200,130,3120,130C3040,130,2960,130,2880,130C2800,130,2720,130,2640,130C2560,130,2480,130,2400,130C2320,130,2240,130,2160,130C2080,130,2000,130,1920,130C1840,130,1760,130,1680,130C1600,130,1520,130,1440,130C1360,130,1280,130,1200,130C1120,130,1040,130,960,130C880,130,800,130,720,130C640,130,560,130,480,130C400,130,320,130,240,130C160,130,80,130,40,130L0,130Z"></path>
    </svg>
</section>

<section class="withdraw-section">
    <div class="container">
        <div class="row mb-3 mb-lg-5">
            <div class="col-lg-8 col-xl-6 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInDown"><?=lang('why_trade_indices_heading')?></h5>
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('maximise_success_heading')?> <span class="text-gradient"><?=lang('yamarkets_indices_trading')?></span></h2>
            </div>
        </div>
        <div class="indices-col forex-cards">

            <div class="">
                <div class="card pb-3 text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/1_Advanced Analysis Tools.svg" class="img-fluid" alt="Advanced Analysis Tools">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('advanced_analysis_tools')?></h5>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card pb-3 text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/1_Real-Time Market Data.svg" class="img-fluid" alt="Real-Time Market Data">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('real_time_market_data')?></h5>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card pb-3 text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/1_Fast Order Execution.svg" class="img-fluid" alt="Fast Order Execution">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('fast_order_execution')?></h5>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card pb-3 text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/product/Indices/1__No swaps.svg" class="img-fluid" alt="No Swaps No Commissions">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('no_swaps_no_commissions')?></h5>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card pb-3 text-center wow fadeInUp">
                    <figure class="position-relative z-0">
                        <img src="<?= base_url() ?>public/web/website/1_Strong Risk Management.svg" class="img-fluid" alt="Strong Risk Management">
                    </figure>
                    <div class="card-body position-relative z-0">
                        <h5 class="card-title text-primary fw-semibold mb-0"><?=lang('strong_risk_management')?></h5>
                    </div>
                </div>
            </div>

        </div>
        <div class="group-btn mt-3 mt-md-5 text-center">
            <a href="#" class="btn btn-primary mb-3 mb-md-0 wow fadeInUp" data-wow-delay="100ms"><?=lang('trade_indices_now_button')?></a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-3 mb-lg-5">
            <div class="col-lg-10 mx-auto text-center">
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><?=lang('cfd_margin_requirements_heading_1')?> <span class="text-gradient"><?=lang('cfd_margin_requirements_heading_2')?></span></h2>
                <p class="wow fadeInUpBig" data-wow-delay="300ms"><?=lang('cfd_margin_requirements_description')?></p>
            </div>

            <div class="col-12 mt-5">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"><?=lang('track_all_markets_tradingview')?></span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                        {
                            "width": "100%",
                            "height": 490,
                            "symbolsGroups": [{
                                "name": "Indices",
                                "originalName": "Indices",
                                "symbols": [{
                                        "name": "NSE:NIFTY"
                                    },
                                    {
                                        "name": "BSE:SENSEX"
                                    },
                                    {
                                        "name": "NSE:BANKNIFTY"
                                    },
                                    {
                                        "name": "NSE:INDIAVIX"
                                    },
                                    {
                                        "name": "DJ:DJI"
                                    },
                                    {
                                        "name": "SP:SPX"
                                    },
                                    {
                                        "name": "NASDAQ:NDX"
                                    },
                                    {
                                        "name": "TVC:RUT"
                                    },
                                    {
                                        "name": "VANTAGE:SP500"
                                    },
                                    {
                                        "name": "CSELK:S&PSL20"
                                    },
                                    {
                                        "name": "ATHEX:FTSE"
                                    }
                                ]
                            }],
                            "showSymbolLogo": true,
                            "isTransparent": false,
                            "colorTheme": "dark",
                            "locale": "in"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
                <!-- <div class="table-responsive">
                    <table class="table table-bordered cfd-table">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Inst. Currency Pairs</th>
                                <th>Description</th>
                                <th>Contract size</th>
                                <th>Quote precision</th>
                                <th>Margin required</th>
                                <th>Min. Trade Size</th>
                                <th>Min. Transaction step</th>
                                <th>Swap long (points)</th>
                                <th>Swap Short (points)</th>
                                <th>Sunday open time (GMT+0)</th>
                                <th>Trading hourS (GMT+0)</th>
                                <th>Friday Close Time (GMT+0)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-primary">AUD200</td>
                                <td>ASX 200</td>
                                <td>USD 25</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>23:05</td>
                                <td>23:05 - 05:30, 06:15 - 20:00</td>
                                <td>20:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">BRAIND</td>
                                <td>INrX 50</td>
                                <td>USD 2</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>12:05 - 20:55</td>
                                <td>20:55</td>
                            </tr>
                            <tr>
                                <td class="text-primary">CHNIND</td>
                                <td>Hang Seng China Enterprises</td>
                                <td>USD 10</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>01:20-04:00. 05:35-08:15. 09:20 -19:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">GER30</td>
                                <td>DAX 30</td>
                                <td>EUR 25</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>00:15-21:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">EU50</td>
                                <td>Euro Stoxx 50</td>
                                <td>EUR 10</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>00:15-21:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">FRA40</td>
                                <td>CAC 40</td>
                                <td>EUR 10</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>07:00-21:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">HKIND</td>
                                <td>Hang-Seng</td>
                                <td>USD 5</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>01:20-04:00, 05:35-08:15. 09:20-19:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">IND50</td>
                                <td>Nifty 50</td>
                                <td>USD 20</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>01:00-10:10. 10:40-21:15</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">ITA40</td>
                                <td>FTSE MIB 40</td>
                                <td>EUR 5</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>08:00-19:30</td>
                                <td>19:30</td>
                            </tr>
                            <tr>
                                <td class="text-primary">JAP225</td>
                                <td>Nikkei 225</td>
                                <td>USD 10</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>00:05-06:10. 07:35-16:00</td>
                                <td>16:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">KOSP200</td>
                                <td>KOSP200</td>
                                <td>USD 500</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>00:05-06:10</td>
                                <td>06:10</td>
                            </tr>
                            <tr>
                                <td class="text-primary">MEXIND</td>
                                <td>IPC</td>
                                <td>USD 3</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>13:30-19:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">RUS50</td>
                                <td>RTS 50</td>
                                <td>USD 100</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>07:05-15:45. 16:05-20:50</td>
                                <td>20:50</td>
                            </tr>
                            <tr>
                                <td class="text-primary">SA40</td>
                                <td>South Africa Top 40 Index</td>
                                <td>USD 5</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>06:35-15:25</td>
                                <td>15:25</td>
                            </tr>
                            <tr>
                                <td class="text-primary">SPA35</td>
                                <td>IBEX 35</td>
                                <td>EUR 10</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>07:00-19:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">SUI20</td>
                                <td>SMI</td>
                                <td>USD 20</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>07:00-21:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">UK100</td>
                                <td>FTSE 100</td>
                                <td>GBP 10</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>01:00-21:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">US100</td>
                                <td>E-mini Nasdaq 100</td>
                                <td>USD 20</td>
                                <td>0.01</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>23:05</td>
                                <td>23:05-21:15, 21:30-22:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">US30</td>
                                <td>Mini-sized DJIA</td>
                                <td>USD 5</td>
                                <td>1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>23:05</td>
                                <td>23:05-21:15, 21:30-22:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">US500</td>
                                <td>E-mini S&P 500</td>
                                <td>USD 50</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>23:05</td>
                                <td>23:05-21:15, 21:30-22:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">US2000</td>
                                <td>Russell 2000 Mini</td>
                                <td>USD 200</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>23:05</td>
                                <td>23:05-22:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">USDIDX</td>
                                <td>Dollar Index</td>
                                <td>USD 1000</td>
                                <td>0.001</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>01:00-22:00</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">VIX</td>
                                <td>Volatilty Index</td>
                                <td>USD 4000</td>
                                <td>0.01</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>23:05</td>
                                <td>23:00-00:00, 00:00-21:15</td>
                                <td>21:00</td>
                            </tr>
                            <tr>
                                <td class="text-primary">W20</td>
                                <td>WIG 20</td>
                                <td>PLN 20</td>
                                <td>0.1</td>
                                <td>1%</td>
                                <td>0.01</td>
                                <td>0.01</td>
                                <td>-3%</td>
                                <td>-3%</td>
                                <td>-</td>
                                <td>07:45-15:50</td>
                                <td>15:50</td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold"><?=lang('partner_trading_success_heading')?></h5>
                <h2 class="title"><?=lang('seamless_trading_register_heading_1')?> <span class="text-gradient"><?=lang('seamless_trading_register_heading_2')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('seamless_trading_register_subheading')?></div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('open_live_account_button')?></a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('open_demo_account_button')?></a>
                </div>
            </div>
        </div>
    </div>
</section>