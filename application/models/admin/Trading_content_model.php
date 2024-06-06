<?php

class Trading_content_model extends CI_Model
{
    

    public function trading_content_view()
    {
        $result = $this->db->query("SELECT * FROM `trading_content_data`;");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function contact_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('trading_content_data');
    }

    public function trading_content_submit_data($data)
    {
        var_dump($_POST);
        $ip=$_SERVER['REMOTE_ADDR'];
        $data = [
            'trading_content_name'=>$_POST['trading_content_name'],
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'mobile_no'=>$_POST['mobile_no'],
            'message'=>$_POST['message'],
            'ip_address'=>$ip,

        ];
        if ($this->db->insert('trading_content_data', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }
    public function trading_content_name()
    {
        $result = $this->db->query("SELECT trading_content_name FROM `trading_content_data` GROUP BY trading_content_name;");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function trading_content_lead_dtl()
{
    $uid = $this->uri->segment(4);
    $result = $this->db->query("SELECT * FROM `trading_content_data` WHERE REPLACE(LOWER(trading_content_name), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}
public function trading_content_lead_dtl_other()
{
    $uid = $this->uri->segment(4);
    $result = $this->db->query("SELECT * FROM $uid ");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); 
    } 
    else {
        return 0;
    }
}

}
?>