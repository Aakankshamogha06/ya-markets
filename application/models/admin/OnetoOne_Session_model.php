<?php 

class OnetoOne_Session_model extends CI_Model
{
    public function session_submit_data($data,$country_img,$detailed_img)
    {
        $data = 
        [
            'country_img'=>$country_img,
            'detailed_img'=>$detailed_img,
            'session_name'=>$data['session_name'],
            'speaker'=>$data['speaker'],
            'session_time'=>$data['session_time'],
            'session_date'=>$data['session_date'],
            'session_location'=>$data['session_location'],
            'session_country'=>$data['session_country']
        ];
        if ($this->db->insert('onetoone_session', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function session_data_view()
    {
    $result = $this->db->query("SELECT a.*,b.* from onetoone_session as a, session_data as b where a.id=b.session_id;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function session_view()
    {
    $result = $this->db->query("SELECT session_country,country_img FROM `onetoone_session` group by session_country ");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function session_view_lt()
    {
    $result = $this->db->query("SELECT * FROM `session_data`  limit 3");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }
    public function session_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('session_data');
    }

    public function session_update_data($data,$country_img,$detailed_img)
    {
        $newdata =  [
            'country_img'=>$country_img,
            'detailed_img'=>$detailed_img,
            'speaker'=>$data['speaker'],
            'session_name'=>$data['session_name'],
            'session_time'=>$data['session_time'],
            'session_date'=>$data['session_date'],
            'session_location'=>$data['session_location'],
            'session_country'=>$data['session_country']
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('session_data', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function session_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `session_data` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }
    // public function detail_fetch()
    // {
    //     $detail_data = $this->db->query("SELECT * FROM `category`");
    //     $fetch = $detail_data->num_rows();
    //     if ($fetch > 0) {
    //         return $fetch = $detail_data->result_array();
    //     } else {
    //         return false;
    //     }
    // }

    public function mail_data_view()
    {
    $result = $this->db->query("SELECT a.*,b.* FROM `onetoone_session` as a,`session_data` as b where a.id = b.session_id;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function session_country_view()
    {
    $result = $this->db->query("SELECT 'session_country' FROM `onetoone_session`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function session_data_nm($uid)
    {
        
        $result = $this->db->query("SELECT * FROM `onetoone_session` WHERE REPLACE(LOWER(session_country), ' ', '-')='$uid'");
    
        if ($result->num_rows() > 0) 
        {
            return $result->result(); // Return the fetched data
        } 
        else {
            return 0;
        }
    }

    public function session_detail_data_nm()
    {
        $uid = $this->uri->segment(2);
        $result = $this->db->query("SELECT * FROM `onetoone_session` WHERE REPLACE(LOWER(session_location), ' ', '-')='$uid'");
    
        if ($result->num_rows() > 0) 
        {
            return $result->result(); // Return the fetched data
        } 
        else {
            return 0;
        }
    }
}
?>