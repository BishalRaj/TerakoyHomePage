<?php
class MTestimonial extends CI_Model{
	var $table='ter_testimonial';
	var $prefix='tes_';
	function insertTestimonial($categoriesArray){
		$this->db->insert($this->table,$categoriesArray);
		
	}
	function getTestimonial(){
		$this->db->order_by($this->prefix.'id','position');
		$this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->result();
	}
	function getTestimonialById($id){
		$this->db->where($this->prefix.'id',$id);
		$this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->row();

	}

	function updateTestimonial($updateArray,$id){	
		$this->db->where($this->prefix.'id',$id);
		$this->db->update($this->table,$updateArray);
	}
	
}