<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wash2 extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index() 
    {
        $this->load->view('Wash2');
    }
}