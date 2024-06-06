<?php 
class Career_Detail_model extends CI_Model
{
    public function career_details_submit_data($data)
    {
        $data = 
        [
            'position'=>$data['position'],
            'description'=>$data['description'],
        ];
        if ($this->db->insert('hiring', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function job_application_data($data,$resume)
    {
        $data = 
        [
            'name'=>$data['name'],
            'email'=>$data['email'],
            'mobile_no'=>$data['mobile_no'],
            'profile'=>$data['profile'],
            'resume'=>$resume,
            'message'=>$data['message'],
        ];
        if ($this->db->insert('job_application', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function career_details_view()
    {
    $result = $this->db->query("SELECT * FROM `hiring`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function job_application()
    {
    $result = $this->db->query("SELECT * FROM `job_application`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function career_details_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('hiring');
    }

    public function job_application_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('job_application');
    }

    public function career_details_update_data($data)
    {
        $newdata =  [
            'position'=>$data['position'],
            'description'=>$data['description'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('hiring', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function career_details_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `hiring` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }

    public function career_details_detail_data_nm()
    {
        $uid = $this->uri->segment(2);
        $result = $this->db->query("SELECT * FROM `hiring` WHERE REPLACE(LOWER(job_title), ' ', '-')='$uid'");

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