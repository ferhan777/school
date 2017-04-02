<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Teacher_model extends CI_Model
 {
 	
 	//function __construct(argument)
 	//{
 		# code...
 	//}

 	function getUser($id){
 	 //$this->db->where('id',$id);
     
 	 $this->db->select('*');
     $this->db->from('users');
     $this->db->join('staff', "staff.user_id=users.id");
     $this->db->where('users.id',$id);
     $query = $this->db->get();
     return $query->result_array();	
 	}

 	function update_profile($id,$data){
     $this->db->where('user_id',$id);
     $this->db->update('staff',$data);
 	}
 }
?>