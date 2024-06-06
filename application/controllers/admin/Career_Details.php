<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Career_Details extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Career_Detail_model', 'Career_Detail_model');
        $this->load->helper('url');
    }

    public function add_career_details()
    {
        $data['view'] = 'admin/career_details/add_careerdtl';
        $this->load->view('admin/layout', $data);
    }
    public function career_details_submit_data()
    { 
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Career_Detail_model->career_details_submit_data($data) == true) {
                redirect("admin/Career_Details/career_details_view");
            } ?>
<?php
        } else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">    
            &times;</a><strong>Error!</strong>Sorry Please Try Again.
            </div>';
        }
    }

    public function job_application_data()
    { 
        $data = [];
        if ($this->input->post()) 
        {
          
            $data = $this->input->post(); 
            $config['upload_path'] = './images/resume/';
            $config['allowed_types'] = 'pdf|docx|png|jpg|jpeg|doc';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('resume'))
            {
                $uploadData = $this->upload->data();
                $resume = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                print_r($error );
                die;
            }
            if ($this->Career_Detail_model->job_application_data($data,$resume) == true) {
                redirect(base_url());
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

    public function career_details_view()   
    {	
        $data['career_details_view'] = $this->Career_Detail_model->career_details_view();
        $data['view'] ='admin/career_details/view_careerdtl';
        $this->load->view('admin/layout',$data);
    }

    public function job_application()   
    {	
        $data['job_application'] = $this->Career_Detail_model->job_application();
        $data['view'] ='admin/career_details/view_jobdtl';
        $this->load->view('admin/layout',$data);
    }

    public function career_details_detail($uid)   
    {   
        $uid = $this->uri->segment(2);
        $data['career_details_detail'] = $this->Career_Detail_model->career_details_detail($uid);
        $data['view'] ='admin/career_details/view_careerdtl';
        $this->load->view('admin/layout',$data);
    }

    public function career_details_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Career_Detail_model->career_details_delete($id) == true) 
        {
            redirect("admin/Career_Details/career_details_view");
        }
    }
    public function career_details_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['career_details_view'] = $this->Career_Detail_model->career_details_edit($id);
            $data['view'] ='admin/career_details/edit_careerdtl';
            $this->load->view('admin/layout',$data);
    }

    public function career_details_update_data()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Career_Detail_model->career_details_update_data($data) == true) {
                redirect("admin/Career_Details/career_details_view");
            } ?>
<?php
        } else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">    
            &times;</a><strong>Error!</strong>Sorry Please Try Again.
            </div>';
        }
    }
}
?>