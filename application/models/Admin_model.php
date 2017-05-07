<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Admin_model extends CI_Model
 {
  function find_all_staff(){
  	$admin="admin";
    $this->db->select('*')->from('users')->where('user_type !=',$admin);
    $query=$this->db->get();
    return $query->result_array();
  }

  function create_user($data){
    $this->db->insert('users',$data);
	$inser_id=$this->db->insert_id();
	return $inser_id;	
  }

  function create_staff($data){
	$this->db->insert('staff',$data);
	$inser_id=$this->db->insert_id();
	return $inser_id;	
  }

  function admit($data){
   $this->db->insert('admission',$data);
   $inser_id = $this->db->insert_id();	
  }


 }//closing of the class