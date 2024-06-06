<?php 

class Video_Category_Model extends CI_Model{
    public function video_category_submit_data($data)
    {
        $data = ['category'=>$data['category'],];
        if ($this->db->insert('video_categorys', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }
    public function video_category_view()
    {
    $result = $this->db->query("SELECT * FROM `video_categorys`");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function video_category_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('video_categorys');
    }

    public function video_category_update_data($data)
    {
        $newdata =  ['category'=>$data['category'],];
        $this->db->where('id', $data['id']);
        if ($this->db->update('video_categorys', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function video_category_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `video_categorys` where id=$id");
        if ($result->num_rows() > 0) {
                return $result->result();
            } 
            else {
                return 0;
            }
        }
    }
?>