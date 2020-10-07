<?php
class Konten_model extends CI_Model
{


	// ========================================= USERS =========================================
	function user_show()
	{
		$data = $this->db->query("SELECT * FROM web_user;");
		return $data->result_array();
	}

	function tambah_user()
	{
		$data = array(
			"username"    => $this->input->post('username'),
			"nama"        => $this->input->post('name'),
			"email"       => $this->input->post('email'),
			"password"    => md5($this->input->post('password')),
			"status"      => $this->input->post('status'),
		);
		$this->db->insert('web_user', $data);
	}

	function user_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_user where id='$id'");
		return $data->result_array();
	}

	function update_user($id)
	{
		$data = array(
			"nama"        => $this->input->post('name'),
			"email"       => $this->input->post('email'),
			"status"      => $this->input->post('status'),
		);
		$this->db->where('id', $id);
		$this->db->update('web_user', $data);
	}

	public function cek_old()
	{
		$old = md5($this->input->post('oldpassword'));
		$this->db->where('password', $old);
		$query = $this->db->get('web_user');
		return $query->result();;
	}

	function update_password_user($id)
	{
		$data = array(
			"password"    => md5($this->input->post('password')),
		);
		$this->db->where('id', $id);
		$this->db->update('web_user', $data);
	}


	function hapus_user($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= KEPALA SEKOLAH =========================================
	function kepala_sekolah_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='12';");
		return $data->result_array();
	}

	function kepala_sekolah_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"image"       => $this->input->post('image'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}

	// ========================================= HOME =========================================
	function home_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='1';");
		return $data->result_array();
	}


	function home_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function home_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function home_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= PROFIL LENGKAP =========================================
	function profil_lengkap_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='2';");
		return $data->result_array();
	}


	function profil_lengkap_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function profil_lengkap_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function profil_lengkap_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	// ========================================= STRUKTUR ORGANISASI =========================================
	function struktur_organisasi_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='3';");
		return $data->result_array();
	}


	function struktur_organisasi_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function struktur_organisasi_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function struktur_organisasi_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= STRUKTUR ORGANISASI =========================================
	function sejarah_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='4';");
		return $data->result_array();
	}


	function sejarah_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function sejarah_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function sejarah_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= VISI DAN MISI =========================================
	function visi_misi_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='5';");
		return $data->result_array();
	}


	function visi_misi_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function visi_misi_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function visi_misi_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= FASILITAS =========================================
	function fasilitas_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='6';");
		return $data->result_array();
	}


	function fasilitas_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function fasilitas_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function fasilitas_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= BIDANG STUDI =========================================
	function bidang_studi_show()
	{
		$data = $this->db->query("SELECT * FROM web_studi");
		return $data->result_array();
	}

	function bidang_studi_list_show()
	{
		$data = $this->db->query("SELECT * FROM web_studi where status='1'");
		return $data->result_array();
	}

	function bidang_studi_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"  => $this->input->post('name'),
			"slug"  => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('name'))),
			"status" => $this->input->post('status'),
		);
		$this->db->insert('web_studi', $data);
	}

	function bidang_studi_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_studi where id='$id'");
		return $data->result_array();
	}

	function bidang_studi_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"  => $this->input->post('name'),
			"slug"  => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('name'))),
			"status" => $this->input->post('status'),
		);
		$this->db->where('id', $id);
		$this->db->update('web_studi', $data);
	}


	function bidang_studi_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	// ========================================= DIREKTORI GURU =========================================
	function direktori_guru_show()
	{
		$data = $this->db->query("SELECT * FROM web_direktori_guru_staf WHERE kategori='1'");
		return $data->result_array();
	}

	function direktori_guru_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"nama"          => $this->input->post('nama'),
			"nip/nis"       => $this->input->post('nip/nis'),
			"studi"         => $this->input->post('studi'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"kategori"      => '1',
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"created_at"    => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_direktori_guru_staf', $data);
	}

	function direktori_guru_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_direktori_guru_staf where id='$id'");
		return $data->result_array();
	}

	function direktori_guru_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"nama"          => $this->input->post('nama'),
			"nip/nis"       => $this->input->post('nip/nis'),
			"studi"         => $this->input->post('studi'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"kategori"      => '1',
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"updated_at"    => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_direktori_guru_staf', $data);
	}

	function direktori_guru_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= DIREKTORI STAF =========================================
	function direktori_staf_show()
	{
		$data = $this->db->query("SELECT * FROM web_direktori_guru_staf WHERE kategori='2'");
		return $data->result_array();
	}

	function direktori_staf_tambah()
	{
		$data = array(
			"nama"          => $this->input->post('nama'),
			"nip/nis"       => $this->input->post('nip/nis'),
			"studi"         => $this->input->post('studi'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"kategori"      => '2',
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"created_at"    => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_direktori_guru_staf', $data);
	}

	function direktori_staf_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_direktori_guru_staf where id='$id'");
		return $data->result_array();
	}

	function direktori_staf_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"nama"          => $this->input->post('nama'),
			"nip/nis"       => $this->input->post('nip/nis'),
			"studi"         => $this->input->post('studi'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"kategori"      => '2',
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"updated_at"    => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_direktori_guru_staf', $data);
	}


	function direktori_staf_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= DIREKTORI SISWA =========================================
	function direktori_siswa_show()
	{
		$data = $this->db->query("SELECT * FROM web_direktori_siswa");
		return $data->result_array();
	}

	function direktori_siswa_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"nama"          => $this->input->post('nama'),
			"nis"           => $this->input->post('nis'),
			"kelas"         => $this->input->post('kelas'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"created_at"    => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_direktori_siswa', $data);
	}

	function direktori_siswa_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_direktori_siswa where id='$id'");
		return $data->result_array();
	}

	function direktori_siswa_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"nama"          => $this->input->post('nama'),
			"nis"           => $this->input->post('nis'),
			"kelas"         => $this->input->post('kelas'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"updated_at"    => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_direktori_siswa', $data);
	}


	function direktori_siswa_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	// ========================================= DIREKTORI ALUMNI =========================================
	function direktori_alumni_show()
	{
		$data = $this->db->query("SELECT * FROM web_direktori_alumni");
		return $data->result_array();
	}

	function direktori_alumni_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"nama"          => $this->input->post('nama'),
			"tahun_lulus"   => $this->input->post('tahun_lulus'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"created_at"    => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_direktori_alumni', $data);
	}

	function direktori_alumni_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_direktori_alumni where id='$id'");
		return $data->result_array();
	}

	function direktori_alumni_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"nama"          => $this->input->post('nama'),
			"tahun_lulus"   => $this->input->post('tahun_lulus'),
			"tempat"        => $this->input->post('tempat'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"foto"          => $this->input->post('foto'),
			"status"        => $this->input->post('status'),
			"updated_at"    => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_direktori_alumni', $data);
	}


	function direktori_alumni_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	// ========================================= PRESTASI SEKOLAH =========================================
	function prestasi_sekolah_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='7';");
		return $data->result_array();
	}


	function prestasi_sekolah_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function prestasi_sekolah_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function prestasi_sekolah_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= PRESTASI GURU =========================================
	function prestasi_guru_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='8';");
		return $data->result_array();
	}


	function prestasi_guru_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function prestasi_guru_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function prestasi_guru_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= PRESTASI SISWA =========================================
	function prestasi_siswa_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='9';");
		return $data->result_array();
	}


	function prestasi_siswa_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function prestasi_siswa_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function prestasi_siswa_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= OSIS =========================================
	function osis_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='10';");
		return $data->result_array();
	}


	function osis_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function osis_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function osis_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= EKSTRA KULIKULER =========================================
	function ekstra_kulikuler_show()
	{
		$data = $this->db->query("SELECT * FROM web_page WHERE id='11';");
		return $data->result_array();
	}


	function ekstra_kulikuler_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_page where id='$id'");
		return $data->result_array();
	}

	function ekstra_kulikuler_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"        => $this->input->post('name'),
			"description" => $this->input->post('description'),
			"status"      => $this->input->post('status'),
			"updated_at"  => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_page', $data);
	}


	function ekstra_kulikuler_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= GALERI =========================================
	function galeri_show()
	{
		$data = $this->db->query("SELECT * FROM web_banner");
		return $data->result_array();
	}

	function galeri_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"              => $this->input->post('name'),
			"banner_category_id" => $this->input->post('banner_category_id'),
			"description"       => $this->input->post('description'),
			"image"             => $this->input->post('image'),
			"status"            => $this->input->post('status'),
			"created_at"        => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_banner', $data);
	}

	function galeri_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_banner where id='$id'");
		return $data->result_array();
	}

	function galeri_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"              => $this->input->post('name'),
			"banner_category_id" => $this->input->post('banner_category_id'),
			"description"       => $this->input->post('description'),
			"image"             => $this->input->post('image'),
			"status"            => $this->input->post('status'),
			"updated_at"        => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_banner', $data);
	}


	function galeri_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= KATEGORI GALERI =========================================
	function kategori_galeri_show()
	{
		$data = $this->db->query("SELECT * FROM web_banner_category");
		return $data->result_array();
	}

	function kategori_galeri_list_show()
	{
		$data = $this->db->query("SELECT * FROM web_banner_category where status='1'");
		return $data->result_array();
	}

	function kategori_galeri_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"  => $this->input->post('name'),
			"thum"  => $this->input->post('thum'),
			"slug"  => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('name'))),
			"status" => $this->input->post('status'),
		);
		$this->db->insert('web_banner_category', $data);
	}

	function kategori_galeri_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_banner_category where id='$id'");
		return $data->result_array();
	}

	function kategori_galeri_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"  => $this->input->post('name'),
			"thum"  => $this->input->post('thum'),
			"slug"  => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('name'))),
			"status" => $this->input->post('status'),
		);
		$this->db->where('id', $id);
		$this->db->update('web_banner_category', $data);
	}


	function kategori_galeri_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= SLIDE =========================================
	function slide_show()
	{
		$data = $this->db->query("SELECT * FROM web_slide");
		return $data->result_array();
	}

	function slide_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"              => $this->input->post('name'),
			"image"             => $this->input->post('image'),
			"description"       => $this->input->post('description'),
			"status"            => $this->input->post('status'),
			"created_at"        => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_slide', $data);
	}

	function slide_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_slide where id='$id'");
		return $data->result_array();
	}

	function slide_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"              => $this->input->post('name'),
			"image"             => $this->input->post('image'),
			"description"       => $this->input->post('description'),
			"status"            => $this->input->post('status'),
			"updated_at"        => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_slide', $data);
	}


	function slide_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= LINK =========================================
	function link_show()
	{
		$data = $this->db->query("SELECT * FROM web_link");
		return $data->result_array();
	}

	function link_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"              => $this->input->post('name'),
			"image"             => $this->input->post('image'),
			"url"               => $this->input->post('url'),
			"status"            => $this->input->post('status'),
			"created_at"        => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_link', $data);
	}

	function link_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_link where id='$id'");
		return $data->result_array();
	}

	function link_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"              => $this->input->post('name'),
			"image"             => $this->input->post('image'),
			"url"               => $this->input->post('url'),
			"status"            => $this->input->post('status'),
			"updated_at"        => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_link', $data);
	}


	function link_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= KONTAK =========================================
	function kontak_show()
	{
		$data = $this->db->query("SELECT * FROM web_kontak");
		return $data->result_array();
	}

	function kontak_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= KATEGORI ARTIKEL =========================================
	function kategori_artikel_show()
	{
		$data = $this->db->query("SELECT * FROM web_article_category");
		return $data->result_array();
	}

	function kategori_artikel_list_show()
	{
		$data = $this->db->query("SELECT * FROM web_article_category where status='1'");
		return $data->result_array();
	}

	function kategori_artikel_tambah()
	{
		$data = array(
			"name"  => $this->input->post('name'),
			"slug"  => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('name'))),
			"status" => $this->input->post('status'),
		);
		$this->db->insert('web_article_category', $data);
	}

	function kategori_artikel_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_article_category where id='$id'");
		return $data->result_array();
	}

	function kategori_artikel_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"name"  => $this->input->post('name'),
			"slug"  => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('name'))),
			"status" => $this->input->post('status'),
		);
		$this->db->where('id', $id);
		$this->db->update('web_article_category', $data);
	}


	function kategori_artikel_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	// ========================================= ARTIKEL =========================================
	function artikel_show()
	{
		$data = $this->db->query("SELECT * FROM web_article");
		return $data->result_array();
	}

	function artikel_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"article_category"  => $this->input->post('article_category'),
			"name"              => $this->input->post('name'),
			"slug"              => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', $this->input->post('name')),
			"description"       => $this->input->post('description'),
			"image"             => $this->input->post('image'),
			"status"            => $this->input->post('status'),
			"created_at"        => date('Y-m-d H:i:s')
		);
		$this->db->insert('web_article', $data);
	}

	function artikel_edit($id)
	{
		$data = $this->db->query("SELECT * FROM web_article where id='$id'");
		return $data->result_array();
	}

	function artikel_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"article_category"  => $this->input->post('article_category'),
			"name"              => $this->input->post('name'),
			"slug"              => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', $this->input->post('name')),
			"description"       => $this->input->post('description'),
			"image"             => $this->input->post('image'),
			"status"            => $this->input->post('status'),
			"updated_at"        => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_article', $data);
	}


	function artikel_hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= PENGATURAN =========================================
	function pengaturan_show()
	{
		$data = $this->db->query("SELECT * FROM web_pengaturan");
		return $data->result_array();
	}

	function pengaturan_update($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"url_web"       => $this->input->post('url_web'),
			"title"         => $this->input->post('title'),
			"keywords"      => $this->input->post('keywords'),
			"description"   => $this->input->post('description'),
			"icon"          => $this->input->post('icon'),
			"logo"          => $this->input->post('logo'),
			"bg_home"       => $this->input->post('bg_home'),
			"bg_menu"       => $this->input->post('bg_menu'),
			"alamat"        => $this->input->post('alamat'),
			"telfon"        => $this->input->post('telfon'),
			"email"         => $this->input->post('email'),
			"updated_at"    => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('web_pengaturan', $data);
	}
}
