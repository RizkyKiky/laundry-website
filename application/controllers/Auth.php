<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->User_model->get_user($username);

            if ($user[0]->username == $username) {
                $this->session->set_userdata('users', $user['id']);
                redirect('Admin');
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('login');
            }
        }
    }

    public function register() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            $user_id = $this->User_model->create_user($username, $password);

            if ($user_id) {
                $this->session->set_userdata('users', $user_id);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('error', 'Registration failed');
                redirect('Auth/register');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('users');
        redirect('Auth/Dashboard');
    }

}