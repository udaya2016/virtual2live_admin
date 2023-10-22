<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_Model extends CI_Model
{

    public function get_b2c_userlist()
    {
        $q = $this->db->get('users');
        return $q->result();
    }
    public function get_b2b_userlist()
    {
        $q = $this->db->get('b2b_users');
        return $q->result();
    }
    public function insertb2c($insertdata)
    {
        $this->db->insert('users', $insertdata);
    }
    public function insertb2b($insertdata)
    {
        $this->db->insert('b2b_users', $insertdata);
    }

    public function updateb2c($insertdata, $id)
    {

        $this->db->where('id', $id);
        $this->db->update('users', $insertdata);
    }
    public function geteditb2c($id)
    {
        $this->db->where('id', $id);
        $q = $this->db->get('users');
        return $q->row_array();
    }
    public function updateb2b($insertdata, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('b2b_users', $insertdata);
    }
    public function geteditb2b($id)
    {
        $this->db->where('id', $id);
        $q = $this->db->get('b2b_users');
        return $q->row_array();
    }

    public function get_adpost()
    {
        $this->db->select('adposts .*, type.typename as typename');
        $this->db->from('adposts');
        $this->db->join('type', 'adposts.type = type.id');

        $this->db->where('adposts.isactive', 1);
        $q = $this->db->get();
        return $q->result();
    }
    public function insertaddtable($insertdata)
    {
        $this->db->insert('adposts', $insertdata);
    }

    public function deletetable($insertdata)
    {
        $this->db->insert('adposts', $insertdata);

        
    }

    /* End of file Home_Model.php */
}
