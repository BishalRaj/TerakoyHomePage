<?php
class Team extends CI_Controller{


	function __construct(){
		parent::__construct();

		if($this->session->userdata('user_id') == '') {
			$this->session->set_flashdata('err_message','You must Login first');
			redirect(base_url('login'));
		}

		$this->load->database();
		$this->load->model('MTeam');
	}


	function index(){
		loadView('team/view');
	}


	function add(){
		if(!empty($this->input->post('name'))){
			$inputArray=array(
				't_name'=>$this->input->post('name'),
				't_position'=>$this->input->post('position'),
				't_image'=>$this->input->post('image'),
				't_branch'=>$this->input->post('branch'),
				't_status'=>1
			);
			$this->MTeam->insertTeam($inputArray);
			redirect(admin_url('team'));
		}
		loadView('team/add');
	}


	function edit($id){
		if(!empty($this->input->post('name'))){
			$inputArray=array(
				't_name'=>$this->input->post('name'),
				't_position'=>$this->input->post('position'),
				't_image'=>$this->input->post('image'),
				't_branch'=>$this->input->post('branch'),
				't_status'=>$this->input->post('status')

			);
			$this->MTeam->updateTeam($inputArray,$id);
			redirect(admin_url('team'));
		}
		$data['Team']=$this->MTeam->getTeamById($id);
		loadView('team/edit',$data);
	}

	function view(){
		$data['data']=$this->MTeam->getTeam();
		print_r(json_encode($data));
	}


}