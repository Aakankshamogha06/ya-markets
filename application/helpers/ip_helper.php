<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getUserIpAddr')) {
    function getUserIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            // IP from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // IP pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
if (!function_exists('getUserCountryByIp')) {
    function getUserCountryByIp($CI)
    {
        $user_country = $CI->session->userdata('user_country');

        if (!$user_country) {
            $ip = getUserIpAddr();
            $api_url = "http://ip-api.com/json/{$ip}";
            $response = file_get_contents($api_url);

            if ($response !== false) {
                $ip_data = json_decode($response, true);

                if ($ip_data['status'] === 'success') {
                    $country = $ip_data['country'];

                    // Update the URL based on the country
                    $reg_url = ($country === 'India') ? "https://area.yamarkets.com/register" : "https://secure.yamarkets.com/";

                    $CI->session->set_userdata('user_country', $country, 1 * 60 * 60);
                    $CI->session->set_userdata('reg_url', $reg_url, 1 * 60 * 60);

                    $user_country = $country;
                }
            }
        }

        return $user_country;
    }
}

