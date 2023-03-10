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
}