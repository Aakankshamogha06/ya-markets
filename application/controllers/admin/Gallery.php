<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Gallery extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Gallery_Model', 'Gallery_Model');
        $this->load->helper('url');
    }

    public function add_gallery()
    {
        $data['view'] = 'admin/gallery/add_image';
        $this->load->view('admin/layout', $data);
    }
    public function gallery_submit_data()
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
            if ($this->Gallery_Model->gallery_submit_data($data,$image) == true) {
                redirect("admin/gallery/gallery_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function gallery_view()   
    {	
        $data['gallery_view'] = $this->Gallery_Model->gallery_view();
        $data['view'] ='admin/gallery/view_image';
        $this->load->view('admin/layout',$data);
    }
    public function gallery_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Gallery_Model->gallery_delete($id) == true) 
        {
            redirect("admin/gallery/gallery_view");
        }
    }
    public function gallery_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['gallery_view'] = $this->Gallery_Model->gallery_edit($id);
            $data['view'] ='admin/gallery/edit_image';
            $this->load->view('admin/layout',$data);
    }

    public function gallery_update_data()
    {
        $data = [];
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            $config['upload_path'] = './images/';
            $config['max_size'] = 1000;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
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
            if ($this->Gallery_Model->gallery_update_data($data,$image) == true) {
                redirect("admin/gallery/gallery_view");
            }?>
            <?php
        }
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
}
?>