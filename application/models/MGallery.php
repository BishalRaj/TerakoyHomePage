<?php
class MGallery extends CI_Model{
	var $table='ter_gallery';
	var $prefix='g_';
	function insertGallery($categoriesArray){
		$this->db->insert($this->table,$categoriesArray);
		
	}
	function getGallery(){
		$this->db->order_by($this->prefix.'id','type');
		$this->db->group_by($this->prefix.'type');
		return $this->db->get($this->table)->result();
	}
	function getGalleryById($id){
		$this->db->where($this->prefix.'id',$id);
		return $this->db->get($this->table)->row();

	}

	function updateGallery($updateArray,$id){	
		$this->db->where($this->prefix.'id',$id);
		$this->db->update($this->table,$updateArray);
	}
	
}