<?php
class Project_model extends CI_Model
{

    public function getdata($field = NULL, $value = NULL)
    {
        $this->load->database();
        if ($field != NULL && $value != NULL) {
            $this->db->where('status', 1);
            // $where = "name='Joe' AND status='boss' OR status='active'";
            $this->db->where($field, $value);
        }
        $query = $this->db->get('treatment');
        return $query->result_array();
    }

    public function gettreatments()
    {
        $query = $this->db->get('treatment');
        return $query->result_array();
    }

    public function get_treatment($link)
    {

        $query = $this->db->get_where('treatment', array('link' => $link));
        return $query->row();
    }
    
    public function get_service($link)
    {
        $query = $this->db->get_where('services', array('link' => $link));
        return $query->row_array();
    }

    public function checktreatment($link)
    {

        $query = $this->db->get_where('treatment', array('link' => $link));
        if ($query->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function checkservices($link)
    {
        $query = $this->db->get_where('services', array('link' => $link));
        if ($query->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function activate($table = NULL, $link = NULL)
    {
        if ($table == "users" || $table == "reviews" || $table == "coupons" || $table == "services"|| $table == "career") {
            $this->db->set('status', 1);
            $this->db->where('id', $link);
            $this->db->update($table);
        } else {
            $this->db->set('status', 1);
            $this->db->where('link', $link);
            $this->db->update($table);
        }
    }
    public function deactivate($table = NULL, $link = NULL)
    {
        if ($table == "users") {
            $this->db->set('status', 2);
            $this->db->where('id', $link);
            $this->db->update($table);
        } else if ($table == "coupons" || $table == "reviews" || $table == "services"|| $table == "career") {
            $this->db->set('status', 0);
            $this->db->where('id', $link);
            $this->db->update($table);
        } else {
            $this->db->set('status', 0);
            $this->db->where('link', $link);
            $this->db->update($table);
        }
    }

    public function delete($table = NULL, $link = NULL)
    {
        if ($table == "director" || $table == "reviews" || $table == "services"|| $table == "career") {
            $this->db->where('id', $link);
            $this->db->delete($table);
            return true;
        }else {
            $this->db->where('link', $link);
            $this->db->delete($table);
            return true;
        }
    }

    public function removeimg($table = NULL, $link = NULL)
    {
        if($table == 'director' || $table == 'services'){
            $this->db->set('image',"");
            $this->db->where('id', $link);
        }else if($table == 'blog' || $table == 'plans'){
            $this->db->set('image',"");
            $this->db->where('link', $link);
        }else if($table == 'reviews'){
            $this->db->set('image',"");
            $this->db->where('id', $link);
        }
        else{
            $this->db->set('featured_image',"");
            $this->db->where('link', $link);
        }
        $this->db->update($table);
        
        
    }

    public function removecat($table = NULL, $link = NULL)
    {
        $this->db->set('image',"");
        $this->db->where('link', $link);
        $this->db->update($table);
    }

    public function saveimage($link, $images)
    {
        $this->db->set('images', $images);
        $this->db->where('link', $link);
        $this->db->update('treatment');
    }

    public function removepdf($table = NULL, $link = NULL)
    {
        $this->db->set('pdf',"");
        $this->db->where('link', $link);
        $this->db->update($table);
    }

    public function getimages($link)
    {
        $this->db->select('images');
        $this->db->from('treatment');
        if ($link) {
            $this->db->where('link', $link);
            $query = $this->db->get();
            $result = $query->row();
        } else {
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result) ? $result : false;
    }

    function addtreatment($data)
    {
        $this->db->insert('treatment',$data);
        redirect('admin/treatments');
    }
    
    function edittreatment($post_id, $data)
    {
        $this->db->where('link',$post_id);
        $this->db->update('treatment',$data);
        redirect(base_url('admin/treatments'));
    }
    


    /* 
     * Insert file data into the database 
     * @param array the data for inserting into the table 
     */
    public function insert($data = array())
    {
        $insert = $this->db->insert('treatment', $data);
        return $insert ? true : false;
    }
    
}
