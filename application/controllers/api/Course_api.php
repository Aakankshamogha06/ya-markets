<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Course_api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/User_model', 'User_model');
        $this->load->model('admin/Webinar_model', 'Webinar_model');
        $this->load->model('admin/Slider_model', 'Slider_model');
    }

    public function app_slider_data_get()
    {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                $data = $this->Slider_model->app_slider_view();
                $this->response($data, REST_Controller::HTTP_OK);
            } else {
                $this->response($decodedToken);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_OK);
        }
    }
    
    public function booked_data_get()
    {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                $data = $this->Webinar_model->user_webinar_dtl($id,$uid);
                $this->response($data, REST_Controller::HTTP_OK);
            } else {
                $this->response($decodedToken);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_OK);
        }
    }

    public function book_webinar_post()
    {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                $data = array(
                    'webi_id'=>$this->input->post('webi_id'),
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'mobile'=>$this->input->post('mobile'),
                    'country'=>$this->input->post('country'),
                );
                // You will need to replace 'tablem' with the actual table name in your database
                $inserted = $this->db->insert('user_webi_dtl', $data);
                if ($inserted) {
                    $this->response(['message' => 'Data inserted successfully'], REST_Controller::HTTP_CREATED);
                } else {
                    $this->response(['message' => 'Data insertion failed'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }
            } else {
                 $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }

    public function webinar_get()
    {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                // You will need to replace 'tablem' with the actual table name in your database
                $data = $this->Webinar_model->webinar_view();
                $this->response($data, REST_Controller::HTTP_OK);
            } else {
                 $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }

    public function user_data_get()
    {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                $uid = $this->uri->segment(4);
                $data = $this->User_model->get_users_api($uid);
                $this->response($data, REST_Controller::HTTP_OK);
            } else {
                 $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
           $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }

    public function course_data_get() {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                // Your new logic for fetching course data
                // Replace this with actual code to fetch course data from your database or other source
                $courseData = [
                    'course_id' => 1,
                    'course_name' => 'Sample Course',
                    'course_description' => 'This is a sample course',
                ];

                $this->response($courseData, REST_Controller::HTTP_OK);
            } else {
                $this->response($decodedToken);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_OK);
        }
    }

    public function frm_data_get() {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                // Your new logic for fetching course data
                // Replace this with actual code to fetch course data from your database or other source
                $courseData = [
                    'frm_id' => 1,
                    'frm_name' => 'Sample Course',
                    'course_description' => 'This is a sample course',
                ];

                $this->response($courseData, REST_Controller::HTTP_OK);
            } else {
                $this->response($decodedToken);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_OK);
        }
    }

    public function new_course_data_get() {
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status']) {
                // Your new logic for fetching course data
                // Replace this with actual code to fetch course data from your database or other source
                $courseData = [
                    'course_id' => 2,
                    'course_name' => 'New Course',
                    'course_description' => 'This is a new course',
                ];

                $this->response($courseData, REST_Controller::HTTP_OK);
            } else {
                $this->response($decodedToken);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_OK);
        }
    }
}
