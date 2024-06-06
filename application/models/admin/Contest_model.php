<?php

class Contest_model extends CI_Model
{
    

    public function contest_view()
    {
        $result = $this->db->query("SELECT * FROM `contest_data`;");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function contact_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contest_data');
    }

    public function contest_submit_data($data)
    {
        
        $ip=$_SERVER['REMOTE_ADDR'];
        $data = [
            'contest_name'=>$_POST['contest_name'],
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'mobile_no'=>$_POST['mobile_no'],
            'message'=>$_POST['message'],
            'ip_address'=>$ip,

        ];
        if ($this->db->insert('contest_data', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }
    public function contest_name()
    {
        $result = $this->db->query("SELECT contest_name FROM `contest_data` GROUP BY contest_name;");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function contest_lead_dtl()
{
    $uid = $this->uri->segment(4);
    $result = $this->db->query("SELECT * FROM `contest_data` WHERE REPLACE(LOWER(contest_name), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}
public function contest_lead_dtl_other()
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