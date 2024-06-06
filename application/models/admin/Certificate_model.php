<?php 

class Certificate_model extends CI_Model
{
    public function certificate_submit_data($data,$image,$certificate)
    {
        $data = 
        [
            'image'=>$image,
            'certificate'=>$certificate,
        ];
        if ($this->db->insert('certificate', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function certificate_view()
    {
    $result = $this->db->query("SELECT * FROM `certificate`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function certificate_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('certificate');
    }

    public function certificate_update_data($data,$image,$certificate)
    {
        $newdata =  [
            'image'=>$image,
            'certificate'=>$certificate,
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('certificate', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function certificate_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `certificate` where id=$id");
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
}
?>