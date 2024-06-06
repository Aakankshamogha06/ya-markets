<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_port'] = 587;
$config['smtp_user'] = 'webinar@yamarkets.com';
$config['smtp_pass'] = 'jsyn zygh aoty fflb';
$config['smtp_crypto'] = 'tls';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";


$config = array(
    'protocol' => 'mail', // Use 'mail' for the mail() function
    'mailtype' => 'html', // Set email format to HTML
    'charset' => 'utf-8',
    'wordwrap' => TRUE
);