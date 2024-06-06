<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Webinar extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Webinar_model', 'webinar_model');
        $this->load->helper('url');
    }

    public function add_webinar()
    {
        $data['view'] = 'admin/webinar/add';
        $this->load->view('admin/layout', $data);
    }
    public function webinar_submit_data()
    {
        
        $data = [];
              $data = $this->input->post();
        if ($this->input->post()) 
        {
                 
            if ($this->webinar_model->webinar_submit_data($data) == true) {
                redirect("admin/webinar/webinar_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function webinar_view()   
    {	
        $data['webinar_view'] = $this->webinar_model->webinar_view();
        $data['view'] ='admin/webinar/view';
        $this->load->view('admin/layout',$data);
    }

   

    public function webinar_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->webinar_model->webinar_delete($id) == true) 
        {
            redirect("admin/webinar/webinar_view");
        }
    }
    public function webinar_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['webinar_view'] = $this->webinar_model->webinar_edit($id);
            $data['view'] ='admin/webinar/edit';
            $this->load->view('admin/layout',$data);
    }

    public function webinar_update_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('image'))
            {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->webinar_model->webinar_update_data($data,$image) == true) {
                redirect("admin/webinar/webinar_view");
            }?>
            <?php
        }
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    
   public function user_webinar_dtl($id)
    {
            $id=$this->uri->segment(4);
            $data['webinar_view'] = $this->webinar_model->user_webinar_dtl($id);
            $data['view'] ='admin/webinar/user_webinar_dtl';
            $this->load->view('admin/layout',$data);
    }

}
?>