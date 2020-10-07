<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('konten_model');
		$this->simple_login->cek_login();
	}
	//=========================================== USERS ===========================================
	function user()
	{
		$data = array(
			'title'		=>	'Halaman Administrator',
			'isi'		=>	'user/user',
			'user'	=> 	$this->konten_model->user_show()
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function user_tambah()
	{
		$data = array(
			'title'			=> 'Halaman Administrator',
			'isi'			=> 'user/user_tambah',
		);

		$this->load->view('admin/layout/wrapper', $data);
	}

	public function user_add()
	{
		$this->form_validation->set_rules('username',	'Username', 			'required');
		$this->form_validation->set_rules('name', 		'Name', 				'required');
		$this->form_validation->set_rules('email', 		'Email', 				'required');
		$this->form_validation->set_rules('password', 	'Password', 			'required');
		$this->form_validation->set_rules('passconf', 	'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() != FALSE) {
			if ($this->input->post('submit')) {
				$this->konten_model->tambah_user();
				$this->session->set_flashdata('success', 'Save Success');
				redirect('admin/dasbor/user_tambah/');
			}
		} else {
			$this->session->set_flashdata('failed', 'Save Failed');
			$data = array(
				'title'			=> 'Halaman Administrator',
				'isi'			=> 'user/user_tambah',
			);
			$this->load->view('admin/layout/wrapper', $data);
		}
	}

	function user_edit($id)
	{
		$data = array(
			'title'			=> 'Halaman Administrator',
			'isi'			=> 'user/user_edit',
			'user_edit'		=> 	$this->konten_model->user_edit($id),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function user_update($id)
	{

		$this->form_validation->set_rules('name',	'Name',	'required');
		$this->form_validation->set_rules('email', 	'Email', 'required');

		if ($this->form_validation->run() != FALSE) {
			if ($this->input->post('submit')) {
				$this->konten_model->update_user($id);
				$this->session->set_flashdata('success', 'Update Success');
				redirect('admin/dasbor/user_edit/' . $id);
			}
		} else {
			$data = array(
				'title'			=> 'Halaman Administrator',
				'isi'			=> 'user/user_edit',
				'user_edit'		=> 	$this->konten_model->user_edit($id),
			);
			$this->load->view('admin/layout/wrapper', $data);
		}
	}

	function user_password_edit($id)
	{
		$data = array(
			'title'			=> 'Halaman Administrator',
			'isi'			=> 'user/user_password_edit',
			'user_edit'		=> 	$this->konten_model->user_edit($id),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function user_password_update($id)
	{
		$this->form_validation->set_rules('oldpassword', 	'Old Password', 		'required');
		$this->form_validation->set_rules('password', 		'Password', 			'required');
		$this->form_validation->set_rules('passconf', 		'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() != FALSE) {
			$cek_old = $this->konten_model->cek_old();
			if ($cek_old != False) {
				$this->session->set_flashdata('failed', 'Update Password failed.');
				$data = array(
					'title'			=> 'Halaman Administrator',
					'isi'			=> 'user/user_password_edit',
					'user_edit'		=> 	$this->konten_model->user_edit($id),
				);
				$this->load->view('admin/layout/wrapper', $data);
			} else {
				if ($this->input->post('submit')) {
					$this->konten_model->update_password_user($id);
					$this->session->set_flashdata('success', 'Update Success');
					redirect('admin/dasbor/user_password_edit/' . $id);
				}
			}
		} else {
			$data = array(
				'title'			=> 'Halaman Administrator',
				'isi'			=> 'user/user_password_edit',
				'user_edit'		=> 	$this->konten_model->user_edit($id),
			);
			$this->load->view('admin/layout/wrapper', $data);
		}
	}

	function user_delete($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_user($where, 'web_user');
		$this->session->set_flashdata('success', 'Delete Success');
		redirect('admin/dasbor/user/');
	}

	// ======================================================== KEPALA SEKOLAH ========================================================
	function index()
	{
		$data = array(
			'isi'		=>	'kepsek/kepala_sekolah',
			'home'	=>	$this->konten_model->kepala_sekolah_show(),
		);

		$this->load->view('admin/layout/wrapper', $data);
	}

	function kepala_sekolah_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->kepala_sekolah_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/');
		}
	}

	// ======================================================== HOME ========================================================
	function home()
	{
		$data = array(
			'isi'		=>	'dasbor_view',
			'home'	=>	$this->konten_model->home_show(),
		);

		$this->load->view('admin/layout/wrapper', $data);
	}

	function home_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->home_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/home');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/home');
		}
	}
	// ======================================================== PROFIL LENGKAP ========================================================
	function profil_lengkap()
	{
		$data = array(
			'isi'			=>	'profil/profil_lengkap',
			'profil_lengkap' =>	$this->konten_model->profil_lengkap_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function profil_lengkap_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->profil_lengkap_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/profil_lengkap/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/profil_lengkap');
		}
	}
	// ======================================================== STRUKTUR ORGANISASI ========================================================
	function struktur_organisasi()
	{
		$data = array(
			'isi'					=>	'profil/struktur_organisasi',
			'struktur_organisasi'	=>	$this->konten_model->struktur_organisasi_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function struktur_organisasi_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->struktur_organisasi_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/struktur_organisasi/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/struktur_organisasi');
		}
	}

	// ======================================================== SEJARAH ========================================================
	function sejarah()
	{
		$data = array(
			'isi'		=>	'profil/sejarah',
			'sejarah'	=>	$this->konten_model->sejarah_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function sejarah_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->sejarah_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/sejarah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/sejarah');
		}
	}

	// ======================================================== VISI DAN MISI ========================================================
	function visi_misi()
	{
		$data = array(
			'isi'		=>	'profil/visi_misi',
			'visi_misi'	=>	$this->konten_model->visi_misi_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function visi_misi_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->visi_misi_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/visi_misi/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/visi_misi');
		}
	}

	// ======================================================== FASILITAS ========================================================
	function fasilitas()
	{
		$data = array(
			'isi'		=>	'profil/fasilitas',
			'fasilitas'	=>	$this->konten_model->fasilitas_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function fasilitas_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->fasilitas_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/fasilitas/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/fasilitas');
		}
	}
	// ======================================================== BIDANG STUDI ========================================================
	function bidang_studi()
	{
		$data = array(
			'isi'			=>	'studi/studi',
			'bidang_studi'	=>	$this->konten_model->bidang_studi_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function bidang_studi_tambah()
	{
		$data = array(
			'isi'	=> 'studi/bidang_studi_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function bidang_studi_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->bidang_studi_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/bidang_studi_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/bidang_studi_tambah/');
		}
	}

	function bidang_studi_edit($id)
	{
		$data = array(
			'isi'				=> 'studi/bidang_studi_edit',
			'bidang_studi_edit'	=> 	$this->konten_model->bidang_studi_edit($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function bidang_studi_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->bidang_studi_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/bidang_studi_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/bidang_studi_edit/' . $id);
		}
	}

	function bidang_studi_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->kategori_galeri_hapus($where, 'web_studi');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/kategori_galeri/');
	}


	// ======================================================== DIREKTORI GURU ========================================================
	function direktori_guru()
	{
		$data = array(
			'isi'				=>	'direktori/guru/direktori_guru',
			'direktori_guru'	=>	$this->konten_model->direktori_guru_show(),
			'bidang_studi_list'	=>	$this->konten_model->bidang_studi_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function direktori_guru_tambah()
	{
		$data = array(
			'isi'				=> 'direktori/guru/direktori_guru_tambah',
			'bidang_studi_list'	=>	$this->konten_model->bidang_studi_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_guru_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_guru_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_guru_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_guru_tambah/');
		}
	}

	function direktori_guru_edit($id)
	{
		$data = array(
			'isi'					=> 'direktori/guru/direktori_guru_edit',
			'direktori_guru_edit'	=> 	$this->konten_model->direktori_guru_edit($id),
			'bidang_studi_list'		=>	$this->konten_model->bidang_studi_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_guru_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_guru_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_guru_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_guru_edit/' . $id);
		}
	}

	function direktori_guru_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_buku($where, 'web_direktori_guru_staf');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/direktori_guru/');
	}

	// ======================================================== DIREKTORI STAF ========================================================
	function direktori_staf()
	{
		$data = array(
			'isi'				=>	'direktori/staf/direktori_staf',
			'direktori_staf'	=>	$this->konten_model->direktori_staf_show(),
			'bidang_studi_list'	=>	$this->konten_model->bidang_studi_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function direktori_staf_tambah()
	{
		$data = array(
			'isi'				=> 'direktori/staf/direktori_staf_tambah',
			'bidang_studi_list'	=>	$this->konten_model->bidang_studi_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_staf_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_staf_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_staf_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_staf_tambah/');
		}
	}

	function direktori_staf_edit($id)
	{
		$data = array(
			'isi'					=> 'direktori/staf/direktori_staf_edit',
			'direktori_staf_edit'	=> 	$this->konten_model->direktori_staf_edit($id),
			'bidang_studi_list'		=>	$this->konten_model->bidang_studi_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_staf_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_staf_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_staf_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_staf_edit/' . $id);
		}
	}

	function direktori_staf_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_buku($where, 'web_direktori_staf_staf');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/direktori_staf/');
	}

	// ======================================================== DIREKTORI SISWA ========================================================
	function direktori_siswa()
	{
		$data = array(
			'isi'				=>	'direktori/siswa/direktori_siswa',
			'direktori_siswa'	=>	$this->konten_model->direktori_siswa_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function direktori_siswa_tambah()
	{
		$data = array(
			'isi'	=> 'direktori/siswa/direktori_siswa_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_siswa_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_siswa_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_siswa_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_siswa_tambah/');
		}
	}

	function direktori_siswa_edit($id)
	{
		$data = array(
			'isi'					=> 'direktori/siswa/direktori_siswa_edit',
			'direktori_siswa_edit'	=> 	$this->konten_model->direktori_siswa_edit($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_siswa_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_siswa_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_siswa_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_siswa_edit/' . $id);
		}
	}

	function direktori_siswa_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_buku($where, 'web_direktori_siswa');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/direktori_siswa/');
	}

	// ======================================================== DIREKTORI ALUMNI ========================================================
	function direktori_alumni()
	{
		$data = array(
			'isi'				=>	'direktori/alumni/direktori_alumni',
			'direktori_alumni'	=>	$this->konten_model->direktori_alumni_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function direktori_alumni_tambah()
	{
		$data = array(
			'isi'	=> 'direktori/alumni/direktori_alumni_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_alumni_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_alumni_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_alumni_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_alumni_tambah/');
		}
	}

	function direktori_alumni_edit($id)
	{
		$data = array(
			'isi'					=> 'direktori/alumni/direktori_alumni_edit',
			'direktori_alumni_edit'	=> 	$this->konten_model->direktori_alumni_edit($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function direktori_alumni_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->direktori_alumni_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/direktori_alumni_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/direktori_alumni_edit/' . $id);
		}
	}

	function direktori_alumni_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_buku($where, 'web_direktori_alumni');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/direktori_alumni/');
	}



	// ======================================================== PRESTASI SEKOLAH ========================================================
	function prestasi_sekolah()
	{
		$data = array(
			'isi'				=>	'prestasi/prestasi_sekolah',
			'prestasi_sekolah'	=>	$this->konten_model->prestasi_sekolah_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function prestasi_sekolah_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->prestasi_sekolah_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/prestasi_sekolah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/prestasi_sekolah');
		}
	}

	// ======================================================== PRESTASI GURU ========================================================
	function prestasi_guru()
	{
		$data = array(
			'isi'			=>	'prestasi/prestasi_guru',
			'prestasi_guru'	=>	$this->konten_model->prestasi_guru_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function prestasi_guru_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->prestasi_guru_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/prestasi_guru/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/prestasi_guru');
		}
	}
	// ======================================================== PRESTASI SISWA ========================================================
	function prestasi_siswa()
	{
		$data = array(
			'isi'			=>	'prestasi/prestasi_siswa',
			'prestasi_siswa'	=>	$this->konten_model->prestasi_siswa_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function prestasi_siswa_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->prestasi_siswa_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/prestasi_siswa/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/prestasi_siswa');
		}
	}

	// ======================================================== OSIS ========================================================
	function osis()
	{
		$data = array(
			'isi'			=>	'kesiswaan/osis',
			'osis'	=>	$this->konten_model->osis_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function osis_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->osis_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/osis/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/osis');
		}
	}

	// ======================================================== EKSTRA KULIKULER ========================================================
	function ekstra_kulikuler()
	{
		$data = array(
			'isi'			=>	'kesiswaan/ekstra_kulikuler',
			'ekstra_kulikuler'	=>	$this->konten_model->ekstra_kulikuler_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function ekstra_kulikuler_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->ekstra_kulikuler_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/ekstra_kulikuler/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/ekstra_kulikuler');
		}
	}

	// ======================================================== GALERI ========================================================
	function galeri()
	{
		$data = array(
			'isi'	=>	'galeri/galeri',
			'galeri' =>	$this->konten_model->galeri_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function galeri_tambah()
	{
		$data = array(
			'isi'		=> 'galeri/galeri_tambah',
			'kategori'	=>	$this->konten_model->kategori_galeri_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function galeri_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->galeri_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/galeri_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/galeri_tambah/');
		}
	}

	function galeri_edit($id)
	{
		$data = array(
			'isi'			=> 'galeri/galeri_edit',
			'galeri_edit'	=> 	$this->konten_model->galeri_edit($id),
			'kategori'		=>	$this->konten_model->kategori_galeri_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function galeri_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->galeri_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/galeri_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/galeri_edit/' . $id);
		}
	}

	function galeri_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->galeri_hapus($where, 'web_banner');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/galeri/');
	}

	// ======================================================== KATEGORI GALERI ========================================================
	function kategori_galeri()
	{
		$data = array(
			'isi'				=>	'galeri/kategori_galeri/kategori_galeri',
			'kategori_galeri'	=>	$this->konten_model->kategori_galeri_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function kategori_galeri_tambah()
	{
		$data = array(
			'isi'	=> 'galeri/kategori_galeri/kategori_galeri_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function kategori_galeri_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->kategori_galeri_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/kategori_galeri_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/kategori_galeri_tambah/');
		}
	}

	function kategori_galeri_edit($id)
	{
		$data = array(
			'isi'					=> 'galeri/kategori_galeri/kategori_galeri_edit',
			'kategori_galeri_edit'	=> 	$this->konten_model->kategori_galeri_edit($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function kategori_galeri_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->kategori_galeri_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/kategori_galeri_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/kategori_galeri_edit/' . $id);
		}
	}

	function kategori_galeri_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->kategori_galeri_hapus($where, 'web_banner_category');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/kategori_galeri/');
	}

	// ======================================================== SLIDE ========================================================
	function slide()
	{
		$data = array(
			'isi'	=>	'slide/slide',
			'slide' =>	$this->konten_model->slide_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function slide_tambah()
	{
		$data = array(
			'isi'	=> 'slide/slide_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function slide_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->slide_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/slide_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/slide_tambah/');
		}
	}

	function slide_edit($id)
	{
		$data = array(
			'isi'			=> 'slide/slide_edit',
			'slide_edit'	=> 	$this->konten_model->slide_edit($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function slide_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->slide_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/slide_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/slide_edit/' . $id);
		}
	}

	function slide_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_buku($where, 'web_slide');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/slide/');
	}

	// ======================================================== LINK TERKAIT ========================================================
	function link()
	{
		$data = array(
			'isi'	=>	'link/link',
			'link' =>	$this->konten_model->link_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function link_tambah()
	{
		$data = array(
			'isi'	=> 'link/link_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function link_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->link_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/link_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/link_tambah/');
		}
	}

	function link_edit($id)
	{
		$data = array(
			'isi'			=> 'link/link_edit',
			'link_edit'	=> 	$this->konten_model->link_edit($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function link_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->link_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/link_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/link_edit/' . $id);
		}
	}

	function link_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_buku($where, 'web_link');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/link/');
	}

	// ======================================================== KONTAK ========================================================
	function kontak()
	{
		$data = array(
			'isi'	=>	'kontak/kontak',
			'kontak' =>	$this->konten_model->kontak_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function kontak_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->kontak_hapus($where, 'web_kontak');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/kontak/');
	}


	// ======================================================== KATEGORI ARTIKEL ========================================================
	function kategori_artikel()
	{
		$data = array(
			'isi'				=>	'artikel/kategori_artikel/kategori_artikel',
			'kategori_artikel'	=>	$this->konten_model->kategori_artikel_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function kategori_artikel_tambah()
	{
		$data = array(
			'isi'	=> 'artikel/kategori_artikel/kategori_artikel_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function kategori_artikel_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->kategori_artikel_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/kategori_artikel_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/kategori_artikel_tambah/');
		}
	}

	function kategori_artikel_edit($id)
	{
		$data = array(
			'isi'					=> 'artikel/kategori_artikel/kategori_artikel_edit',
			'kategori_artikel_edit'	=> 	$this->konten_model->kategori_artikel_edit($id),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function kategori_artikel_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->kategori_artikel_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/kategori_artikel_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/kategori_artikel_edit/' . $id);
		}
	}

	function kategori_artikel_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->kategori_artikel_hapus($where, 'web_article_category');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/kategori_artikel/');
	}



	// ======================================================== ARTIKEL ========================================================
	function artikel()
	{
		$data = array(
			'isi'		=>	'artikel/artikel',
			'artikel'	=>	$this->konten_model->artikel_show(),
			'kategori'	=>	$this->konten_model->kategori_artikel_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function artikel_tambah()
	{
		$data = array(
			'isi'		=> 'artikel/artikel_tambah',
			'kategori'	=>	$this->konten_model->kategori_artikel_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function artikel_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->artikel_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/artikel_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/artikel_tambah/');
		}
	}

	function artikel_edit($id)
	{
		$data = array(
			'isi'			=> 'artikel/artikel_edit',
			'artikel_edit'	=> 	$this->konten_model->artikel_edit($id),
			'kategori'		=>	$this->konten_model->kategori_artikel_list_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function artikel_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->artikel_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/artikel_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/artikel_edit/' . $id);
		}
	}

	function artikel_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->artikel_hapus($where, 'web_article');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/artikel/');
	}


	// ======================================================== BERITA ========================================================
	function berita()
	{
		$data = array(
			'isi'	=>	'artikel/berita',
			'berita' =>	$this->konten_model->berita_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}
	function berita_tambah()
	{
		$data = array(
			'isi'	=> 'artikel/berita_tambah',
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function berita_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->berita_tambah();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/berita_tambah/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/berita_tambah/');
		}
	}

	function berita_edit($id)
	{
		$data = array(
			'isi'			=> 'artikel/berita_edit',
			'berita_edit'	=> 	$this->konten_model->berita_edit($id)
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function berita_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->berita_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/berita_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/berita_edit/' . $id);
		}
	}

	function berita_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_buku($where, 'web_banner');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('admin/dasbor/berita/');
	}


	// ======================================================== PENGATURAN ========================================================
	function pengaturan()
	{
		$data = array(
			'isi'		=>	'pengaturan/pengaturan',
			'pengaturan' =>	$this->konten_model->pengaturan_show(),
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	function pengaturan_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->pengaturan_update($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('admin/dasbor/pengaturan');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('admin/dasbor/pengaturan/');
		}
	}
}
