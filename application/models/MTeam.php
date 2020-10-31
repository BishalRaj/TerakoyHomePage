<?php
class MTeam extends CI_Model{
	var $table='ter_teams';
	var $prefix='t_';
	function insertTeam($categoriesArray){
		$this->db->insert($this->table,$categoriesArray);
		// setalias($categoriesArray[$this->prefix.'alias'],$this->table);
		
	}
	function getTeam(){
		$this->db->order_by($this->prefix.'id','position');
		$this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->result();
	}
	function getTeamById($id){
		$this->db->where($this->prefix.'id',$id);
		$this->db->where($this->prefix.'status',1);
		return $this->db->get($this->table)->row();
	}

	function updateTeam($updateArray,$id){	
		// pre($updateArray,1);
		$this->db->where($this->prefix.'id',$id);
		$this->db->update($this->table,$updateArray);
	}
	
}