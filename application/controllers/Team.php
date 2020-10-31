<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MTeam');

	}

	public function index()
	{
		$data['data']=$this->MTeam->getTeam();
		loadView('team',$data);
	}
}
