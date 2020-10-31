<?php
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MLogin');
		$this->load->library('session');
	}

	function index(){
		loadView('login');
	}

	function validate(){
		if(!empty($this->input->post('email'))){
			$u_email=$this->input->post('email');
			$u_password=$this->input->post('password');
			$data=$this->MLogin->login($u_email,$u_password);
			// Pre($data);
			if ($data!=false) {
				$this->session->set_userdata('user_id', $data->u_id);
				$this->session->set_userdata('user_email', $data->u_email);
				redirect(admin_url());
			} else {
				$this->session->set_flashdata('err_message','Invalid Login');
				redirect(base_url('login'));
			}
		}
	}

	function logout(){
		$this->session->unset_userdata('user'); 
		redirect(base_url('login'));
	}


}