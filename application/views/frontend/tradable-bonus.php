

<style>
    .hero-title {
        font-size: calc(1.775rem + 1.5vw);
    }

    .hero-form {
        background-color: #bfb2691f;
        box-shadow: 0 0.5rem 1rem rgba(189, 171, 72, 0.19);
    }

    .play-btn {
        border-radius: 50%;
        border: 2px solid #fac211;
        width: 64px;
        height: 64px;
        text-align: center;
        display: grid;
        place-content:center;
        backdrop-filter: blur(64px);
        background-color: #1c2635;
        box-shadow: 0 0 4px 0 #fac21166, 0 0 12px 0 #fac2113D, 0 0 28px 0 #fac2111F;
        animation: scaleover 2s linear infinite;
    }

    /*.platforms figure::after {*/
    /*    position: absolute;*/
    /*    content: '';*/
    /*    inset: 0;*/
    /*    background-color: #fac21185;*/
    /*}*/

    #contact a {
        color: #fffFFF8F;
    }

    #contact a:hover {
        color: #fac211;
    }

    .bg-img {
        background: url(<?= base_url() ?>public/web/img/promotion/doller.png) no-repeat center center;
        background-size: cover;
        position: relative;
        z-index: 0;
    }
    .bg-img::before {
    position: absolute;
    content: '';
    inset: 0;
    background: #000;
    opacity: .8;
    z-index: -1;
}

    input.form-range::-moz-range-thumb {
        background-color: #fac211;
    }

    input.form-range::-webkit-slider-thumb {
        background-color: #fac211;
    }

    input.form-range:focus::-moz-range-thumb {
        box-shadow: none;
        background-color: #fac211;
    }

    input.form-range:focus::-webkit-slider-thumb {
        box-shadow: none;
        background-color: #fac211;
    }

    @media (max-width: 991px) {
        .forex-page {
            height: auto !important;
        }
    }
</style>

<section id="home" class="forex-page d-flex align-items-center position-relative" style="background-image:url(<?= base_url() ?>public/web/img/promotion/hero-banner.jpg);">
    <div class="container position-relative z-1">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="hero-title mb-4 wow fadeInLeft">
                    <span class="text-gradient">Get 10%</span>
                    <span class="d-block">Tradable Bonus</span>
                </h1>
                <p class=" mb-0 wow fadeInLeft" data-wow-delay="200ms">
                    Designed for New traders, the 10% Tradable bonus program allows
                    Traders to protect their accounts from unfavorable situations in
                    the market and helps them in draw-downs with this deposit bonus.
                </p>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="hero-form px-3 py-4 rounded-2">
                    <h3 class="text-center mb-3 wow fadeInRight">
                        Sign up and receive
                        <span class="text-gradient fw-semibold">10%</span>
                        Tradable&nbsp;Bonus
                    </h3>
                    
                      <form action="<?= base_url('website/tradable_bonus_submit_data'); ?>" method="post" class="wow fadeInRight" data-wow-delay="200ms">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required />
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" name="mobile" id="phone" maxlength="10" placeholder="Phone*" required />
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="location" required>
                                <option value="">Select your Location</option>
                                <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="trade" required>
                                <option value="">Do you Trade in forex:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#151515" fill-opacity="1" d="M0,160L120,176C240,192,480,224,720,208C960,192,1200,128,1320,96L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
</section>

<section id="terms" style="background-color: #151515;">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-3 wow fadeInUp">
                    <span class="text-gradient">Get 10%</span> Tradable Bonus
                </h2>
                <p class="mb-0 wow fadeInUp" data-wow-delay="200ms">
                    This bonus can be lost and used as an additional margin. Our 10%
                    Trading bonus program will be available for a limited time only.
                    Take advantage and trade larger volumes to gain more profit with
                    one of the highest bonus rates in the market with the help of
                    this welcome trading bonus. Take your first step into trading
                    with our deposit bonus to get ahead of everyone else. We are
                    extending and improving our Deposit Bonus program for our valued
                    clients.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-img">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="title mb-4 wow fadeInUp">How the Welcome <span class="text-gradient">Bonus boost your&nbsp;deposit?</span></h2>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="p-3 shadow-lg rounded-3 wow fadeInUp" style="background: #ffffff1c;">
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 fw-semibold fs-5 text-primary">Your deposit</p>
                        <div class="fw-semibold fs-5">$<span class="value_id">100</span></div>
                    </div>
                    <input type="range" min="100" max="50000" step="1" value="100" class="w-100 form-range" />
                    <div class="d-flex justify-content-between mb-3">
                        <span>min-$100</span>
                        <span>max-$50000</span>
                    </div>
                    <div class="d-md-flex justify-content-between mt-4">
                        <h5 class="text-primary ">You get a Bonus</h5>
                        <div class="text-end">
                            <span class="text-gradient fw-semibold h5">$<span class="bons">10</span></span>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between mt-4">
                        <h5 class="text-primary ">Your account balance after the applied bonus</h5>
                        <div class="text-end">
                            <span class="text-gradient fw-semibold h5">$<span class="value">110</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="howItWorks" class="how-it-works">
    <div class="container">
        <div class="row align-items-center gy-4 withdraw-card">
            <div class="col-12 text-center">
                <h2 class="title mb-3 wow fadeInUp">How does <span class="text-gradient">it Work?</span></h2>
            </div>
            <div class="col-lg-8">
                <div class="row gy-4">
                    <div class="col-md-4 wow fadeInLeft">
                        <div class="card border-0 h-100 text-center text-white bg-linear-gradient overflow-hidden">
                            <div class="card-body">
                                <div class="icon mb-3">
                                    <i class="fa-solid fa-arrow-right-to-bracket fa-3x text-gradient"></i>
                                </div>
                                <h5 class="card-title fw-bold text-warning">
                                    Open Live Account
                                </h5>
                                <p class="card-text fs-6">
                                    Open a LIVE trading account and submit your documents to
                                    verify your account. Hurry, your account will need to be
                                    fully approved before you start trading!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp">
                        <div class="card border-0 h-100 text-center text-white bg-linear-gradient overflow-hidden">
                            <div class="card-body">
                                <div class="icon mb-3">
                                    <i class="fa-solid fa-magnifying-glass-dollar fa-3x text-gradient"></i>
                                </div>
                                <h5 class="card-title fw-bold text-warning">
                                    Fund your Account
                                </h5>
                                <p class="card-text fs-6">
                                    Make a deposit of USD 100 or more, or the equivalent in
                                    EUR/JPY/ GBP/BTC using any of our payment methods.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight">
                        <div class="card border-0 h-100 text-center text-white bg-linear-gradient overflow-hidden">
                            <div class="card-body">
                                <div class="icon mb-3">
                                    <i class="fa-solid fa-globe fa-3x text-gradient"></i>
                                </div>
                                <h5 class="card-title fw-bold text-warning">
                                    Start Trading
                                </h5>
                                <p class="card-text fs-6">
                                    There you go ! You're trade to trade the world's biggest
                                    market
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <figure class="position-relative mb-0 wow fadeInRight">
                    <img src="<?= base_url() ?>public/web/img/promotion/video-bg.jpg" alt="video" class="img-fluid rounded-circle filter" />
                    <div class="play-btn position-absolute top-50 start-50 translate-middle">
                        <a role="button" class="youtube-btn" youtubeid="nUEi6TrP0jk">
                            <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.78861 23.0179C2.17908 23.414 1.56223 23.4372 0.93807 23.0873C0.313908 22.7375 0.00121907 22.1962 0 21.4635V2.53756C0 1.80612 0.312689 1.26486 0.93807 0.913769C1.56345 0.562679 2.1803 0.585841 2.78861 0.983256L17.6917 10.4462C18.2403 10.812 18.5145 11.3301 18.5145 12.0006C18.5145 12.671 18.2403 13.1891 17.6917 13.5549L2.78861 23.0179Z" fill="#FAC211"></path>
                            </svg>
                        </a>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="bg-black">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linear-border contest-terms">
                    <h2 class="title wow fadeInUp text-center mb-5">Terms & Conditions</h2>
                    <ol class="text-white opacity-50 wow fadeInUp">
                        <li>
                            The promotion runs from the 1st January 2024 to 30th April 2024
                        </li>
                        <li>
                            Tradable Bonus 10% from 100USD upto 10,000USD Deposit.
                        </li>
                        <li>
                            This Bonus Program is intended to protect accounts from
                            drawdown periods. The Bonus can be lost with no limitations
                            and also be used as margin.
                        </li>
                        <li>
                            The 10% Tradable Bonus will be deposited automatically into
                            the relevant Trading Account with the deposit amount.
                        </li>
                        <li>
                            The 10% Tradable Bonus will be applied on EVERY deposit for
                            the relevant Trading Account.
                        </li>
                        <li>
                            Every credit bonus funds will have 30 days expiry. Credit will
                            auto remove from the trading account.
                        </li>
                       <li> Clients with depleted balances from losses can continue trading with the Bonus for a Maximum of 7 Days, to retain the bonus a re-deposit is mandatory within 7 days.</li>
                        <li>
                            This 10% Tradable Bonus Program can only be applied to one
                            account per client.
                        </li>
                        <li>
                            The 10% Tradable Bonus can be used as stop loss as there is no
                            limitation in using it for trading.
                        </li>
                        <li>
                            The maximum total Tradable Bonus awarded is $5000 per Client.
                        </li>
                        <li>
                            The Tradable Bonus only applies on deposits over $10.
                        </li>
                        <li>
                            In the case that the Client will perform any withdrawal out of
                            a Trading Account that has the 10% Tradable Bonus in it, a
                            corresponding Bonus removal will automatically take place.
                        </li>
                        <li>
                            The formula used by the system regarding Bonus Removals upon a
                            withdrawal request, is the following: Withdrawal Amount X 10%.
                        </li>
                        <li>
                            The ‘Tradable Bonus’ will only be applied to the trading
                            account that received the initial 10% Tradable Bonus.
                        </li>
                        <li>
                            If the Company suspects or has reason to believe that a Client
                            has abused the terms and conditions of this Bonus Program by
                            hedging his positions internally (using other trading accounts
                            held with Company) or externally (using other trading accounts
                            held with other brokers), then the Company reserves the right,
                            without the Client’s consent, to withdraw immediately the
                            Tradable Bonus (and the Additional Bonus if applicable ) from
                            the Client’s trading account(s) or from his winning hedged
                            accounts.
                        </li>
                        <li>
                            If the Company suspects or has reason to believe that a Client
                            has more than one account under this Bonus Program, then the
                            Company reserves the right, without the Client’s consent to
                            withdraw immediately the Tradable Bonus from the Client’s
                            trading account(s). In the event that any stop losses are
                            incurred as a result of such a removal the Company will not be
                            held liable.
                        </li>
                        <li>
                            The Client acknowledges that Forex and CFDs are leveraged
                            products which involve a high level of risk. When trading in
                            such products, it is possible for Clients to lose all their
                            capital. These products may not be suitable for everyone and
                            Clients should ensure that they understand the risks involved.
                            Electing to utilize this Bonus Offer may increase the risk of
                            trading. Clients should seek independent advice if necessary.
                        </li>
                        <li>
                            The Company reserves the right to unilaterally modify, change
                            or terminate this Bonus Program or any of the terms and
                            conditions included herein, at any time, without the Client’s
                            consent.
                        </li>
                        <li>
                            The bonus will be treated as a backup equity, In case of a
                            loss the actual liquidity will be first utilized after that
                            the bonus will be used.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="platforms" class="platforms bg-dark position-relative">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 wow fadeInLeft">
                <figure class="position-relative mb-0 overflow-hidden" style="/*border-radius:52% 48% 31% 69% / 46% 28% 72% 54% ;*/">
                    <img src="<?= base_url() ?>public/web/img/promotion/comparison_platforms.webp" alt="Start Trading on World Class Platform" class="img-fluid" />
                </figure>
            </div>
            <div class="col-lg-6 offset-lg-1 text-center text-lg-end">
                <div class="mb-5">
                    <h3 class="mb-4 wow fadeInRight" data-wow-delay="100ms">
                        <span class="text-gradient">Start Trading</span> on World Class
                        Platform
                    </h3>
                    <p class="mb-5 wow fadeInRight" data-wow-delay="300ms">
                        Use this app alongside your mobile, desktop, and web-based
                        YaMarkets MT5 trading platforms to keep your finger firmly on
                        the pulse of the global financial markets.
                    </p>
                </div>
                <div class="row gy-4">
                    <div class="col-md-4 wow fadeInRight" data-wow-delay="400ms">
                        <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=YaMarkets-Server" target="_blank" class="download-btn btn btn-outline-primary py-3">
                            <div>
                                <i class="fa-brands fa-apple fa-3x"></i>
                            </div>
                            <div>
                                <small>Available on</small>
                                <p class="lh-base text-uppercase mb-0">app store</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay="600ms">
                        <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=YaMarkets-Server" target="_blank" class="download-btn btn btn-outline-primary py-3">
                            <div>
                                <i class="fa-brands fa-android fa-3x"></i>
                            </div>
                            <div>
                                <small>Available on</small>
                                <p class="lh-base text-uppercase mb-0">play store</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay="800ms">
                        <a href="https://download.mql5.com/cdn/web/yamarkets.limited/mt5/yamarkets5setup.exe" target="_blank" class="download-btn btn btn-outline-primary py-3">
                            <div>
                                <i class="fa-brands fa-windows fa-3x"></i>
                            </div>
                            <div>
                                <small>Download from</small>
                                <p class="lh-base text-uppercase mb-0">web store</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
   document.addEventListener('DOMContentLoaded', function () {
        let elem = document.querySelector('.form-range');
        let originalValueElem = document.querySelector('.value_id');
        let increasedValueElem = document.querySelector('.value');
         let bonsValueElem = document.querySelector('.bons');
        

        let updateValues = function () {
            let originalValue = elem.value;
            let increasedValue = parseFloat(originalValue) + (parseFloat(originalValue) * 0.10);

            originalValueElem.innerHTML = originalValue;
            increasedValueElem.innerHTML = increasedValue.toFixed(2);
            bonsValueElem.innerHTML=(parseFloat(originalValue) * 0.10).toFixed(2);
        }

        elem.addEventListener("input", updateValues);
        updateValues();
    });
</script>