<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MGallery');
	}
	public function index()
	{
		$data['data']=$this->MGallery->getGallery();
		loadView('gallery',$data);
	}
}
