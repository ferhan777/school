<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Home extends CI_Controller
 {
 	
 	// function __construct(argument)
 	// {
 	// 	# code...
 	// }

 	public function index(){
 	 	
 	 $this->load->view('templates/header');
 	 $this->load->view('home_view');
 	 //$this->load->view('test');
     $this->load->view('templates/footer');
     	
 	}
 }
?>