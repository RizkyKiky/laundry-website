<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user($username) {
        $this->db->select("*");
        $this->db->where("username", $username);
        $this->db->limit(1);
        
        $query = $this->db->get('users');
        return $query->result();
    }

    public function create_user($username, $password) {
        $data = array(
            'username' => $username,
            'password' => $password
        );

        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function insert_user($data) {
        $this->db->insert('user_details', $data);
        return $this->db->insert_id();
    }

    public function delete_user($data) {
        $this->db->where('id', $data);
        $this->db->delete('user_details');
        return $this->db->affected_rows();
      }

}