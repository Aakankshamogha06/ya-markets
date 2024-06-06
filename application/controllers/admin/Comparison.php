<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Comparison extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Comparison_model', 'Comparison_model');
        $this->load->helper('url');
    }

    public function add_comparison()
    {
        $data['view'] = 'admin/comparison/add';
        $this->load->view('admin/layout', $data);
    }

    public function comparison_submit_data()
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
            if ($this->Comparison_model->comparison_submit_data($data,$image
            ) == true) {
                redirect("admin/comparison/comparison_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function comparison_view()   
    {	
        $data['comparison_view'] = $this->Comparison_model->comparison_view();
        $data['view'] ='admin/comparison/view';
        $this->load->view('admin/layout',$data);
    }

    public function comparison_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Comparison_model->comparison_delete($id) == true) 
        {
            redirect("admin/comparison/comparison_view");
        }
    }
    
    public function comparison_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['comparison_view'] = $this->Comparison_model->comparison_edit($id);
            $data['view'] ='admin/comparison/edit';
            $this->load->view('admin/layout',$data);
    }

    public function comparison_update_data()
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
                // echo( $error );
                // die();
            }
            if ($this->Comparison_model->comparison_update_data($data,$image) == true) 
            {
                redirect("admin/comparison/comparison_view");
            } ?><?php
        } 
        else 
        {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
}
?>