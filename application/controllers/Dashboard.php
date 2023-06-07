<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function index()
	{
		$this->load->view('Dashboard');
	}

    public function login() 
    {
        $this->load->view('login');
    }

    public function register() 
    {
        $this->load->view('register');
    }

    public function admin() 
    {
        $this->load->view('Admin');
    }

    public function main() 
    {
        $this->load->view('main');
    }
}