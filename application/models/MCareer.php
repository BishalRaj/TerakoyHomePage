<?php
class MCareer extends CI_Model{
	var $table='ter_career';
	var $prefix='ca_';
	
	function insertCareer($categoriesArray){
		$this->db->insert($this->table,$categoriesArray);	
	}

	function getCareer(){
		$this->db->order_by($this->prefix.'id','name');
		// $this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->result();
	}
	function getCareerById($id){
		$this->db->where($this->prefix.'id',$id);
		$this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->row();
	}

	function updateCareer($updateArray,$id){	
		// pre($updateArray,1);
		$this->db->where($this->prefix.'id',$id);
		$this->db->update($this->table,$updateArray);
	}
	
}