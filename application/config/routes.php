<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'website';

// setting route for admin
$route['admin'] = 'admin/auth';

$route['admin/dashboard2'] = 'admin/dashboard/index2';

$route['adminlte'] = 'admin/auth';
$route['adminlte/(:any)'] = 'admin/adminlte/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// instrument ****************
$route['instrument/add_instrument'] = 'admin/instrument/add_instrument';
$route['instrument/instrument_submit_data'] = 'admin/instrument/instrument_submit_data';
$route['instrument/view_instrument']        = 'admin/instrument/instrument_view';
$route['instrument/edit_instrument/(:any)'] = 'admin/instrument/instrument_edit/$1';
$route['instrument/instrument_update_data'] = 'admin/instrument/instrument_update_data';
$route['instrument/instrument_delete/(:any)'] = 'admin/instrument/instrument_delete/$1';
/////////////////////website////////////////


$route['(:any)/about'] = 'website/about/$1';
$route['(:any)/about-app'] = 'website/about_app/$1';
$route['(:any)/refund-policy-app'] = 'website/refund_app/$1';
$route['(:any)/disclaimer-app'] = 'website/disclaimer_app/$1';
$route['(:any)/privacy-policy-app'] = 'website/privacy_app/$1';
$route['(:any)/regulations'] = 'website/regulations/$1';
$route['(:any)/why-trade-forex'] = 'website/why_trade_forex/$1';
$route['(:any)/expo'] = 'website/expos/$1';
$route['(:any)/expo/(:any)'] = 'website/expo_gallery/$1/$2';
$route['(:any)/videos'] = 'website/videos/$1';
$route['(:any)/awards'] = 'website/awards/$1';
$route['(:any)/faq'] = 'website/faq/$1';
$route['(:any)/we-are-hiring'] = 'website/we_are_hiring/$1';
$route['(:any)/forex'] = 'website/forex/$1';
$route['(:any)/crypto-currencies'] = 'website/crypto_currencies/$1';
$route['(:any)/commodities'] = 'website/commodities/$1';
$route['(:any)/trading-conditions'] = 'website/trading_conditions/$1';
$route['(:any)/indices'] = 'website/indices/$1';
$route['(:any)/account-types'] = 'website/account_types/$1';
$route['(:any)/instruments-list'] = 'website/instruments_list/$1';
$route['(:any)/analytics'] = 'website/analytics/$1';
$route['(:any)/conversion-rate'] = 'website/conversion_rate/$1';
$route['(:any)/analytics'] = 'website/analytics/$1';
$route['(:any)/webinars'] = 'website/webinars/$1';
$route['(:any)/seminars'] = 'website/seminars/$1';
$route['(:any)/economic-calender'] = 'website/economic_calender/$1';
$route['(:any)/calculator'] = 'website/calculator/$1';
$route['(:any)/blog'] = 'website/blog/$1';
$route['(:any)/blog/(:any)'] = 'website/blog_detail/$1';
$route['(:any)/mt5-platform'] = 'website/mt5_platform/$1';
$route['(:any)/mt4-platform'] = 'website/mt4_platform/$1';
$route['(:any)/nfp'] = 'website/nfp/$1';
$route['(:any)/aml-policy'] = 'website/aml_policy/$1';
$route['(:any)/nfp-winners'] = 'website/nfp_winners/$1';
$route['(:any)/funding-option'] = 'website/funding_option/$1';
$route['(:any)/local-currencies'] = 'website/local_currencies/$1';
$route['(:any)/disclaimer'] = 'website/disclaimer/$1';
$route['(:any)/expo-gallery'] = 'website/expo_gallery/$1';
$route['(:any)/kyc-policy'] = 'website/kyc_policy/$1';
$route['(:any)/market-news'] = 'website/market_news/$1';
$route['(:any)/privacy-policy'] = 'website/privacy_policy/$1';
$route['(:any)/refund-policy'] = 'website/refund_policy/$1';
$route['(:any)/risk-disclosure'] = 'website/risk_disclosure/$1';
$route['(:any)/why-choose-us'] = 'website/why_choose_us/$1';
$route['(:any)/contact-us'] = 'website/contact_us/$1';
$route['(:any)/account-types'] = 'website/account_types/$1';
$route['(:any)/comparison'] = 'website/comparison/$1';
$route['(:any)/copytrade'] = 'website/copytrade/$1';
$route['(:any)/pamm'] = 'website/pamm/$1';
$route['(:any)/withdraw-funding'] = 'website/withdraw_funding/$1';
$route['(:any)/zulutrade'] = 'website/zulutrade/$1';
$route['(:any)/why-choose-us'] = 'website/why_choose_us/$1';
$route['(:any)/trading-strategies'] = 'website/trading_strategies/$1';
$route['(:any)/seminar-gallery/(:any)'] = 'website/seminar_gallery/$1/$1';
$route['(:any)/star-ib-partners-contest'] = 'website/star_ib_partners_contest/$1';
$route['(:any)/master-ib-star-contest'] = 'website/master_ib_star_contest/$1';
$route['(:any)/trading-central'] = 'website/trading_central/$1';
$route['(:any)/how-to-use-zoho-chat-bot'] = 'website/chat_faq/$1';
$route['(:any)/tradable-bonus'] = 'website/tradable_bonus/$1';
$route['(:any)/review-bonanza'] = 'website/review_bonanza/$1';
$route['(:any)/gadget-reward'] = 'website/gadget_reward/$1';
$route['(:any)/50-welcome-bonus'] = 'website/srilanka_welcome_bonus/$1';
$route['(:any)/Elite-Rewards'] = 'website/ib_campaign/$1';
$route['(:any)/demo-trading-platform'] = 'website/demo_trading_platform/$1';
$route['(:any)/volume-contest-winner'] = 'website/volume_contest_winner/$1';
$route['(:any)/dubai-meet-ib-contest'] = 'website/dubai_meet_ib_contest/$1';
$route['(:any)/easter-offer'] = 'website/easter_offer/$1';
$route['(:any)/country'] = 'website/country/$1';
$route['(:any)/session/(any:)'] = 'website/session/$1/$2';
$route['(:any)/session_details/(any:)'] = 'website/session_details/$1/$2';
$route['(:any)/trading-contest'] = 'website/trading_contest/$1';
$route['(:any)/dollar-trip-ib-contest'] = 'website/dollar_trip_ib_contest/$1';
 

/* API */
$route['product'] = 'api/Product';
$route['product/(:any)'] = 'api/Product/$1';
$route['product/(:num)']['PUT'] = 'api/Product/$1';
$route['product/(:num)']['DELETE'] = 'api/Product/$1';
$route['api/register'] = 'api/User/register';
$route['api/login'] = 'api/User/login';
$route['api/logout'] = 'api/User/logout';
$route['reGenToken'] = 'api/Token/reGenToken';
$route['course_api/course_data'] = 'course_api/course_data_get';
$route['course_api/frm_data'] = 'course_api/frm_data_get';
$route['course_api/new_course_data'] = 'course_api/new_course_data_get'; // Add this line for the new API endpoint
$route['course_api/webinar'] = 'course_api/webinar_get';
$route['course_api/book_webinar'] = 'course_api/book_webinar_post';
$route['course_api/app_slider'] = 'course_api/app_slider_data_get';
$route['course_api/booked_data/(:num)/(:num)/'] = 'course_api/booked_data_get/$1/$2/';