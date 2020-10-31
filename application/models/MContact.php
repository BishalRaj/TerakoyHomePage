<?php
class MContact extends CI_Model{
	var $table='ter_contact';
	var $prefix='c_';
	
	function insertContact($categoriesArray){
		$this->db->insert($this->table,$categoriesArray);
		
	}
	function getContact(){
		$this->db->order_by($this->prefix.'id','name');
		// $this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->result();
	}
	function getContactById($id){
		$this->db->where($this->prefix.'id',$id);
		// $this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->row();
	}

	function updateContact($updateArray,$id){	
		// pre($updateArray,1);
		$this->db->where($this->prefix.'id',$id);
		$this->db->update($this->table,$updateArray);
	}
	
}