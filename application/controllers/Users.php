<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Users extends CI_Controller
 {
 	
 	function __construct(){
 	  parent::__construct();
 	  $this->load->model('user_model');
 	 }

 	function login(){
    $data['error']=false;
    $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[8]');
    $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[8]');
    $this->form_validation->set_error_delimiters('<div class="vali_error">', '</div>'); 
   
   if($this->form_validation->run()==false){
      //$error=validation_error();
      $this->load->view('templates/header');
      $this->load->view('login'); 
      $this->load->view('templates/footer');
    }else{ //if validation is ok
      if($_POST){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
        $user=$this->user_model->login($username,$password);
        if(!$user){
         $data['error']=true;
          $this->load->view('templates/header');
          $this->load->view('login',$data); 
          $this->load->view('templates/footer');
          
        }else{//if user is found in the database

          $this->session->set_userdata('id',$user['id']);
          $this->session->set_userdata('username',$user['username']);
          $this->session->set_userdata('user_type',$user['user_type']);
          if($user['user_type']=='admin'){
           redirect(base_url().'admin');
          }else if($user['user_type']=='pteacher'){
           redirect(base_url().'teachers'); 
          }
        } 
      }else{//if post failes due to some reasons
        $data['error']=true;
        $this->load->view('templates/header');
        $this->load->view('login',$data); 
        $this->load->view('templates/footer');
      } 
    }

  }

  function login_validation(){
   $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[8]|is_unique[users.username]');
   $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[8]');
   $this->form_validation->set_error_delimiters('<div class="vali_error">', '</div>'); 
    if($this->form_validation->run()==false){
      //$error=validation_error();
      $this->load->view('templates/header');
      $this->load->view('login'); 
      $this->load->view('templates/footer');
    } 
  }
     
    
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'home');	
  }

  function register(){

  }

 }
?>