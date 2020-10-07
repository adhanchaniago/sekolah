<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Interface_model');
        $this->visitor->cek_visitor();
    }
	public function index()
	{
		$data['web'] = $this->Interface_model->pengaturan()->row();
		

		$this->load->view('front/head',$data);
		$this->load->view('front/header',$data);
		$this->load->view('front/informasi');
		$this->load->view('front/footer');

	}

	public function view($slug)
	{
		$data['web'] 		= $this->Interface_model->pengaturan()->row();
		$data['kepsek']		= $this->Interface_model->kepsek()->row();
		$data['berita']		= $this->Interface_model->berita();
		$data['informasi']	= $this->Interface_model->informasi();
		$data['link']		= $this->Interface_model->link();
		$data['v_artikel']	= $this->Interface_model->v_artikel($slug);
		

		$this->load->view('front/head',$data);
		$this->load->view('front/header');
		$this->load->view('front/informasi',$data);
		$this->load->view('front/footer');

	}
}
