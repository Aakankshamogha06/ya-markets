<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Certificate extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Certificate_model', 'Certificate_model');
        $this->load->helper('url');
    }

    public function add_certificate()
    {
        $data['view'] = 'admin/certificate/add';
        $this->load->view('admin/layout', $data);
    }
    public function certificate_submit_data()
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
            $data = $this->input->post();
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp|pdf';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('certificate'))
            {
                $uploadData = $this->upload->data();
                $certificate = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->Certificate_model->certificate_submit_data($data,$image,$certificate) == true) 
            {
                redirect("admin/certificate/certificate_view");
            } ?><?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function certificate_view()   
    {	
        $data['certificate_view'] = $this->Certificate_model->certificate_view();
        $data['view'] ='admin/certificate/view';
        $this->load->view('admin/layout',$data);
    }
    public function certificate_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Certificate_model->certificate_delete($id) == true) 
        {
            redirect("admin/certificate/certificate_view");
        }
    }
    public function certificate_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['certificate_view'] = $this->Certificate_model->certificate_edit($id);
            $data['view'] ='admin/certificate/edit';
            $this->load->view('admin/layout',$data);
    }

    public function certificate_update_data()
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
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp|pdf';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('certificate'))
            {
                $uploadData = $this->upload->data();
                $certificate = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->Certificate_model->certificate_update_data($data,$certificate,$image) == true) 
            {
                redirect("admin/certificate/certificate_view");
            } ?><?php
        } 
        else 
        {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
}
?>