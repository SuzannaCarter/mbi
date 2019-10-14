<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminJournalController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Journal_model');
  }
	public function index()
	{
    $data['result'] = $this->Journal_model->getAllData();
    $data['accounts'] = $this->Journal_model->getAllAccounts();
    $this->load->view('headers/adminHeader');
		$this->load->view('admin/adminJournal', $data);
    $this->load->view('footers/footer');
	}
}
