<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Interface_model');
        $this->visitor->cek_visitor();
    }
	public function index()
	{
		$data['web'] = $this->Interface_model->pengaturan()->row();
		

		$this->load->view('front/head',$data);
		$this->load->view('front/header');
		$this->load->view('front/kontak');
		$this->load->view('front/footer2');

	}

	function send()
    {
	    if($this->input->post('submit')){ 
			$this->Interface_model->kontak_send(); 
	    	$this->session->set_flashdata('success', 'Data berhasil di simpan');
	    	redirect('kontak/');
	    }else{
	    	$this->session->set_flashdata('failed', 'Data gagal di simpan');
	    	redirect('kontak/');
	    }
    }
}
