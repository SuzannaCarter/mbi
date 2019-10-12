<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('User_model');
  }
	public function index()
	{
    $data['result'] = $this->User_model->getAllData();
		$this->load->view('userView', $data);
	}

  public function create(){
    $this->User_model->createData();
    redirect("UserController");
  }

  public function edit($ID){
    $data['row'] = $this->User_model-> getData($ID);
    $this->load->view('userEdit', $data);
  }

  public function update($ID) {
    $this->User_model->updateData($ID);
    redirect("UserController");
  }

  public function delete($ID) {
    $this->User_model->deleteData($ID);
    redirect("UserController");
  }


}
