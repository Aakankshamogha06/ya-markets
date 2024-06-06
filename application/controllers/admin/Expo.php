<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Expo extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Expo_Model', 'Expo_Model');
        $this->load->helper('url');
    }

    public function add_expo()
    {
        $data['view'] = 'admin/expo/add_expo';
        $this->load->view('admin/layout', $data);
    }
    public function expo_submit_data()
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
            if ($this->Expo_Model->expo_submit_data($data,$image) == true) {
                redirect("admin/expo/expo_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function expo_view()   
    {	
        $data['expo_view'] = $this->Expo_Model->expo_view();
        $data['view'] ='admin/expo/view_expo';
        $this->load->view('admin/layout',$data);
    }

    public function expo_detail($uid)   
    {   
        $uid = $this->uri->segment(2);
        $data['expo_detail'] = $this->Expo_Model->expo_detail($uid);
        $data['view'] ='admin/expo/view_expo';
        $this->load->view('admin/layout',$data);
    }

    public function expo_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Expo_Model->expo_delete($id) == true) 
        {
            redirect("admin/expo/expo_view");
        }
    }
    public function expo_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['expo_view'] = $this->Expo_Model->expo_edit($id);
            $data['view'] ='admin/expo/edit_expo';
            $this->load->view('admin/layout',$data);
    }

    public function expo_update_data()
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
            if ($this->Expo_Model->expo_update_data($data,$image) == true) {
                redirect("admin/expo/expo_view");
            }?>
            <?php
        }
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
   
    public function  expo_gallery()
    {
        $expo_id = $this->uri->segment(4);
         $data['expo_gallery_view'] = $this->Expo_Model->expo_gallery_view($expo_id);
        $data['view'] = 'admin/expo/expo_gallery';
        $this->load->view('admin/layout', $data);
    }
    
    public function expo_gallery_submit_data()
    {
        $data = [];
        if ($this->input->post()){
           
            $expo_id = $_POST['expo_id'];
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
                        $uploadData[$i]['expo_id'] = $expo_id; 
                        
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
            if ($this->Expo_Model->gallery_semi_imgdata_submit($uploadData) == true) {
                redirect("admin/expo/expo_gallery/$expo_id");
    }

    }
}


public function expo_gallery_delete($id) 
    {
        $id = $this->uri->segment(4);
        $expo_id=$this->uri->segment(5);
        if ($this->Expo_Model->expo_gallery_delete($id) == true) 
        {
            redirect("admin/expo/expo_gallery/$expo_id");
        }
    }

}
?>