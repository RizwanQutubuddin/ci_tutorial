<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Products extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('products_model');
        }
        public function index()
        {
            $data['title'] = 'Products';
            $this->load->view('header',$data);
            $this->load->view('products/index',$data);
            $this->load->view('footer',$data);
        }
    }
?>