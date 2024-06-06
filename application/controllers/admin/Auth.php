<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/auth_model', 'auth_model');
	}

	public function index()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			redirect('admin/dashboard');
		} else {
			redirect('admin/auth/login');
		}
	}

	public function login()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('captcha', 'CAPTCHA', 'required|callback_check_captcha');
			if ($this->form_validation->run() == FALSE) {
				$data['captcha'] = $this->generate_captcha();
				$this->load->view('admin/auth/login',$data);
			} else {
				$data = array(
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
				);
				$result = $this->auth_model->login($data);
				if ($result == TRUE) {
					$admin_data = array(
						'admin_id' => $result['id'],
						'username' => $result['username'],
						'name' => $result['firstname'] . '&nbsp;' . $result['lastname'],
						'role' => $result['is_admin'],
						'role_name' => $result['role_name'],
						'is_admin_login' => TRUE

					);
					$this->session->set_userdata($admin_data);
					redirect(base_url('admin/dashboard'), 'refresh');
				} else {
					$data['captcha'] = $this->generate_captcha();
					$data['msg'] = 'Invalid Email or Password!';
					$this->load->view('admin/auth/login', $data);
				}
			}
		} else {
			$data['captcha'] = $this->generate_captcha();
			$this->load->view('admin/auth/login',$data);
		}
	}

	public function change_pwd()
	{
		$id = $this->session->userdata('admin_id');
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'trim|required|matches[password]');
			$this->form_validation->set_rules('captcha', 'CAPTCHA', 'required|callback_check_captcha');
			if ($this->form_validation->run() == FALSE) {
				$data['view'] = 'admin/auth/change_pwd';
				$this->load->view('admin/layout', $data);
			} else {
				$data = array(
					'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
				);
				$result = $this->auth_model->change_pwd($data, $id);
				if ($result) {
					$this->session->set_flashdata('msg', 'Password has been changed successfully!');
					redirect(base_url('admin/auth/change_pwd'));
				}
			}
		} else {
			$data['view'] = 'admin/auth/change_pwd';
			$this->load->view('admin/layout', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/auth/login'), 'refresh');
	}


	public function check_captcha($str)
{
    $user_input = strtolower($str);
    $captcha_code = strtolower($this->session->userdata('captcha_code'));

    if ($user_input === $captcha_code) {
        return TRUE;
    } else {
        $this->form_validation->set_message('check_captcha', 'The CAPTCHA code entered is incorrect.');
        return FALSE;
    }
}

    private function generate_captcha() {
        $captcha_code = substr(md5(uniqid(mt_rand(), true)), 0, 5); // Generate a random code (you can customize this)
        $this->session->set_userdata('captcha_code', $captcha_code);

        $data['captcha']['image'] = $this->create_captcha_image($captcha_code);

        return $data['captcha'];
    }

    private function create_captcha_image($captcha_code) {
        $img_width = 150;
        $img_height = 30;
		$font_size = 18;
        $image = imagecreatetruecolor($img_width, $img_height);
        $text_color = imagecolorallocate($image, 255, 255, 255);
        imagestring($image, 5, 10, 8, $captcha_code, $text_color);

        ob_start();
        imagepng($image);
        $image_data = ob_get_clean();

        imagedestroy($image);

        $base64_image = 'data:image/png;base64,' . base64_encode($image_data);

        return $base64_image;
    }

} // end class


?>