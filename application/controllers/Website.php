<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Google\Cloud\Translate\V2\TranslateClient;

class Website extends CI_Controller
{
    public function __construct()
    {



        parent::__construct();
        $this->load->model('admin/Slider_model', 'Slider_model');
        $this->load->model('admin/Blog_Model', 'Blog_Model');
        $this->load->model('admin/Seminar_model', 'Seminar_model');
        $this->load->model('admin/Webinar_model', 'Webinar_model');
        $this->load->model('admin/Certificate_model', 'Certificate_model');
        $this->load->model('admin/Awards_model', 'Awards_model');
        $this->load->model('admin/Expo_Model', 'Expo_Model');
        $this->load->model('admin/NFP_model', 'NFP_model');
        $this->load->model('admin/Contact_model', 'Contact_Model');
        $this->load->model('admin/Contest_model', 'Contest_model');
        $this->load->model('admin/Video_Category_model', 'Video_Category_Model');
        $this->load->model('admin/Video_model', 'Video_model');
        $this->load->model('admin/OnetoOne_Session_model', 'OnetoOne_Session_model');
        $this->load->model('admin/Career_Detail_model', 'Career_Detail_model');
        $this->load->model('admin/Seo_model', 'Seo_Model');
        $this->load->model('admin/Welcome_bonus_model', 'Welcome_bonus_model');
        $this->load->helper('url','helper');
    }
    public function switch_language($language)
    {
        $this->session->set_userdata('lang', $language);
        $this->load->helper('url');
        redirect(base_url());
    }


    private function switch_language_url($language_segment)
    {
        switch ($language_segment) {
            case 'en':
                $language_name = 'english';
                break;
            case 'hi':
                $language_name = 'hindi';
                break;
            case 'ar':
                $language_name = 'arabic';
                break;
            default:
                $language_name = 'english'; // Default to English if language is not recognized
        }

        // Set the language name in the session
        $this->session->set_userdata('lang', $language_name);
    }


    private function load_language()
    {
        $language = $this->session->userdata('lang') ?? 'english';
        $this->lang->load($language);
    }

    public function index()
    {
        // $this->switch_language_url($language_segment);

        


        require_once BASEPATH . '../vendor/autoload.php'; // Adjust the path accordingly


        // Initialize TranslateClient
        $translate = new TranslateClient([
            'key' => 'AIzaSyBeFlf9_qoRVIgMXHqSUBq1EQ4B46llOHI'
        ]);


        // Fetch blog content from the database


        // Translate blog names based on selected language

        $user_language = $this->session->userdata('lang') ?? 'english';

        // Set target language based on user's language
        switch ($user_language) {
            case 'english':
                $target_language = 'en';
                break;
            case 'hindi':
                $target_language = 'hi';
                break;
            case 'arabic':
                $target_language = 'ar';
                break;
            default:
                $target_language = 'en'; // Default to English if language is not recognized
        }





        $this->load_language();
        $data['slider_view'] = $this->Slider_model->slider_view();
        $data['awards_view'] = $this->Awards_model->awards_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index', $data);
        $this->load->view('frontend/include/footer');
        // $this->load->view('frontend/include/button');
    }

    public function about($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about');
        $this->load->view('frontend/include/footer');
    }

    public function about_app()
    {
        $this->load->view('frontend/about-app');
    }

    public function refund_app()
    {
        $this->load->view('frontend/refund-policy-app');
    }

    public function disclaimer_app()
    {
        $this->load->view('frontend/disclaimer-app');
    }

    public function privacy_app()
    {
        $this->load->view('frontend/privacy-policy-app');
    }


    public function regulations($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['certificate_view'] = $this->Certificate_model->certificate_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/regulations', $data);
        $this->load->view('frontend/include/footer');
    }
    public function why_trade_forex($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/why-trade-forex');
        $this->load->view('frontend/include/footer');
    }
    public function expos($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['expo_view'] = $this->Expo_Model->expo_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/expos', $data);
        $this->load->view('frontend/include/footer');
    }
    public function videos($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['video_category_view'] = $this->Video_Category_Model->video_category_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/videos', $data);
        $this->load->view('frontend/include/footer');
    }
    public function awards($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['awards_view'] = $this->Awards_model->awards_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/awards', $data);
        $this->load->view('frontend/include/footer');
    }

    public function ib_campaign($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/ib-campaign');
        $this->load->view('frontend/include/footer');
    }

    public function faq($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/faq');
        $this->load->view('frontend/include/footer');
    }

    public function star_ib_partners_contest($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/star-ib-partners-contest');
        $this->load->view('frontend/include/footer');
    }

    public function master_ib_star_contest($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/master-ib-star-contest');
        $this->load->view('frontend/include/footer');
    }

    public function we_are_hiring($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['career_details_view'] = $this->Career_Detail_model->career_details_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/we-are-hiring', $data);
        $this->load->view('frontend/include/footer');
    }
    public function forex($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/forex');
        $this->load->view('frontend/include/footer');
    }
    public function blog_detail($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['blog_detail_data'] = $this->Blog_Model->blog_detail_data_nm();
        $data['blog_view'] = $this->Blog_Model->blog_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog-detail', $data);
        $this->load->view('frontend/include/footer');
    }

    public function crypto_currencies($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/crypto-currencies');
        $this->load->view('frontend/include/footer');
    }
    public function commodities($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/commodities');
        $this->load->view('frontend/include/footer');
    }
    public function trading_conditions($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trading-conditions');
        $this->load->view('frontend/include/footer');
    }
    public function indices($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/indices');
        $this->load->view('frontend/include/footer');
    }
public function instruments_list($language_segment)
{
    $this->switch_language_url($language_segment);
    $this->load_language();
    $this->load->view('frontend/include/header');
    $this->load->view('frontend/instruments-list');
    $this->load->view('frontend/include/footer');
}
    public function analytics($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/analytics');
        $this->load->view('frontend/include/footer');
    }
    public function conversion_rate($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/conversion-rate');
        $this->load->view('frontend/include/footer');
    }
    public function comparison($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/comparison');
        $this->load->view('frontend/include/footer');
    }
    public function webinars($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['webinar_view'] = $this->Webinar_model->webinar_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/webinars', $data);
        $this->load->view('frontend/include/footer');
    }
    public function seminars($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['seminar_view'] = $this->Seminar_model->seminar_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/seminars', $data);
        $this->load->view('frontend/include/footer');
    }
    public function economic_calender($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();

        $this->load->view('frontend/include/header');
        $this->load->view('frontend/economic-calender');
        $this->load->view('frontend/include/footer');
    }
    public function calculator($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/calculator');
        $this->load->view('frontend/include/footer');
    }
    public function blog($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['blog_view'] = $this->Blog_Model->blog_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog', $data);
        $this->load->view('frontend/include/footer');
    }
    public function mt5_platform($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/mt5-platform');
        $this->load->view('frontend/include/footer');
    }
    public function mt4_platform($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/mt4-platform');
        $this->load->view('frontend/include/footer');
    }
    public function nfp($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['nfp_view'] = $this->NFP_model->nfp_view_lt();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/nfp', $data);
        $this->load->view('frontend/include/footer');
    }
    public function nfp_winners($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['nfp_view'] = $this->NFP_model->nfp_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/nfp-winners', $data);
        $this->load->view('frontend/include/footer');
    }
    public function local_currencies($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/local-currencies');
        $this->load->view('frontend/include/footer');
    }
    public function aml_policy($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/aml-policy');
        $this->load->view('frontend/include/footer');
    }
    public function funding_option($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/funding-option');
        $this->load->view('frontend/include/footer');
    }
    public function disclaimer($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/disclaimer');
        $this->load->view('frontend/include/footer');
    }
    public function expo_gallery($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['expo_detail_data'] = $this->Expo_Model->expo_detail_data_nm();
        $data['expo_view'] = $this->Expo_Model->expo_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/expo-gallery', $data);
        $this->load->view('frontend/include/footer');
    }
    public function kyc_policy($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/kyc-policy');
        $this->load->view('frontend/include/footer');
    }
    public function market_news($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/market-news');
        $this->load->view('frontend/include/footer');
    }
    public function privacy_policy($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/privacy-policy');
        $this->load->view('frontend/include/footer');
    }
    public function refund_policy($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/refund-policy');
        $this->load->view('frontend/include/footer');
    }
    public function risk_disclosure($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/risk-disclosure');
        $this->load->view('frontend/include/footer');
    }
    public function why_choose_use($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/why-choose-use');
        $this->load->view('frontend/include/footer');
    }
    public function contact_us($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact-us');
        $this->load->view('frontend/include/footer');
    }

    public function account_types($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/account-types');
        $this->load->view('frontend/include/footer');
    }
    public function copytrade($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/copytrade');
        $this->load->view('frontend/include/footer');
    }
    public function withdraw_funding($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/withdraw-funding');
        $this->load->view('frontend/include/footer');
    }
    public function pamm($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/pamm');
        $this->load->view('frontend/include/footer');
    }
    public function zulutrade($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/zulutrade');
        $this->load->view('frontend/include/footer');
    }
    public function  tradable_bonus($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/tradable-bonus');
        $this->load->view('frontend/include/footer');
    }

    public function why_choose_us($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/why-choose-us');
        $this->load->view('frontend/include/footer');
    }
    public function trading_strategies($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trading-strategies');
        $this->load->view('frontend/include/footer');
    }
    public function seminar_gallery($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();

        $data['semi_detail_data'] = $this->Seminar_model->seminar_detail_data_nm();

        $this->load->view('frontend/include/header');
        $this->load->view('frontend/seminar-gallery', $data);
        $this->load->view('frontend/include/footer');
    }
    public function trading_central($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trading-central');
        $this->load->view('frontend/include/footer');
    }
    public function review_bonanza($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/review-bonanza');
        $this->load->view('frontend/include/footer');
    }

    public function gadget_reward($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/gadget-reward');
        $this->load->view('frontend/include/footer');
    }

    public function srilanka_welcome_bonus($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/welcome-bonus');
        $this->load->view('frontend/include/footer');
    }
    public function demo_trading_platform($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/demo-trading-platform');
        $this->load->view('frontend/include/footer');
    }
    public function volume_contest_winner($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/volume-contest-winner');
        $this->load->view('frontend/include/footer');
    }

    public function chat_faq($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/chat_faq');
        $this->load->view('frontend/include/footer');
    }
    public function country($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['session_view'] = $this->OnetoOne_Session_model->session_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/country', $data);
        $this->load->view('frontend/include/footer');
    }
    public function session($language_segment,$uid)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $uid = $this->uri->segment(3);
        $data['session_detail_data'] = $this->OnetoOne_Session_model->session_data_nm($uid);
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/session', $data);
        $this->load->view('frontend/include/footer');
    }
    public function session_details($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $data['session_detail'] = $this->OnetoOne_Session_model->session_data_nm();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/session_details', $data);
        $this->load->view('frontend/include/footer');
    }
    public function trading_contest($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();

        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trading-contest');
        $this->load->view('frontend/include/footer');
    }
    public function dollar_trip_ib_contest($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();

        $this->load->view('frontend/include/header');
        $this->load->view('frontend/dollar-trip-ib-contest');
        $this->load->view('frontend/include/footer');
    }

    public function submit_form()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Contact_Model->contact_submit_data($data) == true) {
?>
                <script type="text/javascript">
                    alert("Submit Successfully");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
            <?php
                exit;
            }
        }
    }


    public function contest_submit_data()
    {
        $data = [];

        if ($this->input->post()) {

            if ($this->Contest_model->contest_submit_data($data) == true) {
            ?>
                <script type="text/javascript">
                    alert("Submit Successfully");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
            <?php
                exit;
            }
        }
    }


    public function tradable_bonus_submit_data()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = [];

        if ($this->input->post()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'location' => $this->input->post('location'),
                'trade' => $this->input->post('trade'),
                'ip' => $ip,
            );

            $this->db->insert('tradable_bonus', $data);

            if ($this->db->affected_rows() > 0) {
            ?>
                <script type="text/javascript">
                    alert("Submit Successfully");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
            <?php
                exit;
            }
        }
    }

    public function elite_rewards_submit_data()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = [];

        if ($this->input->post()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile_no' => $this->input->post('mobile_no'),
                'message' => $this->input->post('message'),
                'ip' => $ip,
            );

            $this->db->insert('elite_rewards', $data);

            if ($this->db->affected_rows() > 0) {
            ?>
                <script type="text/javascript">
                    alert("Submit Successfully");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
            <?php
                exit;
            }
        }
    }

    private function sendEmail($to, $subject, $message)
    {
        $this->load->config('email');
        $this->load->library('email');
        $this->email->from('wordpress@fxcareers.com', 'FXCareers');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            return true; // Email sent successfully
        } else {
            echo $this->email->print_debugger();
            return false; // Email sending failed
        }
    }

    public function webinar_user_submit_data()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'country' => $this->input->post('country'),
                'webi_id' => $this->input->post('webi_id'),
                'ip' => $ip,
            );

            $this->db->insert('user_webi_dtl', $data);

            if ($this->db->affected_rows() > 0) {
                // Call the sendEmail function
                $to = $this->input->post('email');
                $subject = 'Your Subject Here';
                $template = 'Your Email Template Here';

                if ($this->sendEmail($to, $subject, $template)) {
                    echo '<script type="text/javascript">
                              alert("Submit Successfully. Mail Sent");
                              window.location.href = "' . base_url() . '";
                          </script>';
                    exit;
                } else {
                    echo '<script type="text/javascript">
                              alert("Submit Successfully. Error sending email");
                               window.location.href = "' . base_url() . '";
                              
                          </script>';
                    exit;
                }
            }
        }
    }

    public function model_form_submit_data()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = [];

        if ($this->input->post()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'location' => $this->input->post('location'),

                'ip' => $ip,
            );

            $this->db->insert('south_africa_seminar', $data);

            if ($this->db->affected_rows() > 0) {
            ?>
                <script type="text/javascript">
                    alert("Submit Successfully");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
            <?php
                exit;
            }
        }
    }

    public function claim_bonus()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = [];

        if ($this->input->post()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile_no' => $this->input->post('mobile_no'),
                'message' => $this->input->post('message'),

                'ip' => $ip,

            );
            // $data = $this->security->xss_clean($data);
            $this->db->insert('claim_bonus', $data);

            if ($this->db->affected_rows() > 0) {
            ?>
                <script type="text/javascript">
                    alert("Submit Successfully");
                    window.location.href = "<?php echo base_url(); ?>";
                </script>
            <?php
                exit;
            }
        }
    }

    public function gadget_reward_submit_data()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = [];

        if ($this->input->post()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'location' => $this->input->post('location'),
                'message' => $this->input->post('message'),

                'ip' => $ip,
            );

            $this->db->insert(' gadget_reward', $data);

            if ($this->db->affected_rows() > 0) {
            ?>
                <script type="text/javascript">
                    alert("Submit Successfully");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
            <?php
                exit;
            }
        }
    }

    public function dollar_trip_ib_contest_submit_data()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = [];

        if ($this->input->post()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile_no' => $this->input->post('mobile_no'),
                'message' => $this->input->post('message'),

                'ip' => $ip,
            );

            $this->db->insert('dollar_trip_ib_contest', $data);

            if ($this->db->affected_rows() > 0) {
            ?>
                <script type="text/javascript">
                    alert("Submit Successfully");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
<?php
                exit;
            }
        }
    }

    function mail_send_test()
    {
        //   'protocol' => 'smtp', 
        //     'smtp_host' => 'smtp.gmail.com', 
        //     'smtp_port' => 25, 
        //     'smtp_user' => '######@gmail.com',
        //     'smtp_pass' => '#####', 
        //     'mailtype' => 'html',
        //     'wordwrap' => true, 
        //     'smtp_crypto' => '', 
        //     'smtp_auth' => false, 

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'relay-hosting.secureserver.net',
            'smtp_port' => 578,
            'smtp_user' => 'mahipgupta39@gmail.com',
            'smtp_pass' => 'ygnr otnn mdxb loga',
            'mailtype' => 'html',
            'wordwrap' => true,
            'smtp_crypto' => '',
            'smtp_auth' => false,
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('mahipgupta39@gmail.com', 'mahip');
        $this->email->to('mahip@yamarkets.com');

        $this->email->subject('Testing testing testing…');

        // Set your email content here
        $email_content = '<p>This is a test email message.</p>';
        $this->email->message($email_content);

        if (!$this->email->send()) {
            show_error($this->email->print_debugger());
        } else {
            echo 'Your e-mail has been sent!';
        }
    }


    public function dubai_meet_ib_contest($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/dubai-meet-ib-contest');
        $this->load->view('frontend/include/footer');
    }

    public function easter_offer($language_segment)
    {
        $this->switch_language_url($language_segment);
        $this->load_language();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/easter-offer');
        $this->load->view('frontend/include/footer');
    }
}
?>

<script>
    // Disable right-click
    // document.addEventListener('contextmenu', (e) => e.preventDefault());

    function ctrlShiftKey(e, keyCode) {
        return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
    }

    document.onkeydown = (e) => {
        // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
        if (
            event.keyCode === 123 ||
            ctrlShiftKey(e, 'I') ||
            ctrlShiftKey(e, 'J') ||
            ctrlShiftKey(e, 'C') ||
            (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
        )
            return false;
    };
</script>