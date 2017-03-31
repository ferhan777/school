<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Admin extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->auth();
 	}

   function auth(){ //this function prevent direct access to admin controller
   $user_type=$this->session->userdata('user_type');
   if(!$user_type =='admin'){
   redirect(base_url().'users/login');
   }  
  }

 	function index(){
 	 $this->load->view('admin/admin_header');
 	 $this->load->view('admin/dashboard');
 	 //$this->load->view('test');
     $this->load->view('templates/footer');
 	}

 	function admission(){
 	 $data['test']=true;	
     $this->load->view('admin/admin_header');
     $this->load->view('admin/dashboard',$data);
     $this->load->view('admin/admin_footer');
 	}
 }
?>