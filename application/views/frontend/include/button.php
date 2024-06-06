<?php
$CI =& get_instance();
$CI->load->helper('ip_helper');
$user_country = getUserCountryByIp($CI);
if ($user_country == "India") {
    $reg_url = "https://area.yamarkets.com/register";
} else {
    $reg_url = "https://secure.yamarkets.com/";
}
?>

<div class="col-12">
                <div class="group-btn text-center mt-5">
                    <a href="<?= $reg_url?>" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms"><?=lang('register_section_live_account')?></a>
                    <a href="<?= $reg_url?>" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms"><?=lang('register_section_demo_account')?></a>
                </div>
            </div>