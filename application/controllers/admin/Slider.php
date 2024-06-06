<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Slider_model', 'Slider_model');
        $this->load->helper('url');
    }

    public function add_slider()
    {
        $data['view'] = 'admin/slider/add_slider';
        $this->load->view('admin/layout', $data);
    }
    public function slider_submit_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            if ($this->Slider_model->slider_submit_data($data) == true) {
                redirect("admin/slider/slider_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function slider_view()   
    {	
        $data['slider_view'] = $this->Slider_model->slider_view();
        $data['view'] ='admin/slider/view_slider';
        $this->load->view('admin/layout',$data);
    }
    
    public function slider_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Slider_model->slider_delete($id) == true) 
        {
            redirect("admin/slider/slider_view");
        }
    }

    public function slider_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['slider_view'] = $this->Slider_model->slider_edit($id);
            $data['view'] ='admin/slider/edit_slider';
            $this->load->view('admin/layout',$data);
    }

    public function slider_update_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            if ($this->Slider_model->slider_update_data($data) == true) {
                redirect("admin/slider/slider_view");
            }?>
            <?php
        }
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
}
?>