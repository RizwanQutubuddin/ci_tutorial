<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SessionData extends CI_Controller
{
    public function index()
    {
        $arr = array('id'=>3,'name'=>'Vijay','phone'=>'999999999','email'=>'abc@gmail.com');

        $this->session->set_userdata($arr);

        $this->session->set_flashdata('array',$arr);
        $this->session->set_flashdata('id',$arr['id']);
        $this->session->set_flashdata('message','this is flash message');

        $this->session->set_tempdata('dob','01/02/2000',5); //(key,value,time)
        $this->session->set_tempdata($arr,NULL,10); //(array,null,time)

        $this->session->mark_as_temp('name',5); //(key,time)

        $this->session->mark_as_flash('phone'); // mark_as_flash convert session data (e.g $arr variable) to flash data 
        


        $this->load->view('sessiondata/index');
    }


    public function session_show()
    {
        // $this->session->unset_userdata('email'); //destroy session value
        // $this->session->sess_destroy();  //destroy session

        $this->load->view('sessiondata/session_show');
    }
}

?>