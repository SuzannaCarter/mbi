<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function createData(){
    $data = array(
      'firstname' => $this->input->post('firstName'),
      'lastname' => $this->input->post('lastName'),
      'birthday' => $this->input->post('birthday'),
      'email' => $this->input->post('email'),
      'address' => $this->input->post('address'),
      'password' => $this->input->post('password'),
      'joblevel' => $this->input->post('jobLevel'),
      'active' => $this->input->post('active'),
    );
    $this->db->insert('users', $data);
  }

  function getAllData(){
    $query = $this->db->query('SELECT * FROM users');
    return $query->result();
  }

  function getData($ID) {
    $query = $this->db->query('SELECT * FROM users WHERE `ID` =' .$ID);
    return $query->row();
  }

  function updateData($ID) {
    $data = array(
      'firstname' => $this->input->post('firstName'),
      'lastname' => $this->input->post('lastName'),
      'birthday' => $this->input->post('birthday'),
      'email' => $this->input->post('email'),
      'address' => $this->input->post('address'),
      'password' => $this->input->post('password'),
      'joblevel' => $this->input->post('jobLevel'),
      'active' => $this->input->post('active'),
    );
    $this->db->where('ID', $ID);
    $this->db->update('users', $data);
  }

  function deleteData($ID){
    $this->db->where('ID', $ID);
    $this->db->delete('users');
  }
}
