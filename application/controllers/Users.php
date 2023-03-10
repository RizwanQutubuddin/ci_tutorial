<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('users_model');
    }

    public function signup()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm', 'Password Confirm', 'required|matches[password]');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if($this->form_validation->run()==false){
            $data['title'] = 'Sign Up';
            $this->load->view('header',$data);
            $this->load->view('users/signup',$data);
            $this->load->view('footer');
        } else {
            $userData = array('first_name' => $this->input->post('first_name', TRUE),'last_name' => $this->input->post('last_name', TRUE),'email' => $this->input->post('email', TRUE),'password' =>md5($this->input->post('password', TRUE)),'created_at' => date('Y-m-d H:i:s',time()));
            $this->users_model->addUser($userData);
            $this->session->set_flashdata('message', 'Registration successfully.');
            redirect('users/login');
        }
    }

    public function login()
    {
        $this->load->view('users/login');
    }
}