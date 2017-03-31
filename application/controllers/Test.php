<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

 function show(){
  
  $this->load->model('user_model');
  $row=$this->user_model->find_by_id(1);
  print_r($row);	
 	
 }
 function index(){
  $this->load->view('admin/header');
  $this->load->view('test');
  $this->load->view('admin/footer');	
 }	
}
