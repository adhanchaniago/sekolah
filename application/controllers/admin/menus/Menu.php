<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('konten_model');
		$this->load->model('m_menu');
		$this->simple_login->cek_login();
	}

	function index()
	{
		$data = array(
			'isi'	=>	'menus/menu/menu',
			'menu'	=>	$this->m_menu->menu(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function tambahmenu()
	{
		$data = array(
			'isi'	=>	'menus/menu/tambah_menu',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function add_menu()
	{
		if ($this->input->post('submit')) {
			$this->m_menu->add_menu();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/menus/menu/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/menus/menu/');
		}
	}
	function edit_menu($id)
	{
		$data = array(
			'isi'		=> 'menus/menu/edit_menu',
			'edit_menu'	=> 	$this->m_menu->edit_menu($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function update_menu($id)
	{
		if ($this->input->post('submit')) {
			$this->m_menu->update_menu($id);
			$this->session->set_flashdata('success', 'Data berhasil di Update');
			redirect('admin/menus/menu/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di Update');
			redirect('admin/menus/menu/');
		}
	}

	function hapus_menu($id)
	{
		$where = array('id' => $id);
		$this->m_menu->hapus_menu($where, 'web_menus');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/menus/menu/');
	}
}
