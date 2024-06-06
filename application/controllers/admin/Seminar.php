<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Seminar extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Seminar_model', 'Seminar_model');
        $this->load->helper('url');
    }

    public function add_seminar()
    {
        $data['view'] = 'admin/seminar/add';
        $this->load->view('admin/layout', $data);
    }
    public function seminar_submit_data()
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
            if($this->upload->do_upload('cover_image'))
            {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
            }
            if ($this->Seminar_model->seminar_submit_data($data,$image) == true) {
                redirect("admin/seminar/seminar_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function seminar_view()   
    {	
        $data['seminar_view'] = $this->Seminar_model->seminar_view();
        $data['view'] ='admin/seminar/view';
        $this->load->view('admin/layout',$data);
    }

    public function seminar_detail($uid)   
    {   
        $uid = $this->uri->segment(2);
        $data['seminar_detail'] = $this->Seminar_model->seminar_detail($uid);
        $data['view'] ='admin/seminar/view';
        $this->load->view('admin/layout',$data);
    }

    public function seminar_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Seminar_model->seminar_delete($id) == true) 
        {
            redirect("admin/seminar/seminar_view");
        }
    }
    public function seminar_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['seminar_view'] = $this->Seminar_model->seminar_edit($id);
            $data['view'] ='admin/seminar/edit';
            $this->load->view('admin/layout',$data);
    }

    public function seminar_update_data()
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
            if ($this->Seminar_model->seminar_update_data($data,$image) == true) {
                redirect("admin/seminar/seminar_view");
            }?>
            <?php
        }
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    
    public function seminar_gallery()
    {
        $seminar_id = $this->uri->segment(4);
         $data['seminar_gallery_view'] = $this->Seminar_model->seminar_gallery_view($seminar_id);
        $data['view'] = 'admin/seminar/seminar_gallery';
        $this->load->view('admin/layout', $data);
    }
    
    public function seminar_gallery_submit_data()
    {
        $data = [];
        if ($this->input->post()){
           
            $seminar_id = $_POST['seminar_id'];
            $filesCount = count($_FILES['gallery_image']['name']);
            if(!empty($_FILES['gallery_image']['name']) && count(array_filter($_FILES['gallery_image']['name'])) > 0){ 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['gallery_image']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['gallery_image']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['gallery_image']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['gallery_image']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['gallery_image']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = './gallery_semi/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|mp4'; 
                    //$config['max_size']    = '100'; 
                    //$config['max_width'] = '1024'; 
                    //$config['max_height'] = '768'; 
                     
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                     
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['img'] = $fileData['file_name']; 
                        $uploadData[$i]['seminar_id'] = $seminar_id; 
                        
                    }else
                    {
                        $error = array('error' => $this->upload->display_errors());
                        echo( $error);
                        die;
                    }
                }
                 
            }else{
                echo('gggg');
                die;
            }
            if ($this->Seminar_model->gallery_semi_imgdata_submit($uploadData) == true) {
                redirect("admin/seminar/seminar_gallery/$seminar_id");
    }

    }
}


public function seminar_gallery_delete($id) 
    {
        $id = $this->uri->segment(4);
        $seminar_id=$this->uri->segment(5);
        if ($this->Seminar_model->seminar_gallery_delete($id) == true) 
        {
            redirect("admin/seminar/seminar_gallery/$seminar_id");
        }
    }
}
?>