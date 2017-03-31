<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class User_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	function create_user($data){
	 $this->db->insert('users',$data);	
	}

	function find_all(){
	 $this->db->select('*')->from('users');
	 $query=$this->db->get();
	 return $query->result_array();	
	}

	function find_by_id($id){	
	 $this->db->select('*')->from('users')->where(['id'=>$id]);
	 $query=$this->db->get();
	 return $query->result_array();	
	}

	function login($username,$password){
	 $where=array(
	  'username' => $username,
	  'password' => sha1($password)  
	  );	
	 $this->db->select('*')->from('users')->where($where);
	 $query=$this->db->get();
	 return $query->first_row('array');	
	}

	function logout(){
	 	
	}
}
?>