<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('MTestimonial');
		$this->load->model('MSite');
	}
	public function index()
	{
		$data['tes_data']=$this->MTestimonial->getTestimonial();
		$this->setSiteSession();
		loadView('home',$data);
	}

	private function setSiteSession(){
		$siteData=$this->MSite->getSiteDetails();
		// Pre($siteData);
		$social=json_decode($siteData->s_social,true);
		$this->session->set_userData('site_logo', $siteData->s_logo);
		$this->session->set_userData('site_bg_img', $siteData->s_bg_img);
		$this->session->set_userData('site_pp_img', $siteData->s_pp_img);
		$this->session->set_userData('site_normal_img', $siteData->s_normal_img);
		$this->session->set_userData('site_name', $siteData->s_name);
		$this->session->set_userData('site_email', $siteData->s_email);
		$this->session->set_userData('site_contact', $siteData->s_contact);
		$this->session->set_userData('site_address', $siteData->s_address);
		$this->session->set_userData('site_social_facebook', $social['facebook']);
		$this->session->set_userData('site_social_twitter', $social['twitter']);
		$this->session->set_userData('site_social_github', $social['github']);
		$this->session->set_userData('site_social_youtube', $social['youtube']);
		
		// $data_session_set = array(
		// 	'name'  => $siteData->s_name,
		// 	'email' => $siteData->s_email,
		// 	'contact' => $siteData->s_contact,
		// 	'address' => $siteData->s_address,
		// 	'logo' => $siteData->s_logo,
		// 	'bg_img' => $siteData->s_bg_img,
		// 	'pp_img' => $siteData->s_pp_img,
		// 	'normal_img' => $siteData->s_normal_img
		//  );

		// $this->session->set_site($data_session_set);


	}

}