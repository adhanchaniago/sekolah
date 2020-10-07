<?php
class M_Menu extends CI_Model
{

	function menu()
	{
		$data = $this->db->query("SELECT * FROM web_menus where menu_type = 'links' ;");
		return $data->result_array();
	}

	function add_menu()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"menu_title"  	=> $this->input->post('menu_title'),
			"menu_url"  	=> $this->input->post('menu_url'),
			"menu_target" 	=> $this->input->post('menu_target'),
			"menu_type" 	=> 'links',
			"created_at" 	=> date('Y-m-d H:i:s'),
		);
		$this->db->insert('web_menus', $data);
	}

	function edit_menu($id)
	{
		$data = $this->db->query("SELECT * FROM web_menus where id='$id'");
		return $data->result_array();
	}

	function update_menu($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"menu_title"  	=> $this->input->post('menu_title'),
			"menu_url"  	=> $this->input->post('menu_url'),
			"menu_target" 	=> $this->input->post('menu_target'),
			"updated_at" 	=> date('Y-m-d H:i:s'),
		);
		$this->db->where('id', $id);
		$this->db->update('web_menus', $data);
	}

	function hapus_menu($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
