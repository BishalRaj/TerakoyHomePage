<?php
class Career extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MCareer');
		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}
	}

	function index(){
		loadView('career/view');
	}

	function view(){
		$data['data']=$this->MCareer->getCareer();
		print_r(json_encode($data));
	}


}