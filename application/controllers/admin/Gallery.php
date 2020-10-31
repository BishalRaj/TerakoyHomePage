<?php
class Gallery extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MGallery');
		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}
	}
	function index(){
		loadView('gallery/view');
	}
	function add(){
		if(!empty($this->input->post('title'))){
			$inputArray=array(
				'g_title'=>$this->input->post('title'),
				'g_image'=>$this->input->post('image'),
				'g_type'=>$this->input->post('type')
			);
			$this->MGallery->insertGallery($inputArray);
			redirect(admin_url('gallery'));
		}
		loadView('gallery/add');
	}
	function edit($id){
		if(!empty($this->input->post('title'))){
			$inputArray=array(
				'g_title'=>$this->input->post('title'),
				'g_image'=>$this->input->post('image'),
				'g_type'=>$this->input->post('type')
			);
			$this->MGallery->updateGallery($inputArray,$id);
			redirect(admin_url('Gallery'));
		}
		$data['Gallery']=$this->MGallery->getGalleryById($id);
		loadView('gallery/edit',$data);
	}
	function view(){
		$data['data']=$this->MGallery->getGallery();
		print_r(json_encode($data));
	}
}