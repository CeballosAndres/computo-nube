<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Inicio_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        if (! $this->session->has_userdata('email')) {
            redirect('login_controller/login');
        }


        $this->load->view('layout/header');
        $this->load->view('layout/nav-bar');
        $this->load->view('inicio');
        $this->load->view('layout/footer');
        
    }
}
