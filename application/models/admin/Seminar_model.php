<?php 

class   Seminar_model extends CI_Model
{
    public function seminar_submit_data($data,$image)
    {
        $data = 
        [
            'name'=>$data['name'],
            'cover_image'=>$image,
            'location'=>$data['location'],
            'date'=>$data['date'],
            
        ];
       
        if ($this->db->insert('seminar', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function seminar_view()
    {
    $result = $this->db->query("SELECT * FROM `seminar` ORDER BY YEAR(date) DESC, MONTH(date) DESC;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function seminar_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('seminar');
    }

    public function seminar_update_data($data,$image)
    {
        $newdata =  [
            'name'=>$data['name'],
            'image'=>$image,
            'views'=>$data['views'],
            'date'=>$data['date'],
            'long_desc'=>$data['long_desc'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('seminar', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function seminar_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `seminar` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }

    public function seminar_detail_data_nm()
{
    $uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `seminar` WHERE REPLACE(LOWER(name), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}
public function gallery_semi_imgdata_submit($data = array()){ 
    $insert = $this->db->insert_batch('sub_galley_seminar',$data); 
    return $insert?true:false; 
} 
public function seminar_gallery_view($seminar_id)
{
$result = $this->db->query("SELECT * FROM `sub_galley_seminar` where seminar_id=$seminar_id ");
if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

public function seminar_gallery_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('sub_galley_seminar');
    }


}
?>