<?php
function admin_url($link=''){
    return base_url('admin/'.$link);
}

function getViewName(){
	return '';
}

function loadAdminView($viewname,$data=''){
	$ci=& get_instance();
	$name='admin/';
	$ci->load->view($name.'includes/header',$data);
	$ci->load->view($name.'includes/nav',$data);
	$ci->load->view($name.'includes/top-nav',$data);
	$ci->load->view($name.$viewname,$data);
	$ci->load->view($name.'includes/footer',$data);
}

function loadDefaultView($viewname,$data=''){
	$ci=& get_instance();
	$name=getViewName();
	$ci->load->view($name.'includes/header', $data);
	$ci->load->view($name.$viewname, $data);
	$ci->load->view($name.'includes/footer', $data);
}

function loadView($viewname,$data=''){
	$ci=& get_instance();
	$portion=$ci->uri->segment(1);
	switch($portion){
		case 'admin':
			loadAdminView($viewname,$data);
		break;
		default:
			loadDefaultView($viewname,$data);
	}
}

function pre($data='',$death=false){
  echo "<pre>";
  $death?die(pre($data)):print_r($data);
  echo "</pre>";
}

function getLastDate($format='Y-m-d H:i:s'){
	$path=FCPATH;
	echo date($format, filemtime($path));
}

function setSession(){
	$ci =& get_instance();
        $array = array(
            "adminLoggedIn" => "1",
            "loggedInStatus" => 'loggedInStatus',
            "loggedInUser" => 'loggedInUser',
            "loggedUser" =>'user'
        );
        $ci->session->set_userdata($array);       

}
