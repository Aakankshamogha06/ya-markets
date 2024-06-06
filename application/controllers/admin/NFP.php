<?php
defined('BASEPATH') or exit('No direct script access allowed');
class NFP extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/NFP_model', 'NFP_model');
        $this->load->helper('url');
    }

    public function add_nfp()
    {
        $data['view'] = 'admin/nfp/add';
        $this->load->view('admin/layout', $data);
    }

    public function nfp_submit_data()
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
            if ($this->NFP_model->nfp_submit_data($data,$image
            ) == true) {
                redirect("admin/NFP/nfp_view");
            } ?>
            <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }

    public function nfp_view()   
    {	
        $data['nfp_view'] = $this->NFP_model->nfp_view();
        $data['view'] ='admin/nfp/view';
        $this->load->view('admin/layout',$data);
    }

    public function nfp_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->NFP_model->nfp_delete($id) == true) 
        {
            redirect("admin/NFP/nfp_view");
        }
    }
    
    public function nfp_edit($id)
    {
            $id=$this->uri->segment(4);
            $data['nfp_view'] = $this->NFP_model->nfp_edit($id);
            $data['view'] ='admin/nfp/edit';
            $this->load->view('admin/layout',$data);
    }

    public function nfp_update_data()
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
            if ($this->NFP_model->nfp_update_data($data,$image) == true) 
            {
                redirect("admin/NFP/nfp_view");
            } ?><?php
        } 
        else 
        {
            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
        }
    }
}
?>