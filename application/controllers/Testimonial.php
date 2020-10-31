<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MTestimonial');

	}
	public function index()
	{
		$data['data']=$this->MTestimonial->getTestimonial();
		loadView('testimonial',$data);
	}
}
