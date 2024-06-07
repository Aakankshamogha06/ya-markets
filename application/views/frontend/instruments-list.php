<section>
    <div class="container">
        <div class="row gy-5">
            <div class="col-12">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig"><?=lang('instrument_list_title')?></h5>
                <h2 class="title wow fadeInLeftBig" data-wow-delay="200ms"><?=lang('instrument_list_subtitle_1')?> <span class="text-gradient"><?=lang('instrument_list_subtitle_2')?></h2>
            </div>
        </div>
    </div>
</section>

<section class="funding-section pt-lg-0 wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs border-0 overflow-x-auto overflow-y-hidden flex-nowrap text-nowrap pb-2 mb-3" id="myTab" role="tablist">
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase active" id="forex-tab" data-bs-toggle="tab" data-bs-target="#forex-tab-pane" type="button" role="tab" aria-controls="forex-tab-pane" aria-selected="true">
                            <span><?=lang('forex')?></span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="indices-tab" data-bs-toggle="tab" data-bs-target="#indices-tab-pane" type="button" role="tab" aria-controls="indices-tab-pane" aria-selected="false">
                            <span><?=lang('indices')?></span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="spot-indices-tab" data-bs-toggle="tab" data-bs-target="#spot-indices-tab-pane" type="button" role="tab" aria-controls="spot-indices-tab-pane" aria-selected="false">
                            <span><?=lang('spot_indices')?></span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="spot-commodities-tab" data-bs-toggle="tab" data-bs-target="#spot-commodities-tab-pane" type="button" role="tab" aria-controls="spot-commodities-tab-pane" aria-selected="false">
                            <span><?=lang('spot_commodities')?></span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="commodities-tab" data-bs-toggle="tab" data-bs-target="#commodities-tab-pane" type="button" role="tab" aria-controls="commodities-tab-pane" aria-selected="false">
                            <span><?=lang('commodities')?></span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="metal-tab" data-bs-toggle="tab" data-bs-target="#metal-tab-pane" type="button" role="tab" aria-controls="metal-tab-pane" aria-selected="false">
                            <span><?=lang('metal')?></span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="cryptocurrencies-tab" data-bs-toggle="tab" data-bs-target="#cryptocurrencies-tab-pane" type="button" role="tab" aria-controls="cryptocurrencies-tab-pane" aria-selected="false">
                            <span><?=lang('cryptocurrencies')?></span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content overflow-x-auto overflow-y-hidden" id="myTabContent">
                    <div class="tab-pane fade show active" id="forex-tab-pane" role="tabpanel" aria-labelledby="forex-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered instrument-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th><?=lang('instrument_symbol_1')?> <br /><?=lang('instrument_symbol_2')?></th>
                                        <th><?=lang('instrument_name_1')?> <br /><?=lang('instrument_name_2')?></th>
                                        <th><?=lang('nominal_value_of_the_lot_1')?> <br /><?=lang('nominal_value_of_the_lot_2')?></th>
                                        <th><?=lang('size_of_one_pip_1')?> <br /><?=lang('size_of_one_pip_2')?></th>
                                        <th><?=lang('trading_hours_1')?> <br /><?=lang('trading_hours_2')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-primary">AUDCAD</td>
                                        <td><?=lang('Australian_Dollar_vs_Canadian_Dollar')?></td>
                                        <td>AUD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">AUDCHF</td>
                                        <td><?=lang('Australian_Dollar_vs_Swiss_Franc')?></td>
                                        <td>AUD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">AUDJPY</td>
                                        <td><?=lang('Australian_Dollar_vs_New_Zealand_Dollar')?></td>
                                        <td>AUD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">AUDNZD</td>
                                        <td><?=lang('Australian_Dollar_vs_Japanese_Yen')?></td>
                                        <td>AUD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">AUDUSD</td>
                                        <td><?=lang('Australian_Dollar_vs_US_Dollar')?></td>
                                        <td>AUD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">CADCHF</td>
                                        <td><?=lang('Canadian_Dollar_vs_Swiss_Franc')?></td>
                                        <td>CAD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">CADJPY</td>
                                        <td><?=lang('Canadian_Dollar_vs_Japanese_Yen')?></td>
                                        <td>CAD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">CHFJPY</td>
                                        <td><?=lang('Swiss_Franc_vs_Japanese_Yen')?></td>
                                        <td>CHF 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURAUD</td>
                                        <td><?=lang('Euro_vs_Australian_Dollar')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURCAD</td>
                                        <td><?=lang('Euro_vs_Canadian_Dollar')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURCHF</td>
                                        <td><?=lang('Euro_vs_Swiss_Franc')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURGBP</td>
                                        <td><?=lang('Euro_vs_British_Pounds')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURJPY</td>
                                        <td><?=lang('Euro_vs_Japanese_Yen')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURNOK</td>
                                        <td><?=lang('Euro_vs_Norwegian_Krone')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURNZD</td>
                                        <td><?=lang('Euro_vs_New_Zealand_Dollar')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURPLN</td>
                                        <td><?=lang('Euro_vs_Polish_Zloty')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURSEK</td>
                                        <td><?=lang('Euro_vs_Swedish_Krona')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURTRY</td>
                                        <td><?=lang('Euro_vs_Turkish_Lira')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EURUSD</td>
                                        <td><?=lang('Euro_vs_Dollar')?></td>
                                        <td>EUR 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GBPAUD</td>
                                        <td><?=lang('British_Pounds_vs_Australian_Dollar')?></td>
                                        <td>GBP 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GBPCAD</td>
                                        <td><?=lang('British_Pounds_vs_Canadian_Dollar')?></td>
                                        <td>GBP 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GBPCHF</td>
                                        <td><?=lang('British_Pounds_vs_Swiss_Franc')?></td>
                                        <td>GBP 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GBPJPY</td>
                                        <td><?=lang('British_Pounds_vs_Japanese_Yen')?></td>
                                        <td>GBP 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GBPNZD</td>
                                        <td><?=lang('British_Pounds_vs_New_Zealand_Dollar')?></td>
                                        <td>GBP 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GBPUSD</td>
                                        <td><?=lang('British_Pounds_vs_US_Dollar')?></td>
                                        <td>GBP 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">NZDCAD</td>
                                        <td><?=lang('New_Zealand_Dollar_vs_Canadian_Dollar')?></td>
                                        <td>NZD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">NZDCHF</td>
                                        <td><?=lang('New_Zealand_Dollar_vs_Swiss_Franc')?></td>
                                        <td>NZD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">NZDJPY</td>
                                        <td><?=lang('New_Zealand_Dollar_vs_Japanese_Yen')?></td>
                                        <td>NZD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">NZDUSD</td>
                                        <td><?=lang('New_Zealand_Dollar_vs_US_Dollar')?></td>
                                        <td>NZD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDCAD</td>
                                        <td><?=lang('US_Dollar_vs_Canadian_Dollar')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDCHF</td>
                                        <td><?=lang('US_Dollar_vs_Swiss_Franc')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDHKD</td>
                                        <td><?=lang('US_Dollar_vs_Hong_Kong_Dollar')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDJPY</td>
                                        <td><?=lang('US_Dollar_vs_Japanese_Yen')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDMXN</td>
                                        <td><?=lang('US_Dollar_vs_Mexican_Peso')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDNOK</td>
                                        <td><?=lang('US_Dollar_vs_Norwegian_Krone')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDPLN</td>
                                        <td><?=lang('US_Dollar_vs_Polish_Zloty')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDRUB</td>
                                        <td><?=lang('US_Dollar_vs_Russian_Ruble')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDSEK</td>
                                        <td><?=lang('US_Dollar_vs_Swedish_Krona')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDTRY</td>
                                        <td><?=lang('US_Dollar_vs_Turkish_Lira')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00 - 23:59:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDZAR</td>
                                        <td><?=lang('US_Dollar_vs_South_African_Rand')?></td>
                                        <td>USD 100,000</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00 22:00-23:59:59</td>
                                    </tr>
                                </tbody>
                            </table>   
                        </div>
                    </div>
                    <div class="tab-pane fade" id="indices-tab-pane" role="tabpanel" aria-labelledby="indices-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered instrument-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th><?=lang('instrument_symbol_1')?> <br /><?=lang('instrument_symbol_2')?></th>
                                        <th><?=lang('instrument_name_1')?> <br /><?=lang('instrument_name_2')?></th>
                                        <th><?=lang('nominal_value_of_the_lot_1')?> <br /><?=lang('nominal_value_of_the_lot_2')?></th>
                                        <th><?=lang('size_of_one_pip_1')?> <br /><?=lang('size_of_one_pip_2')?></th>
                                        <th><?=lang('trading_hours_1')?> <br /><?=lang('trading_hours_2')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-primary">AUS200</td>
                                        <td>ASX 200</td>
                                        <td><?=lang('Instrument_level')?> * USD 25</td>
                                        <td>0.01</td>
                                        <td>00:05-06:30. 07:15-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BRAIND</td>
                                        <td>IBrX 50</td>
                                        <td><?=lang('Instrument_level')?> * USD 2</td>
                                        <td>0.01</td>
                                        <td>12:05-20:55</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">CHNIND</td>
                                        <td><?=lang('Hang_Seng_China_Enterprises')?></td>
                                        <td><?=lang('Instrument_level')?> * USD 10</td>
                                        <td>0.01</td>
                                        <td>01:20-04:00. 05:35-08:15. 09:20 -19:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GER30</td>
                                        <td>DAX 30</td>
                                        <td><?=lang('Instrument_level')?> * EUR 25</td>
                                        <td>0.01</td>
                                        <td>00:15-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EU50</td>
                                        <td><?=lang('Euro_Stoxx_50')?></td>
                                        <td><?=lang('Instrument_level')?> * EUR 10</td>
                                        <td>0.01</td>
                                        <td>00:15-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">FRA40</td>
                                        <td>CAC 40</td>
                                        <td><?=lang('Instrument_level')?> * EUR 10</td>
                                        <td>0.01</td>
                                        <td>06:00-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">HKIND</td>
                                        <td>Hang-Seng</td>
                                        <td><?=lang('Instrument_level')?> * USD 5</td>
                                        <td>0.01</td>
                                        <td>01:20-04:00, 05:35-08:15. 09:20-19:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">IND50</td>
                                        <td>Nifty 50</td>
                                        <td><?=lang('Instrument_level')?> * USD 20</td>
                                        <td>0.01</td>
                                        <td>01:00-10:10. 10:40-21:15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">ITA40</td>
                                        <td>FTSE MIB 40</td>
                                        <td><?=lang('Instrument_level')?> * EUR 5</td>
                                        <td>0.01</td>
                                        <td>07:00-18:30</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">JAP225</td>
                                        <td>Nikkei 225</td>
                                        <td><?=lang('Instrument_level')?> * USD 10</td>
                                        <td>0.01</td>
                                        <td>00:05-06:10. 07:35-16:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">KOSP200</td>
                                        <td>KOSPI 200</td>
                                        <td><?=lang('Instrument_level')?> * USD 500</td>
                                        <td>0.01</td>
                                        <td>00:05-06:10</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">MEXIND</td>
                                        <td>IPC</td>
                                        <td><?=lang('Instrument_level')?> * USD 3</td>
                                        <td>0.01</td>
                                        <td>13:30-19:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">RUS50</td>
                                        <td>RTS 50</td>
                                        <td><?=lang('Instrument_level')?> * USD 100</td>
                                        <td>0.01</td>
                                        <td>07:05-15:45</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">SA40</td>
                                        <td><?=lang('South_Africa_Top_40_Index')?></td>
                                        <td><?=lang('Instrument_level')?> * USD 5</td>
                                        <td>0.01</td>
                                        <td>06:35-15:25</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">SPA35</td>
                                        <td>IBEX 35</td>
                                        <td><?=lang('Instrument_level')?> * EUR 10</td>
                                        <td>0.01</td>
                                        <td>06:00-18:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">SUI20</td>
                                        <td>SMI</td>
                                        <td><?=lang('Instrument_level')?> * USD 20</td>
                                        <td>0.01</td>
                                        <td>06:00-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">UK100</td>
                                        <td>FTSE 100</td>
                                        <td><?=lang('Instrument_level')?> * GBP 10</td>
                                        <td>0.01</td>
                                        <td>00:00-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">US100</td>
                                        <td>E-mini Nasdaq 100</td>
                                        <td><?=lang('Instrument_level')?> * USD 20</td>
                                        <td>0.01</td>
                                        <td>00:00-20:15. 20:30-21:00. 22:05-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">US30</td>
                                        <td>Mini-sized DJIA</td>
                                        <td><?=lang('Instrument_level')?> * USD 5</td>
                                        <td>0.01</td>
                                        <td>00:00-20:15. 20:30-21:00. 22:05-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">US500</td>
                                        <td>E-mini S&P 500</td>
                                        <td><?=lang('Instrument_level')?> * USD 50</td>
                                        <td>0.01</td>
                                        <td>00:00-20:15. 20:30-21:00. 22:05-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">US2000</td>
                                        <td>Russell 2000 Mini</td>
                                        <td><?=lang('Instrument_level')?> * USD 200</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00, 22:05-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">USDIDX</td>
                                        <td>Dollar Index</td>
                                        <td><?=lang('Instrument_level')?> * USD 1000</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">VIX</td>
                                        <td>Volatilty Index</td>
                                        <td><?=lang('Instrument_level')?> * USD 4000</td>
                                        <td>0.01</td>
                                        <td>22:00-00:00, 00:00-20:15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">W20</td>
                                        <td>WIG 20</td>
                                        <td><?=lang('Instrument_level')?> * PLN 20</td>
                                        <td>0.01</td>
                                        <td>06:45-14:50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="spot-indices-tab-pane" role="tabpanel" aria-labelledby="spot-indices-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered instrument-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th><?=lang('instrument_symbol_1')?> <br /><?=lang('instrument_symbol_2')?></th>
                                        <th><?=lang('instrument_name_1')?> <br /><?=lang('instrument_name_2')?></th>
                                        <th><?=lang('nominal_value_of_the_lot_1')?> <br /><?=lang('nominal_value_of_the_lot_2')?></th>
                                        <th><?=lang('size_of_one_pip_1')?> <br /><?=lang('size_of_one_pip_2')?></th>
                                        <th><?=lang('trading_hours_1')?> <br /><?=lang('trading_hours_2')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-primary">AUS200.spot</td>
                                        <td>ASX 200/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 25</td>
                                        <td>0.01</td>
                                        <td>00:00-06:30. 07:10-21:00. 23:50-00:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">CHNIND.spot</td>
                                        <td>FTSE China A50/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 10</td>
                                        <td>0.01</td>
                                        <td>01:00-08:30. 09:00-20:45</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">GER30.spot</td>
                                        <td>DAX 30/spot</td>
                                        <td><?=lang('Instrument_level')?> * EUR 25</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00, 22:00-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EU50.spot</td>
                                        <td><?=lang('Euro_Stoxx_50')?>/spot</td>
                                        <td><?=lang('Instrument_level')?> * EUR 10</td>
                                        <td>0.01</td>
                                        <td>06:00-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">FRA40.spot</td>
                                        <td>CAC 40/spot</td>
                                        <td><?=lang('Instrument_level')?> * EUR 10</td>
                                        <td>0.01</td>
                                        <td>06:00-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">HKIND.spot</td>
                                        <td>Hang-Seng/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 5</td>
                                        <td>0.01</td>
                                        <td>01:15-04:00. 05:00-08:30. 09:15-19:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">ITA40.spot</td>
                                        <td>FTSE MIB 40/spot</td>
                                        <td><?=lang('Instrument_level')?> * EUR 5</td>
                                        <td>0.01</td>
                                        <td>07:00-15:40</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">JAP225.spot</td>
                                        <td>Nikkei 225/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 10</td>
                                        <td>0.01</td>
                                        <td>00:05-17:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">SPA35.spot</td>
                                        <td>IBEX 35/spot</td>
                                        <td><?=lang('Instrument_level')?> * EUR 10</td>
                                        <td>0.01</td>
                                        <td>06:00-18:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">UK100.spot</td>
                                        <td>FTSE 100/spot</td>
                                        <td><?=lang('Instrument_level')?> * GBP 10</td>
                                        <td>0.01</td>
                                        <td>23:00-24:00, 00:00-22:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">US100.spot</td>
                                        <td>E-mini Nasdaq 100/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 20</td>
                                        <td>0.01</td>
                                        <td>00:00 -20:15. 20:30-21:00. 22:00-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">US30.spot</td>
                                        <td>Mini-sized DJIA/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 5</td>
                                        <td>0.01</td>
                                        <td>00:00 -20:15. 20:30-21:00. 22:00-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">US500.spot</td>
                                        <td>E-mini S&P 500/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 50</td>
                                        <td>0.01</td>
                                        <td>00:00 -20:15. 20:30-21:00. 22:00-24:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="spot-commodities-tab-pane" role="tabpanel" aria-labelledby="spot-commodities-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered instrument-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th><?=lang('instrument_symbol_1')?> <br /><?=lang('instrument_symbol_2')?></th>
                                        <th><?=lang('instrument_name_1')?> <br /><?=lang('instrument_name_2')?></th>
                                        <th><?=lang('nominal_value_of_the_lot_1')?> <br /><?=lang('nominal_value_of_the_lot_2')?></th>
                                        <th><?=lang('size_of_one_pip_1')?> <br /><?=lang('size_of_one_pip_2')?></th>
                                        <th><?=lang('trading_hours_1')?> <br /><?=lang('trading_hours_2')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-primary">BRENT.spot</td>
                                        <td>UK Oil/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 1,000</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">NGAS.spot</td>
                                        <td>Natural Gas/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 30,000</td>
                                        <td>0.01</td>
                                        <td>22:00-00:00, 00:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">WTI.spot</td>
                                        <td>US Oil/spot</td>
                                        <td><?=lang('Instrument_level')?> * USD 1,000</td>
                                        <td>0.01</td>
                                        <td>22:00-00:00, 00:00-21:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="commodities-tab-pane" role="tabpanel" aria-labelledby="commodities-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered instrument-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th><?=lang('instrument_symbol_1')?> <br /><?=lang('instrument_symbol_2')?></th>
                                        <th><?=lang('instrument_name_1')?> <br /><?=lang('instrument_name_2')?></th>
                                        <th><?=lang('nominal_value_of_the_lot_1')?> <br /><?=lang('nominal_value_of_the_lot_2')?></th>
                                        <th><?=lang('size_of_one_pip_1')?> <br /><?=lang('size_of_one_pip_2')?></th>
                                        <th><?=lang('trading_hours_1')?> <br /><?=lang('trading_hours_2')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-primary">BRENT</td>
                                        <td>UK Oil</td>
                                        <td><?=lang('Instrument_level')?> * USD 1,000</td>
                                        <td>0.01</td>
                                        <td>00:05-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BUND</td>
                                        <td>10-year German Bond</td>
                                        <td><?=lang('Instrument_level')?> * EUR 1,000</td>
                                        <td>0.01</td>
                                        <td>06:05-20:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">COCOA</td>
                                        <td>Cocoa</td>
                                        <td><?=lang('Instrument_level')?> * USD 100</td>
                                        <td>0.01</td>
                                        <td>08:45-17:30</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">COFFEE</td>
                                        <td>Coffee</td>
                                        <td><?=lang('Instrument_level')?> * USD 2,000</td>
                                        <td>0.01</td>
                                        <td>08:15-17:30</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">CORN</td>
                                        <td>Corn</td>
                                        <td><?=lang('Instrument_level')?> * USD 500</td>
                                        <td>0.01</td>
                                        <td>00:05-12:45. 13:35-18:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">COTTON</td>
                                        <td>Cotton</td>
                                        <td><?=lang('Instrument_level')?> * USD 500</td>
                                        <td>0.01</td>
                                        <td>06:30-18:20</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">NGAS</td>
                                        <td>Natural Gas</td>
                                        <td><?=lang('Instrument_level')?> * USD 30,000</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00. 22:00-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">SOYBEAN</td>
                                        <td>Soybean</td>
                                        <td><?=lang('Instrument_level')?> * USD 300</td>
                                        <td>0.01</td>
                                        <td>00:05-12:45. 13:35-18:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">SUGAR</td>
                                        <td>Sugar</td>
                                        <td><?=lang('Instrument_level')?> * USD 1,120</td>
                                        <td>0.01</td>
                                        <td>07:30-17:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">TNOTE</td>
                                        <td>10-year US Bond</td>
                                        <td><?=lang('Instrument_level')?> * USD 1,000</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00. 22:35-24:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">WHEAT</td>
                                        <td>Wheat</td>
                                        <td><?=lang('Instrument_level')?> * USD 400</td>
                                        <td>0.01</td>
                                        <td>00:05-12:45. 13:35-18:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">WTI</td>
                                        <td>US Oil</td>
                                        <td><?=lang('Instrument_level')?> * USD 1,000</td>
                                        <td>0.01</td>
                                        <td>00:00-21:00. 22:05-24:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="metal-tab-pane" role="tabpanel" aria-labelledby="metal-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered instrument-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th><?=lang('instrument_symbol_1')?> <br /><?=lang('instrument_symbol_2')?></th>
                                        <th><?=lang('instrument_name_1')?> <br /><?=lang('instrument_name_2')?></th>
                                        <th><?=lang('nominal_value_of_the_lot_1')?> <br /><?=lang('nominal_value_of_the_lot_2')?></th>
                                        <th><?=lang('size_of_one_pip_1')?> <br /><?=lang('size_of_one_pip_2')?></th>
                                        <th><?=lang('trading_hours_1')?> <br /><?=lang('trading_hours_2')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-primary">ALUMINIUM</td>
                                        <td>Aluminium</td>
                                        <td><?=lang('Instrument_level')?> * USD 50</td>
                                        <td>0.01</td>
                                        <td>06:30-17:30</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">COPPER</td>
                                        <td>Copper</td>
                                        <td><?=lang('Instrument_level')?> * USD 30</td>
                                        <td>0.01</td>
                                        <td>06:30-17:30</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XAGUSD</td>
                                        <td>Silver troy ounce</td>
                                        <td><?=lang('Instrument_level')?> * USD 5,000</td>
                                        <td>0.01</td>
                                        <td>22:00-00:00, 00:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XAUUSD</td>
                                        <td>Gold troy ounce</td>
                                        <td><?=lang('Instrument_level')?> * USD 100</td>
                                        <td>0.01</td>
                                        <td>22:00-00:00, 00:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XPTUSD</td>
                                        <td>Platinum troy ounce</td>
                                        <td><?=lang('Instrument_level')?> * USD 100</td>
                                        <td>0.01</td>
                                        <td>22:00-00:00, 00:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XPDUSD</td>
                                        <td>Palladium troy ounce</td>
                                        <td><?=lang('Instrument_level')?> * USD 100</td>
                                        <td>0.01</td>
                                        <td>22:00-00:00, 00:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">ZINC</td>
                                        <td>Zinc</td>
                                        <td><?=lang('Instrument_level')?> * USD 50</td>
                                        <td>0.01</td>
                                        <td>06:30-17:30</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cryptocurrencies-tab-pane" role="tabpanel" aria-labelledby="cryptocurrencies-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered instrument-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th><?=lang('instrument_symbol_1')?> <br /><?=lang('instrument_symbol_2')?></th>
                                        <th><?=lang('instrument_name_1')?> <br /><?=lang('instrument_name_2')?></th>
                                        <th><?=lang('nominal_value_of_the_lot_1')?> <br /><?=lang('nominal_value_of_the_lot_2')?></th>
                                        <th><?=lang('size_of_one_pip_1')?> <br /><?=lang('size_of_one_pip_2')?></th>
                                        <th><?=lang('trading_hours_1')?> <br /><?=lang('trading_hours_2')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-primary">ADAUSD</td>
                                        <td>Cardano vs US Dollar</td>
                                        <td>10,000 ADA</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">AVEUSD</td>
                                        <td>Aave vs US Dollar</td>
                                        <td>10 AVE</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BCHBTC</td>
                                        <td>Bitcoin Cash vs US Bitcoin</td>
                                        <td>10 BCH</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BCHUSD</td>
                                        <td>Bitcoin Cash vs US Dollar</td>
                                        <td>10 BCH</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BSVUSD</td>
                                        <td>Bitcoin Cash SV vs US Dollar</td>
                                        <td>10 BSV</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BTCEUR</td>
                                        <td>Bicton vs Euro</td>
                                        <td>1 BTC</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BTCUSD</td>
                                        <td>Bicton vs US Dollar</td>
                                        <td>1 BTC</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">DOTUSD</td>
                                        <td>Polka Dot vs US Dollar</td>
                                        <td>100 DOT</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">DSHUSD</td>
                                        <td>Dash vs US Dollar</td>
                                        <td>10 DSH</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EOSUSD</td>
                                        <td>EOS vs US Dollar</td>
                                        <td>1000 EOS</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">ETHBTC</td>
                                        <td>Ethereum vs Bitcoin</td>
                                        <td>1 ETH</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">ETHUSD</td>
                                        <td>Ethereum vs US Dollar</td>
                                        <td>1 ETH</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">LNKUSD</td>
                                        <td>Link vs US Dollar</td>
                                        <td>100 LNK</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">LTCBTC</td>
                                        <td>Litecoin vs Bitcoin</td>
                                        <td>10 LTC</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">LTCUSD</td>
                                        <td>Litecoin vs US Dollar</td>
                                        <td>10 LTC</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">THTUSD</td>
                                        <td>Theta vs US Dollar</td>
                                        <td>1,000 THT</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">TRXUSD</td>
                                        <td>Tron vs US Dollar</td>
                                        <td>10,000 TRX</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">UNIUSD</td>
                                        <td>Uniswap vs US Dollar</td>
                                        <td>1000 UNI</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">VETUSD</td>
                                        <td>VeChain vs US Dollar</td>
                                        <td>10,000 VET</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XEMUSD</td>
                                        <td>Namecoin vs US Dollar</td>
                                        <td>10,000 XEM</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XLMUSD</td>
                                        <td>Stellar vs US Dollar</td>
                                        <td>10,000 XLM</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XMRUSD</td>
                                        <td>Monero vs US Dollar</td>
                                        <td>100 XMR</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XRPEUR</td>
                                        <td>Ripple vs Euro</td>
                                        <td>10,000 XRP</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XRPUSD</td>
                                        <td>Ripple vs US Dollar</td>
                                        <td>10,000 XRP</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">XTZUSD</td>
                                        <td>Tezos vs US Dollar</td>
                                        <td>1,000 XTZ</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">DOGUSD</td>
                                        <td>Dogecoin vs US Dollar</td>
                                        <td>100,000 DOG</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">BNBUSD</td>
                                        <td>Binance coin vs US Dollar</td>
                                        <td>1 BNB</td>
                                        <td>0.01</td>
                                        <td>00:00-23:59</td>
                                    </tr>
                                </tbody>
                            </table>
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
                <h5 class="text-primary fw-bold"><?=lang('supported_payment_systems_title')?></h5>
                <h2 class="title"><?=lang('for_convenient')?> <span class="text-gradient"><?=lang('deposits')?> </span>
                    <div class="d-lg-block text-gradient"><?=lang('and_withdrawals')?></div>
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