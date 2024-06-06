<?php 

class NFP_model extends CI_Model
{
    public function nfp_submit_data($data,$image)
    {
        $data = 
        [
            'name'=>$data['name'],
            'prize_won'=>$data['prize_won'],
            'month'=>$data['month'],
            'year'=>$data['year'],
            'image'=>$image,
        ];
        if ($this->db->insert('nfp', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function nfp_view()
    {
    $result = $this->db->query("SELECT * FROM `nfp` ORDER BY STR_TO_DATE(CONCAT(`nfp`.`month`, ' ', `nfp`.`year`), '%M %Y') DESC;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function nfp_view_lt()
    {
    $result = $this->db->query("SELECT * FROM `nfp` ORDER BY STR_TO_DATE(CONCAT(`nfp`.`month`, ' ', `nfp`.`year`), '%M %Y') DESC  limit 3");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }
    public function nfp_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('nfp');
    }

    public function nfp_update_data($data)
    {
        $newdata =  [
            'name'=>$data['name'],
            'prize_won'=>$data['prize_won'],
            'month'=>$data['month'],
            'year'=>$data['year'],
            'image'=>$image,
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('nfp', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function nfp_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `nfp` where id=$id");
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