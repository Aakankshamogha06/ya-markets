<?php 

class Webinar_model extends CI_Model
{
    public function webinar_submit_data($data)
    {
        
        $data = 
        [
            'date'=>$data['date'],
            'time'=>$data['time'],
            'topic'=>$data['topic'],
            'speaker'=>$data['speaker'],
            'mail_meaasage'=>$data['mail_meaasage'],
            
        ];
        if ($this->db->insert('webinar', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function webinar_view()
    {
    $result = $this->db->query("SELECT 
    *,
    DATE_FORMAT(date, '%b') AS month_name, DAY(date) as day,
    CONCAT(
        
        CASE 
            WHEN DAY(date) IN (11, 12, 13) THEN 'th'
            WHEN DAY(date) % 10 = 1 THEN 'st'
            WHEN DAY(date) % 10 = 2 THEN 'nd'
            WHEN DAY(date) % 10 = 3 THEN 'rd'
            ELSE 'th'
        END
    ) AS day_with_suffix
FROM 
    webinar  
ORDER BY  `webinar`.`status` ASC,`webinar`.`date` ASC;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function webinar_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('webinar');
    }

    public function webinar_update_data($data)
    {
        $newdata =  [
            'date'=>$data['date'],
            'time'=>$data['time'],
            'topic'=>$data['topic'],
            'speaker'=>$data['speaker'],
            'mail_meaasage'=>$data['mail_meaasage'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('webinar', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function webinar_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `webinar` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }

    public function country_fetch()
    {
        $role_data = $this->db->query("SELECT * FROM `countries`");
        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
        } else {
            return false;
        }
    }
      
      public function user_webinar_dtl($id,$uid)
    {
        $result = $this->db->query("SELECT * FROM `user_webi_dtl` where webi_id=$id and user_id=$uid");
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