<?php
class MBlogs extends CI_Model{
	private $table='blogposts';
	private $prefix='b_';
	function insertBlog($categoriesArray){
		$this->db->insert($this->table,$categoriesArray);
		setalias($categoriesArray[$this->prefix.'alias'],$this->table);
		
	}
	function getBlogs(){
		$this->db->order_by($this->prefix.'id','desc');
		$this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->result();
	}
	function getBlogById($id){
		$this->db->where($this->prefix.'alias',$id);
		$this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->row();
	}

	
}