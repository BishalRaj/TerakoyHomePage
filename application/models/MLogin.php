<?php
class MLogin extends CI_Model{
	var $table='ter_user';
	var $prefix='u_';
	
	function insertUser($categoriesArray){
		$this->db->insert($this->table,$categoriesArray);
		
	}
	function login($email,$pass){
		$this->db->select("*");
		$this->db->where('u_email',$email);
		$this->db->where('u_password',$pass);

		if($query=$this->db->get($this->table))
		{
			return $query->row();
		}
		else{
		  return false;
		}

		// return $this->db->get($this->table)->result();
	}
	
}