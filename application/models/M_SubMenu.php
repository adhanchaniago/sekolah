<?php
class M_SubMenu extends CI_Model
{

	function submenu()
	{
		$data = $this->db->query("SELECT * FROM web_menus where menu_type = 'modules'");
		return $data->result_array();
	}

	function add_sub_menu()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"menu_title"  		=> $this->input->post('menu_title'),
			"menu_url"  		=> str_replace(array(" "), '-', strtolower($this->input->post('menu_title'))),
			"menu_target" 		=> $this->input->post('menu_target'),
			"menu_type" 		=> 'modules',
			"menu_parent_id" 	=> $this->input->post('menu_parent_id'),
			"created_at" 		=> date('Y-m-d H:i:s'),
		);
		$this->db->insert('web_menus', $data);
	}

	function edit_sub_menu($id)
	{
		$data = $this->db->query("SELECT * FROM web_menus where id='$id'");
		return $data->result_array();
	}

	function update_sub_menu($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$parent_id = $this->input->post('menu_parent_id');
		if ($parent_id == '0') {
			$menu_parent_id = '#';
		} else {
			$menu_parent_id = $this->input->post('menu_parent_id');
		};
		$data = array(
			"menu_title"  		=> $this->input->post('menu_title'),
			"menu_url"  		=> str_replace(array(" "), '-', strtolower($this->input->post('menu_title'))),
			"menu_target" 		=> $this->input->post('menu_target'),
			"menu_type" 		=> 'modules',
			"menu_parent_id" 	=> 	$this->input->post('menu_parent_id'),
			"updated_at" 		=> date('Y-m-d H:i:s'),
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
