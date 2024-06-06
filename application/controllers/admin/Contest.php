<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Contest extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Contest_model', 'Contest_model');
        $this->load->helper('url');
    }

   


    public function contest_view()   
    {	
        $data['contest_view'] = $this->Contest_model->contest_name();
        $data['view'] ='admin/contest/view_contest';
        $this->load->view('admin/layout',$data);
    }
    

    public function contest_lead_dtl()   
    {	
        $data['contest_lead_view'] = $this->Contest_model->contest_lead_dtl();
        $data['view'] ='admin/contest/contest_lead_dtl';
        $this->load->view('admin/layout',$data);
    }
  

    public function contest_lead_dtl_other()   
    {	
        $data['contest_lead_view'] = $this->Contest_model->contest_lead_dtl_other();
        $data['view'] ='admin/contest/contest_lead_dtl_other';
        $this->load->view('admin/layout',$data);
    }
}
?>