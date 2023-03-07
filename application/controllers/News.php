<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->lang->load('news','hindi');
    }
    public function index(){
        $arr = array('id'=>3,'name'=>'Vijay','phone'=>'999999999','email'=>'abc@gmail.com');
        $this->session->set_userdata($arr);
        // $this->session->unset_userdata('email');
        // $this->session->sess_destroy();
        $this->session->set_flashdata('message','this is flash message');
        $this->session->mark_as_flash('phone');

        $data['title'] = $this->lang->line('title');
        $data['users'] = ['rizwan', 'shabana', 'uzaif', 'umar', 'umair'];
        $this->load->view('news/index',$data);
    }

    public function details($param1,$param2=null){
        echo "this is News Controller and details method and param1=$param1, param2=$param2";
    }
}
?>