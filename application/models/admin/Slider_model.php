<?php 

class Slider_model extends CI_Model
{
    public function slider_submit_data($data)
    {
        $data = 
        [
            'content1'=>$data['content1'],
            'content'=>$data['content'],
            'sub_content'=>$data['sub_content'],
        ];
        if ($this->db->insert('slider_images', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function slider_view()
    {
    $result = $this->db->query("SELECT * FROM `slider_images`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function app_slider_view()
    {
    $result = $this->db->query("SELECT * FROM `app_slider`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function slider_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('slider_images');
    }

    public function slider_update_data($data)
    {
        $newdata =  [
            'content1'=>$data['content1'],
            'content'=>$data['content'],
            'sub_content'=>$data['sub_content'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('slider_images', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function slider_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `slider_images` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }
    
    public function detail_fetch()
    {
        $detail_data = $this->db->query("SELECT * FROM `category`");
        $fetch = $detail_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $detail_data->result_array();
        } else {
            return false;
        }
    }
}
?>