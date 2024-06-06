<?php 

class Expo_Model extends CI_Model
{
    public function expo_submit_data($data,$image)
    {
        $data = 
        [
            'location'=>$data['location'],
            'cover_image'=>$image,
            'title'=>$data['title'],
            'date'=>$data['date'],
          
            'long_desc'=>$data['long_desc'],
        ];
       
        if ($this->db->insert('expo', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function expo_view()
    {
    $result = $this->db->query("SELECT * FROM `expo` ORDER BY `expo`.`date` DESC");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function expo_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('expo');
    }

    public function expo_update_data($data,$image)
    {
        $newdata =  [
            'location'=>$data['location'],
            'cover_image'=>$image,
            'title'=>$data['title'],
            'date'=>$data['date'],
           
            'long_desc'=>$data['long_desc'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('expo', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function expo_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `expo` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }

    public function expo_detail_data_nm()
{
    $uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `expo` WHERE REPLACE(LOWER(title), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}
public function gallery_semi_imgdata_submit($data = array()){ 
    $insert = $this->db->insert_batch('sub_galley_expo',$data); 
    return $insert?true:false; 
}
public function expo_gallery_view($expo_id)
{
$result = $this->db->query("SELECT * FROM `sub_galley_expo` where expo_id=$expo_id ");
if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

public function expo_gallery_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('sub_galley_expo');
    }


}
?>