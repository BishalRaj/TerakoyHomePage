<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {
	 
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MCareer');
	}

	public function index()
	{
		loadView('career');
	}

	function add(){
		if(!empty($this->input->post('name'))){
			$inputArray=array(
				'ca_name'=>$this->input->post('name'),
				'ca_dob'=>$this->input->post('dob'),
				'ca_email'=>$this->input->post('email'),
				'ca_phone'=>$this->input->post('phone'),
				'ca_qualifications'=>$this->input->post('qualifications'),
				'ca_skills'=>$this->input->post('skills'),
				'ca_cv'=>$this->input->post('cv')
			);
			$this->MCareer->insertCareer($inputArray);
			redirect(base_url('career'));
		}
	}




}