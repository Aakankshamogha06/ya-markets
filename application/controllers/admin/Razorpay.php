<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."libraries/razorpay/razorpay-php/Razorpay.php");

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Razorpay extends CI_Controller {
	public function pay()
	{
		$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
		
		$_SESSION['payable_amount'] = $_POST['amount'];
		$_SESSION['course_id'] = $_POST['course_id'];
		$razorpayOrder = $api->order->create(array(
			'receipt'         => rand(),
			'amount'          => $_SESSION['payable_amount'] * 100, // 2000 rupees in paise
			'currency'        => 'INR',
			'payment_capture' => 1 // auto capture
		));


		$amount = $razorpayOrder['amount'];

		$razorpayOrderId = $razorpayOrder['id'];

		$_SESSION['razorpay_order_id'] = $razorpayOrderId;

		$data = $this->prepareData($amount,$razorpayOrderId);

		$this->load->view('frontend/rezorpay',array('data' => $data));
	}

	/**
	 * This function verifies the payment,after successful payment
	 */
	public function verify()
	{
		$success = true;
		$error = "payment_failed";
		if (empty($_POST['razorpay_payment_id']) === false) {
			$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
		try {
				$attributes = array(
					'razorpay_order_id' => $_SESSION['razorpay_order_id'],
					
					'razorpay_payment_id' => $_POST['razorpay_payment_id'],
					'razorpay_signature' => $_POST['razorpay_signature']
				);
				$api->utility->verifyPaymentSignature($attributes);
			} catch(SignatureVerificationError $e) {
				$success = false;
				$error = 'Razorpay_Error : ' . $e->getMessage();
			}
		}
		if ($success === true) {
			/**
			 * Call this function from where ever you want01
			 * to save save data before of after the payment
			 */
			$this->setRegistrationData();

		redirect(base_url().'admin/purchase/purchase_view');
		}
		else {
			redirect(base_url().'admin/razorpay/paymentFailed');
		}
	}

	/**
	 * This function preprares payment parameters
	 * @param $amount
	 * @param $razorpayOrderId
	 * @return array
	 */
	public function prepareData($amount,$razorpayOrderId)
	{
		$data = array(
			"key" => RAZOR_KEY,
			"amount" => $amount,
			"name" => "Mahip Test",
			"description" => "Test To Code",
			"image" => "https://e7.pngegg.com/pngimages/575/704/png-clipart-computer-icons-test-scalable-graphics-test-score-angle-pencil.png",
			"prefill" => array(
				"name"  => $this->input->post('name'),
				"email"  => $this->input->post('email'),
				"contact" => $this->input->post('contact'),
			),
			"notes"  => array(
				"address"  => "Hello World",
				"merchant_order_id" => rand(),
			),
			"theme"  => array(
				"color"  => "#F37254"
			),
			"order_id" => $razorpayOrderId,
		);
		return $data;
	}

	/**
	 * This function saves your form data to session,
	 * After successfull payment you can save it to database
	 */
	public function setRegistrationData()
	{
		$data =
		[
			'user_id' => $_SESSION['admin_id'],
			'course_id' =>$_SESSION['course_id'],
			'purchase_date' => date('Y-m-d'),
			'transaction_id' => $_SESSION['razorpay_order_id'],
			'amount' =>$_SESSION['payable_amount'],
			'transaction_status' => 'Approved',
		];
	$this->db->insert('purchase', $data); 
	}

	/**
	 * This is a function called when payment successfull,
	 * and shows the success message
	 */
	public function success()
	{
		$this->load->view('frontend/success');
	}
	/**
	 * This is a function called when payment failed,
	 * and shows the error message
	 */
	public function paymentFailed()
	{
		$this->load->view('frontend/error');
	}
	
	
}
