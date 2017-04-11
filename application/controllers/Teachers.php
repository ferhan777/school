<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Teachers extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->auth();
 		$this->load->model('teacher_model');
 	}

    function index(){
     $this->auth();	
     $user=$this->session->userdata('user_type');	
     $data['test']=$user;
     $this->load->view('teacher/teacher_header');
     $this->load->view('teacher/dashboard',$data);
     $this->load->view('teacher/teacher_footer');	
    }

    function auth(){ //this function prevent direct access to admin controller
     $user_type=$_SESSION['user_type'];
     if($user_type !='pteacher'){
     redirect(base_url().'users/login');
      }
    }

    function view_profile(){
     $id=$this->session->userdata('id'); 
     $data['error']=false;
     $data['update_profile_form']=true;
     $data['row']=$this->teacher_model->getUser($id); 
     $this->load->view('teacher/teacher_header');
     $this->load->view('teacher/dashboard',$data);
     $this->load->view('teacher/teacher_footer');
    }//closing of update_profile

    function update_profile(){
     $id=$this->session->userdata('id');
     $data['error']=false;
     $data['update_profile_form']=true;
     $data['row']=$this->teacher_model->getUser($id); 
     $this->form_validation->set_rules('first_name','First name','trim|required|min_length[4]|max_length[10]');
     $this->form_validation->set_rules('last_name','Last name','trim|required|min_length[4]|max_length[10]');
     $this->form_validation->set_error_delimiters('<div class="vali_error">', '</div>'); 
   
     if($this->form_validation->run()==false){
      
      $this->load->view('teacher/teacher_header');
      $this->load->view('teacher/dashboard',$data); 
      $this->load->view('teacher/teacher_footer');
    
      }else{
        if($_POST){
         $first_name=$this->input->post('first_name',true);
         $last_name=$this->input->post('last_name',true); 
         $detail=array(
          'first_name' =>$first_name,
          'last_name' =>$last_name
         );
         $this->teacher_model->update_profile($id,$detail);  
        }
      }
     } 



 }//closing of the class
?>  	