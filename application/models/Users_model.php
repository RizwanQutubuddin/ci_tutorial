<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
    protected $dev_db;
    public function __construct()
    {
        parent::__construct();
    }
    public function addUser($userData)
    {
        $this->db->insert('users',$userData);
        return $this->db->insert_id();
    }

    public function login($email, $password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',md5($password));
        $this->db->where('active',1);
        $query=$this->db->get('users');

        if ($query->num_rows() > 0) {
            return $query->row(); // return result in object form
            // return $query->result(); // return result in object array form
            // return $query->result_array(); //return result in array form
        } else {
            return false;
        }
    }
    
    public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        // echo "<pre>";
        // print_r($query->row());
        // die;
        return $query->row();
    }

    public function update($id,$fileName)
    {
        $this->db->where('id', $id);
        $this->db->update('users',$fileName);
    }
}