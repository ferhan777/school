<?php
 /**
 * 
 */
 class Test extends CI_Controller
 {
 	
  function index(){
   $this->load->model('admin_model');
   $staff=$this->admin_model->find_all_staff();
   print_r($staff);
  }

  function tt($id){
  	echo $id;
  }
 }
?>