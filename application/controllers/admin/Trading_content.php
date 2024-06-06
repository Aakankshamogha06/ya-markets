<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Trading_content extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Trading_content', 'Trading_content');
        $this->load->helper('url');
    }


    public function trading_content_view()   
    {	
        $data['trading_content_view'] = $this->Trading_content->trading_content_name();
        $data['view'] ='admin/trading_content/view';
        $this->load->view('admin/layout',$data);
    }
    

    public function trading_content_lead_dtl()   
    {	
        $data['trading_content_lead_view'] = $this->Trading_content->trading_content_lead_dtl();
        $data['view'] ='admin/trading_content/lead_dtl';
        $this->load->view('admin/layout',$data);
    }
  

    public function trading_content_lead_dtl_other()   
    {	
        $data['trading_content_lead_view'] = $this->Trading_content->trading_content_lead_dtl_other();
        $data['view'] ='admin/trading_content/lead_dtl_other';
        $this->load->view('admin/layout',$data);
    }
}
?>