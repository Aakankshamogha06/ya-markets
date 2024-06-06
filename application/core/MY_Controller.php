<?php
	class MY_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$CI =& get_instance();
			$CI->load->helper('ip_helper');
			$user_country = getUserCountryByIp($CI);
			if ($user_country == "India") {
				$reg_url = "https://area.yamarkets.com/register";
			} else {
				$reg_url = "https://secure.yamarkets.com/";
			}
			if(!$this->session->has_userdata('is_admin_login'))
			{
				redirect('admin/auth/login');
			}
			
		}
	}
?>

    