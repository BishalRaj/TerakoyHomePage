<?php
class Contact extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MContact');
		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}
	}

	function index(){
		loadView('contact/view');
	}

	function view(){
		$data['data']=$this->MContact->getContact();
		print_r(json_encode($data));
	}


}