<?php
class Blogs extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('MBlogs');

		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}
	}

	

	function index(){
			loadView('blogs/view');
	
	}
	function add(){
		if(!empty($this->input->post('title'))){
			$inputArray=array(
				'b_title'=>$this->input->post('title'),
				'b_alias'=>$this->input->post('alias'),
				'b_content'=>$this->input->post('content'),
				'b_status'=>1
			);
			$this->MBlogs->insertBlog($inputArray);
			redirect(admin_url('blogs'));
		}
		loadView('blogs/add');
	}
	function edit($id){
		if(!empty($this->input->post('name'))){
			$inputArray=array(
				'b_title'=>$this->input->post('title'),
				'b_alias'=>$this->input->post('alias'),
				'b_content'=>$this->input->post('content'),
				
			);
			$this->MBlogs->updateBlog($inputArray,$id);
			redirect(admin_url('blogs'));
		}
		$data['Blog']=$this->MBlogs->getBlogById($id);
		loadView('blogs/edit',$data);
	}
}