<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->lang->load('news','hindi');//set language
        $this->load->model('news_model');
    }
    public function index(){
        $data['title'] = $this->lang->line('title');
        $data['users'] = ['rizwan', 'shabana', 'uzaif', 'umar', 'umair'];
        $this->load->view('news/index',$data);
    }

    public function get_news()
    {
        $data['get_news']=$this->news_model->get_news();
        $this->load->view('news/get_news',$data);
    }

    public function add()
    {
        $title = 'title 8';
        $description = "this is description 8.";
        $newsData = ['title' => $title, 'description' => $description,'active'=>1,'created_at'=>date('Y-m-d H:i:s',time())];
        $this->news_model->insert_news($newsData);
        $this->session->set_flashdata('message', 'Record has been added');
        redirect('news/get_news');
    }

    public function edit($id)
    {
        $title = 'title 9';
        $description = "this is description 9.";
        $newsData = ['title' => $title, 'description' => $description,'active'=>1];
        $this->news_model->update_news($id,$newsData);
        $this->session->set_flashdata('message', 'Record has been updated');
        redirect('news/get_news');
    }

    public function delete($id)
    {
        $this->news_model->delete_news($id);
        $this->session->set_flashdata('message', 'Record has been deleted');
        redirect('news/get_news');
    }

    public function details($id)
    {
        $data['news']=$this->news_model->details($id);
        $this->load->view('news/details',$data);
    }
    public function get_news_dev()
    {
        $data['get_news']=$this->news_model->get_news_dev();
        $this->load->view('news/get_news_dev',$data);
    }
}
?>