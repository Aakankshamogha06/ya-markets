<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    require(APPPATH.'/libraries/REST_Controller.php');
    use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
        $this->load->library('Authorization_Token');
		$this->load->model('admin/User_model', 'User_model');
		$this->load->library('email');
	}

	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	
	public function register_post() {
		$this->form_validation->set_rules('firstname', 'Username', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
		if ($this->form_validation->run() === FALSE) {
			
			// validation not ok, send validation errors to the view
            $this->response(['Validation rules violated'], REST_Controller::HTTP_OK);

		} else {

			$email= $this->input->post('email');
			// set variables from the form
			$data = array(

				'username' => $this->input->post('firstname') . ' ' . $this->input->post('lastname'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'email' => $this->input->post('email'),
				'mobile_no' => $this->input->post('mobile_no'),
				'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
				'is_admin' =>2,
				'created_at' => date('Y-m-d : h:m:s'),
				'updated_at' => date('Y-m-d : h:m:s'),
				
			);
			$result = $this->User_model->add_user($data);
			if ($result) {
				// user creation ok
                $token_data['uid'] = $result; 
                $token_data['email'] = $email;
                $tokenData = $this->authorization_token->generateToken($token_data);
                $final = array();
                $final['access_token'] = $tokenData;
                $final['status'] = true;
                $final['uid'] = $result;
                $final['message'] = 'Thank you for registering your new account!';

                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
                $this->response(['There was a problem creating your new account. Please try again.'], REST_Controller::HTTP_OK);
			}
			
		}
		
	}
		
	/**
	 
	
	
	* login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login_post() {
		
		// set validation rules
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
            $this->response(['Validation rules violated'], REST_Controller::HTTP_OK);

		} else {
			
			// set variables from the form
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->User_model->resolve_user_login($email, $password)) {
				
				$user_id = $this->User_model->get_user_id_from_username($email);
				$user    = $this->User_model->get_user($user_id);
				
				// set session user datas
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['email']     = (string)$user->email;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				
				// user login ok
                $token_data['uid'] = $user_id;
                $token_data['username'] = $user->username; 
				$token_data['email'] = $user->email;
				$token_data['mobile_no'] = $user->mobile_no
				
				;
                $tokenData = $this->authorization_token->generateToken($token_data);
                $final = array();
                $final['access_token'] = $tokenData;
                $final['status'] = true;
                $final['message'] = 'Login success!';
                $final['note'] = 'You are now logged in.';

                $this->response($final, REST_Controller::HTTP_OK); 
				
			} else {
				
				// login failed
                $this->response(['Wrong username or password.'], REST_Controller::HTTP_OK);
				
			}
			
		}
		
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout_post() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
            $this->response(['Logout success!'], REST_Controller::HTTP_OK);
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			// redirect('/');
            $this->response(['There was a problem. Please try again.'], REST_Controller::HTTP_OK);	
		}
		
	}

	public function update_profile_post()
    {
        $this->form_validation->set_rules('user_id', 'User ID', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|numeric');
 
        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $user_id = $this->input->post('user_id');
            $email = $this->input->post('email');
            $phone_number = $this->input->post('phone_number');
 
            $user = $this->User_model->get_user($user_id);
 
            if ($user) {
                $updated_data = array();
 
                if ($email !== $user->email) {
                    $updated_data['email'] = $email;
                }
 
                if ($phone_number !== $user->phone_number) {
                    $updated_data['phone_number'] = $phone_number;
                }
 
                if (!empty($updated_data)) {
                    $result = $this->User_model->update_user($user_id, $updated_data);
 
                    if ($result) {
                        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $user_id) {
                            $_SESSION['email'] = $email;
                            $_SESSION['phone_number'] = $phone_number;
                        }
                        $this->response(['User profile updated successfully!'], REST_Controller::HTTP_OK);
                    } else {
                        $this->response(['There was a problem. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                    }
                } else {
                    $this->response(['Nothing to update. Please change your email or phone number.'], REST_Controller::HTTP_OK);
                }
            } else {
                $this->response(['User not found.'], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
	
	
}