<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('interface_model');
		$this->load->model('konten_model');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function forgot_password()
	{
		$this->load->view('loguser/forgot_password');
	}
	public function reset_password()
	{
		$this->load->view('loguser/reset_password');
		}

    function user_login()
	{
		// Fungsi Login
		$this->form_validation->set_rules('id_user', 	'NIK / NIS','required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('password', 	'Password', 'required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('keterangan', 'Status', 	'required',array('required' => '%s Harus di isi.'));

		$id_user 	= $this->input->post('id_user');
		$password 	= md5($this->input->post('password'));
		$keterangan = $this->input->post('keterangan');
		
		if($this->form_validation->run() != FALSE) {
			$this->simple_log_user->login($id_user,$password,$keterangan);
		}else{
			$this->session->set_flashdata('failed', 'Gagal Login');
			$this->load->view('loguser/header');
			$this->load->view('loguser/log_user');
			$this->load->view('loguser/footer');
		}
	}

	function logout(){
    	$this->session->sess_destroy();
    	redirect('log_user');
  }






}
