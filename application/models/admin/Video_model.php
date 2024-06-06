<?php 
class Video_model extends CI_Model
{
    public function video_submit_data($data,$image)
    {
        $data = 
        [
            'category_id'=>$data['category_id'],
            'video_link'=>$data['video_link'],
            'image'=>$image,
            'title'=>$data['title'],
        ];
        if ($this->db->insert('videos', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        } 
    }

    public function video_view()
    {
    $result = $this->db->query("SELECT a.*,(SELECT b.category FROM `video_categorys` b WHERE b.id=a.category_id)as category_name FROM `videos` a;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function video_id($uid)
    {
    $result = $this->db->query("SELECT * FROM `videos` where id=$uid ;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function video_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('videos');
    }

    public function video_update_data($data,$image)
    {
        $newdata =  [
            'category_id'=>$data['category_id'],
            'video_link'=>$data['video_link'],
            'image'=>$image,
            'title'=>$data['title'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('videos', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function video_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `videos` where id=$id");
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
    public function role_fetch()
    {
        $role_data = $this->db->query("SELECT * FROM `video_categorys`");
        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
        } else {
            return false;
        }
    }

    public function category_1()
    {
        $role_data = $this->db->query("SELECT * FROM `video_categorys` WHERE category='Promotion'");
        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
        } else {
            return false;
        }
    }

    public function recorded()
    {
        $role_data = $this->db->query("SELECT * FROM `videos` WHERE category='recorded'");
        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
        } else {
            return false;
        }
    }

    public function offline_course()
    {
        $role_data = $this->db->query("SELECT * FROM `videos` WHERE category='offline'");
        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
        } else {
            return false;
        }
    }

    public function onlineBasic($id)
    {
    $result = $this->db->query("SELECT a.*,(SELECT b.category FROM `video_categorys` b WHERE b.id=a.category_id)as category_name FROM `videos` a WHERE REPLACE(LOWER(a.category_id), ' ', '-') ='$id' and a.course_mode='promotion'");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }
    
    public function offlineBasic($id)
    {
    $result = $this->db->query("SELECT a.*,(SELECT b.category FROM `category` b WHERE b.id=a.category_id)as category_name FROM `videos` a WHERE REPLACE(LOWER(a.course_name), ' ', '-')='$id' and a.course_mode='offline'");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function recordedVideo($id)
    {
    $result = $this->db->query("SELECT a.*,(SELECT b.category FROM `category` b WHERE b.id=a.category_id)as category_name FROM `videos` a WHERE REPLACE(LOWER(a.course_name), ' ', '-')='$id' and a.course_mode='recorded'");
    
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function course_dtl($id)
    {
    $result = $this->db->query("SELECT a.*,(SELECT b.category FROM `category` b WHERE b.id=a.category_id)as category_name FROM `videos` a WHERE a.id='$id' and a.course_mode='Online'");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function offlinecourse_dtl($id)
    {
    $result = $this->db->query("SELECT a.*,(SELECT b.category FROM `category` b WHERE b.id=a.category_id)as category_name FROM `videos` a WHERE a.id='$id' and a.course_mode='offline'");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function course_dtl_data()
    {
    $result = $this->db->query("SELECT * FROM `videos`;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function course_dtl_mode($id)
    {
    $result = $this->db->query("SELECT a.*,(SELECT b.category FROM `category` b WHERE b.id=a.category_id)as category_name FROM `videos` a WHERE a.id='$id'");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function video_view_cat($cat_id)
    {
    $result = $this->db->query("SELECT * FROM `videos` WHERE category_id=$cat_id");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }
}
?>