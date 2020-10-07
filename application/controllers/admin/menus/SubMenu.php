<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubMenu extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu');
		$this->load->model('m_submenu');
		$this->simple_login->cek_login();
	}

	function index()
	{
		$data = array(
			'isi'	=>	'menus/sub_menu/sub_menu',
			'submenu'	=>	$this->m_submenu->submenu(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function tambahsubmenu()
	{
		$data = array(
			'isi'	=>	'menus/sub_menu/tambah_sub_menu',
			'menu'	=>	$this->m_menu->menu(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function add_sub_menu()
	{
		if ($this->input->post('submit')) {
			$this->m_submenu->add_sub_menu();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/menus/submenu/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/menus/menu/');
		}
	}
	function edit_sub_menu($id)
	{
		$data = array(
			'isi'			=> 'menus/sub_menu/edit_sub_menu',
			'menu'			=>	$this->m_menu->menu(),
			'edit_sub_menu'	=> 	$this->m_submenu->edit_sub_menu($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function update_sub_menu($id)
	{
		if ($this->input->post('submit')) {
			$this->m_submenu->update_sub_menu($id);
			$this->session->set_flashdata('success', 'Data berhasil di Update');
			redirect('admin/menus/submenu/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di Update');
			redirect('admin/menus/submenu/');
		}
	}

	function hapus_sub_menu($id)
	{
		$where = array('id' => $id);
		$this->m_menu->hapus_menu($where, 'web_menus');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/menus/submenu/');
	}
}
