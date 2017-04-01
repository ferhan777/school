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
 		$this->load->model('user_model');
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
 	 $data['admission_form']=true;	
     $this->load->view('admin/admin_header');
     $this->load->view('admin/dashboard',$data);
     $this->load->view('admin/admin_footer');
 	}

 	function add_staff(){
     $data['error']=false;
     $data['add_staff_form']=true;
     $this->form_validation->set_rules('employ_code','Employee code','trim|required|min_length[4]|max_length[8]');
     $this->form_validation->set_rules('username','Username','trim|required|min_length[4]|max_length[8]|is_unique[users.username]');
     $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[8]');
     $this->form_validation->set_rules('passwordconf','Password confirm','trim|required|matches[password]');
     $this->form_validation->set_rules('staff_type','staff type','required');
     $this->form_validation->set_error_delimiters('<div class="vali_error">', '</div>'); 
   
     if($this->form_validation->run()==false){
      
      $this->load->view('admin/admin_header');
      $this->load->view('admin/dashboard',$data); 
      $this->load->view('admin/admin_footer');
    }else{ //if validation is ok
      if($_POST){
        $employ_code = $this->input->post('employ_code',true);
        $username = $this->input->post('username',true);
        $password = sha1($this->input->post('password',true));
        $user_type = $this->input->post('staff_type',true);
        $data=array(
          'username'=>$username,
          'password'=>$password,
          'user_type' => $user_type
        	 );
        $insert_id=$this->user_model->create_user($data);
        if($insert_id>0){
        $data=array(
         'employ_code' =>$employ_code,
         'staff_type' =>$user_type,
         'approved' =>0,
         'user_id' =>$insert_id
        	);
        $final_id=$this->user_model->create_staff($data);
        if($final_id>0){                                            /***if this second proce fail we need to del first***/
          $data['staff_ok']=true;	
          $this->load->view('admin/admin_header');
          $this->load->view('admin/dashboard',$data); 
          $this->load->view('admin/admin_footer');
        }//checking proper updation of two tables
          
        
      }else{//if post failes due to some reasons
        $data['error']=true;
        $this->load->view('admin/admin_header');
        $this->load->view('admin/dashboard',$data); 
        $this->load->view('admin/admin_footer');
      } 
        }//closing of post block
        
    }//form validation success block

 	}//closing of the function
 }//class ends here
?>