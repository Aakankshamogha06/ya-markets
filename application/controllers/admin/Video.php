<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Video extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Video_model', 'Video_model');
        $this->load->helper('url');
    }

    public function add_video()
    {
        
        $data['view'] = 'admin/video/add_video';

        $this->load->view('admin/layout', $data);
    }
    public function video_submit_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post(); 
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'png|jpg|jpeg|webp';
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
            if ($this->Video_model->video_submit_data($data,$image) == true) {
                redirect("admin/video/video_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function video_view()   
    {	
        $data['video_view'] = $this->Video_model->video_view();
        $data['view'] ='admin/video/view_video';
        $this->load->view('admin/layout',$data);
    }
    
    public function recorded()   
    {	
        $data['recorded'] = $this->Video_model->recorded();
        $data['view'] ='admin/video/view_video';
        $this->load->view('admin/layout',$data);
    }

    public function course_dtl_data()   
    {	
        $data['course_dtl_data'] = $this->Video_model->course_dtl_data();
        $data['view'] ='admin/video/view_video';
        $this->load->view('admin/layout',$data);
    }

    // public function video_id($uid)
    // {
    //     $uid = $this->uri->segment(4);
    //     $data['video_id'] = $this->Video_model->video_id();
    //     $data['view'] ='admin/video/view_video';
    //     $this->load->view('admin/layout',$data);
    // }

    public function video_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Video_model->video_delete($id) == true) 
        {
            redirect("admin/video/video_view");
        }
    }
    public function video_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['video_view'] = $this->Video_model->video_edit($id);
            $data['view'] ='admin/video/edit_video';
            $this->load->view('admin/layout',$data);
    }

    public function video_update_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post(); 
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'png|jpg|jpeg|webp';
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
            if ($this->Video_model->video_update_data($data,$image) == true) {
                redirect("admin/video/video_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
}
?>



