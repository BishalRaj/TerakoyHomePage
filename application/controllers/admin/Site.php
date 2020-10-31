<?php
class Site extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MSite');
		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}
	}

	function index(){
		$data['data']=$this->MSite->getSiteDetails();
		loadView('site/view',$data);
	}

	function view(){
		if(!empty($this->input->post('site_name'))){

			$social_media=array(
				'facebook'=>$this->input->post('site_social_facebook'),
				'twitter'=>$this->input->post('site_social_twitter'),
				'youtube'=>$this->input->post('site_social_youtube'),
				'github'=>$this->input->post('site_social_github')
			);

			$inputArray=array(
				's_name'=>$this->input->post('site_name'),
				's_email'=>$this->input->post('site_email'),
				's_contact'=>$this->input->post('site_contact'),
				's_address'=>$this->input->post('site_address'),
				's_cv'=>$this->input->post('site_cv'),
				's_desc'=>$this->input->post('site_description'),
				's_social'=>json_encode($social_media),
				's_logo'=>$this->input->post('site_logo'),
				's_bg_img'=>$this->input->post('site_bg_img'),
				's_pp_img'=>$this->input->post('site_pp_img'),
				's_normal_img'=>$this->input->post('site_normal_img'),
				's_remarks'=>$this->input->post('site_remarks'),
			);
			$this->MSite->updateSite($inputArray);
			$data['data']=$inputArray;
			redirect(admin_url('site'),$data);
		}
		
	}
}