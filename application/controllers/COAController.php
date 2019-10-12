<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class COAController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('COA_model');
  }
	public function index()
	{
    $data['result'] = $this->COA_model->getAllData();
		$this->load->view('coaView', $data);
	}

  public function create(){
    $this->COA_model->createData();
    redirect("COAController");
  }

  public function edit($accountNumber){
    $data['row'] = $this->COA_model-> getData($accountNumber);
    $this->load->view('coaEdit', $data);
  }

  public function update($accountNumber) {
    $this->COA_model->updateData($accountNumber);
    redirect("COAController");
  }

  public function delete($accountNumber) {
    $this->COA_model->deleteData($accountNumber);
    redirect("COAController");
  }


}
