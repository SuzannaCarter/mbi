<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('Login');
        }
    }

    function index(){
        if($this->session->userdata('level') === '3'){
            $this->load->view('accountant_view');
        } else{
            echo "Access Denied";
        }
    }
}