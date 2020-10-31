<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}

		
		if(!empty($this->input->get('data'))){
			echo $this->input->get('data');
		}
		loadView('dash');
	}
	public function login()
	{
		echo 'This is login';
	}
}
