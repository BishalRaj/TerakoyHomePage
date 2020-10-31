<?php
class Testimonial extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('MTestimonial');
		setSession();
		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}
	}


	function index(){
		loadView('testimonial/view');
	}


	function add(){
		if(!empty($this->input->post('name'))){
			$inputArray=array(
				'tes_name'=>$this->input->post('name'),
				'tes_position'=>$this->input->post('position'),
				'tes_desc'=>$this->input->post('desc'),
				'tes_image'=>$this->input->post('image'),
				'tes_status'=>1
			);
			$this->MTestimonial->insertTestimonial($inputArray);
			redirect(admin_url('testimonial'));
		}
		loadView('testimonial/add');
	}


	function edit($id){
		if(!empty($this->input->post('name'))){
			$inputArray=array(
				'tes_name'=>$this->input->post('name'),
				'tes_position'=>$this->input->post('position'),
				'tes_desc'=>$this->input->post('desc'),
				'tes_image'=>$this->input->post('image'),
				'tes_status'=>$this->input->post('status')

			);
			$this->MTestimonial->updateTestimonial($inputArray,$id);
			redirect(admin_url('testimonial'));
		}
		$data['Testimonial']=$this->MTestimonial->getTestimonialById($id);
		loadView('testimonial/edit',$data);
	}

	function view(){
		$data['data']=$this->MTestimonial->getTestimonial();
		print_r(json_encode($data));
	}


}