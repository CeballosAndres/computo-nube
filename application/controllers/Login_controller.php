<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('usuarios_model');
        $this->load->library('session');
    }

    public function login()
    {
        $this->load->view('layout/header');
        $this->load->view('login');
        $this->load->view('layout/footer');
    }

    public function validate_session()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $user = $this->usuarios_model->get_usuario($email, $pass);

        if ($user) {
            
            $array = array(
                'email' => $user->email,
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
            );
            
            $this->session->set_userdata( $array );
            
            redirect('inicio_controller');
        } else {
            $this->session->set_flashdata('error', 'Datos de inicio erróneos [user: demo@ceballos.dev, password: toor]');
            redirect('login_controller/login');
        }
    }

    public function close_session()
    {
        $this->session->sess_destroy();
        redirect('login_controller/login');
    }
}
