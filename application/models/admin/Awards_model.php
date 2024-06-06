<?php 

class Awards_model extends CI_Model
{
    public function awards_submit_data($data,$award_image)
    {
        $data = 
        [
            'award_name'=>$data['award_name'],
            'award_image'=>$award_image,
            'award_desc'=>$data['award_desc'],
            'award_year'=>$data['award_year'],
        ];
       
        if ($this->db->insert('awards', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function awards_view()
    {
    $result = $this->db->query("SELECT * FROM `awards` ORDER BY `awards`.`award_year` DESC");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function awards_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('awards');
    }

    public function awards_update_data($data,$award_image)
    {
        $newdata =  [
            'award_name'=>$data['award_name'],
            'award_image'=>$award_image,
            'award_desc'=>$data['award_desc'],
            'award_year'=>$data['award_year'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('awards', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function awards_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `awards` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }

}
?>