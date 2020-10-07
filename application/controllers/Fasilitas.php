<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Interface_model');
        $this->visitor->cek_visitor();
    }
	public function index()
	{
		$data['web'] 		= $this->Interface_model->pengaturan()->row();
		$data['kepsek']		= $this->Interface_model->kepsek()->row();
		$data['berita']		= $this->Interface_model->berita();
		$data['informasi']	= $this->Interface_model->informasi();
		$data['link']		= $this->Interface_model->link();
		$data['konten']		= $this->Interface_model->fasilitas()->row();
		

		$this->load->view('front/head', 	$data);
		$this->load->view('front/header', 	$data);
		$this->load->view('front/fasilitas',$data);
		$this->load->view('front/footer',	$data);

	}
}
