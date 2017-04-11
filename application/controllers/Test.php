<?php
 /**
 * 
 */
 class Test extends CI_Controller
 {
 	
  function index(){
   $this->load->view('admin/admin_header');	
   $this->load->view('test');
   $this->load->view('admin/admin_footer');	
  }
 }
?>