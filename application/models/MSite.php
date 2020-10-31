<?php
class MSite extends CI_Model{
	var $table='ter_sitedetails';
	var $prefix='s_';
	function getSiteDetails(){
		$this->db->where($this->prefix.'id',1);
		return $this->db->get($this->table)->row();
	}
	function updateSite($updateArray,$id=1){
		$this->db->where($this->prefix.'id',$id);
		$siteData=$this->db->get($this->table)->row();

		if (!empty($siteData)) {
			$this->db->where($this->prefix.'id',1);
			$this->db->update($this->table,$updateArray);
		}else{
			$json = json_encode($updateArray);
			$insertField = array('json_field' => $json);
			$this->db->insert($this->table,$insertField);	
		}		
	}
	
}