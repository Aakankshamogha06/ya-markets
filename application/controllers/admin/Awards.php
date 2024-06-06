<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Awards extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Awards_model', 'Awards_model');
        $this->load->helper('url');
    }

    public function add_awards()
    {
        $data['view'] = 'admin/awards/add_award';
        $this->load->view('admin/layout', $data);
    }

    public function awards_submit_data()
    { 
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post(); 
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'png|jpg|jpeg|webp';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('award_image'))
            {
                $uploadData = $this->upload->data();
                $award_image = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->Awards_model->awards_submit_data($data,$award_image) == true) {
                redirect("admin/awards/awards_view");
            } ?>
<?php
        } 
        else 
        {
            $data['message'] = '<div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">
                                        &times;
                                    </a>
                                    <strong>Error!</strong>
                                    Sorry Please Try Again.
                                </div>';
        }
    }

    public function awards_view()   
    {	
        $data['awards_view'] = $this->Awards_model->awards_view();
        $data['view'] ='admin/awards/view_award';
        $this->load->view('admin/layout',$data);
    }

    public function awards_detail($uid)   
    {   
        $uid = $this->uri->segment(2);
        $data['awards_detail'] = $this->Awards_model->awards_detail($uid);
        $data['view'] ='admin/awards/view_award';
        $this->load->view('admin/layout',$data);
    }

    public function awards_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Awards_model->awards_delete($id) == true) 
        {
            redirect("admin/awards/awards_view");
        }
    }
    public function awards_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['awards_view'] = $this->Awards_model->awards_edit($id);
            $data['view'] ='admin/awards/edit_award';
            $this->load->view('admin/layout',$data);
    }

    public function awards_update_data()
    {


        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post(); 
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'png|jpg|jpeg|webp';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('award_image'))
            {
                $uploadData = $this->upload->data();
                $award_image = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->Awards_model->awards_update_data($data,$award_image) == true) {
                redirect("admin/awards/awards_view");
            } ?>
<?php
        } 
        else 
        {
            $data['message'] = '<div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">
                                        &times;
                                    </a>
                                    <strong>Error!</strong>
                                    Sorry Please Try Again.
                                </div>';
        }
    }
}
?>