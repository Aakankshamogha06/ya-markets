<?php
defined('BASEPATH') or exit('No direct script access allowed');
class OnetoOne_Session extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/OnetoOne_Session_model', 'OnetoOne_Session_model');
        $this->load->helper('url');
    }

    public function add_session()
    {
        $data['view'] = 'admin/session/add';
        $this->load->view('admin/layout', $data);
    }

    public function session_submit_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('country_img'))
            {
                $uploadData = $this->upload->data();
                $country_img = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            $data = $this->input->post();
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('detailed_img'))
            {
                $uploadData = $this->upload->data();
                $detailed_img = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->OnetoOne_Session_model->session_submit_data($data,$country_img,$detailed_img) == true) {
                redirect("admin/OnetoOne_Session/session_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function session_view()   
    {	
        $data['session_view'] = $this->OnetoOne_Session_model->session_view();
        $data['view'] ='admin/session/view';
        $this->load->view('admin/layout',$data);
    }

    public function session_country_view()   
    {	
        $data['session_country_view'] = $this->OnetoOne_Session_model->session_country_view();
        $data['view'] ='admin/session/view';
        $this->load->view('admin/layout',$data);
    }

    public function session_data_view()
    {
        // $id=$this->uri->segment(4);
        $data['session_data_view'] = $this->OnetoOne_Session_model->session_data_view();
        $data['view'] ='admin/session/user_data_view';
        $this->load->view('admin/layout',$data);
    }

    public function session_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->OnetoOne_Session_model->session_delete($id) == true) 
        {
            redirect("admin/OnetoOne_Session/session_view");
        }
    }
    
    public function session_edit($id)
    {
        $id=$this->uri->segment(4);
        $data['session_view'] = $this->OnetoOne_Session_model->session_edit($id);
        $data['view'] ='admin/session/edit';
        $this->load->view('admin/layout',$data);
    }

    public function session_update_data()
    {
       
        $data = [];
        if ($this->input->post()) 
        {

            $data = $this->input->post();
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('country_img'))
            {
                $uploadData = $this->upload->data();
                $country_img = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            $data = $this->input->post();
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('detailed_img'))
            {
                $uploadData = $this->upload->data();
                $detailed_img = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->OnetoOne_Session_model->session_update_data($data,$country_img,$detailed_img) == true) 
            {
                redirect("admin/OnetoOne_Session/session_view");
            } ?><?php
        } 
        else 
        {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
    
}
?>