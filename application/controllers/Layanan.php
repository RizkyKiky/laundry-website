<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index() 
    {
        $this->load->view('Layanan');
    }
}