<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Video_Category extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Video_Category_model', 'Video_Category_Model');
        $this->load->helper('url');
    }

    public function add_video_category()
    {
        
        $data['view'] = 'admin/video_category/add_VideoCategory';

        $this->load->view('admin/layout', $data);
    }
    public function video_category_submit_data()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Video_Category_Model->video_category_submit_data($data) == true) {
                redirect("admin/video_Category/video_category_view");
            } ?>
        <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">
                                        &times;
                                    </a>
                                    <strong>Error!</strong>
                                    Sorry Please Try Again.
                                </div>';
        }
    }

    public function video_category_view()   
    {	
        $data['video_category_view'] = $this->Video_Category_Model->video_category_view();
        $data['view'] ='admin/video_category/view_VideoCategory';
        $this->load->view('admin/layout',$data);
    }
    public function video_category_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Video_Category_Model->video_category_delete($id) == true) 
        {
            redirect("admin/video_Category/video_category_view");
        }
    }
    public function video_category_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['video_category_view'] = $this->Video_Category_Model->video_category_edit($id);
            $data['view'] ='admin/video_category/edit_VideoCategory';
            $this->load->view('admin/layout',$data);
    }

    public function video_category_update_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            if ($this->Video_Category_Model->video_category_update_data($data) == true) 
            {
                redirect("admin/video_Category/video_category_view");
            } ?><?php
        } 
        else 
        {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
}
?>



