<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model
{
    protected $dev_db;
    public function __construct()
    {
        parent::__construct();
        $this->dev_db=$this->load->database('devlopment', TRUE);
    }
    public function get_news()
    {
        // $query=$this->db->query('select *from news'); // 1. method to get the data from table
        $this->db->select('*'); // $this->db->select('title, description')
        // $this->db->where('active', 1); //or $this->db->where(['active'=> 1,'title'=>'title 1']); for condition field of the table.
        $this->db->order_by('id', 'desc'); // order by condition
        // $this->db->limit(3); // limit condition

        $query=$this->db->get('news');  //2. method to get the data from table
        if ($query->num_rows() > 0) {
            // return $query->result(); // rturn an object type
            return $query->result_array();// rturn an array type
        }
    }

    public function insert_news($newsData)
    {
        $this->db->insert('news',$newsData);
        return $this->db->insert_id();
    }

    public function update_news($id, $newsData)
    {
        $this->db->where('id',$id);
        $this->db->update('news',$newsData);
    }

    public function delete_news($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news');
    }

    public function details($id)
    {
        $this->db->where('id', $id);
        $query=$this->db->get('news');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }
    public function get_news_dev()
    {
        $query=$this->dev_db->get('news');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}