<?php 

class Gallery_Model extends CI_Model
{
    public function gallery_submit_data($data,$image)
    {
        $data = 
        [
            'image'=>$image,
            'image_name'=>$data['image_name'],
        ];
        print_r($data);
        if ($this->db->insert('gallery', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function gallery_view()
    {
    $result = $this->db->query("SELECT * FROM `gallery`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function gallery_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('gallery');
    }

    public function gallery_update_data($data,$image)
    {
        $newdata =  [
            'image'=>$image,
            'image_name'=>$data['image_name'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('gallery', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function gallery_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `gallery` where id=$id");
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