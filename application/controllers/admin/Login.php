<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){
	
		$username 	= $this->input->post('username');
		$password 	= md5($this->input->post('password'));
		$this->form_validation->set_rules('username', 	'Username',	'required',array('required' => '<p class="text-danger"> Please enter a %s.</p>'));
		$this->form_validation->set_rules('password', 	'Password', 'required',array('required' => '<p class="text-danger"> Please enter a %s.</p>'));

		if($this->form_validation->run() != FALSE) {
			$this->simple_login->login($username,$password);
		}
		$this->load->view('admin/login');
	}

	function signout(){
    	$this->session->sess_destroy();
    	redirect('admin/login/');
  	}


}
