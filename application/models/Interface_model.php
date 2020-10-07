<?php
class Interface_model extends CI_Model{

    public function pengaturan(){
        return $this->db->get('web_pengaturan');
    } 
    public function home(){
        return $this->db->get_where('web_page',array('id'=>'1'));
    }
    public function profil_lengkap(){
        return $this->db->get_where('web_page',array('id'=>'2'));
    }
    public function struktur_organisasi(){
        return $this->db->get_where('web_page',array('id'=>'3'));
    }
    public function sejarah(){
        return $this->db->get_where('web_page',array('id'=>'4'));
    }
    public function visi_misi(){
        return $this->db->get_where('web_page',array('id'=>'5'));
    }
    public function fasilitas(){
        return $this->db->get_where('web_page',array('id'=>'6'));
    }
    public function prestasi_sekolah(){
        return $this->db->get_where('web_page',array('id'=>'7'));
    }
    public function prestasi_guru(){
        return $this->db->get_where('web_page',array('id'=>'8'));
    }
    public function prestasi_siswa(){
        return $this->db->get_where('web_page',array('id'=>'9'));
    }
    public function osis(){
        return $this->db->get_where('web_page',array('id'=>'10'));
    }
    public function ekstra_kulikuler(){
        return $this->db->get_where('web_page',array('id'=>'11'));
    }

    function album(){
        $data = $this->db->query("SELECT * FROM web_banner_category WHERE status='1';");
        return $data->result_array();
    }

    function v_album($slug){
        $data = $this->db->query("SELECT * FROM web_banner WHERE banner_category_id ='$slug' AND status='1';");
        return $data->result_array();
    }
    
    





    public function kepsek(){
        return $this->db->get_where('web_page',array('id'=>'12'));
    } 
    public function kepsek_show($id){
        $data = $this->db->query("SELECT * FROM web_page WHERE id ='$id';");
        return $data->result_array();
    } 


    function guru(){
        $data = $this->db->query("SELECT * FROM web_direktori_guru_staf WHERE kategori='1' AND status='1';");
        return $data->result_array();
    }
    function staf(){
        $data = $this->db->query("SELECT * FROM web_direktori_guru_staf WHERE kategori='2' AND status='1';");
        return $data->result_array();
    }
    function siswa(){
        $data = $this->db->query("SELECT * FROM web_direktori_siswa WHERE status='1';");
        return $data->result_array();
    }
    function alumni(){
        $data = $this->db->query("SELECT * FROM web_direktori_alumni WHERE status='1';");
        return $data->result_array();
    }





    function slide(){
        $data = $this->db->query("SELECT * FROM web_slide WHERE status='1';");
        return $data->result_array();
    }

    function berita(){
        $data = $this->db->query("SELECT * FROM web_article WHERE article_category='2' AND status='1';");
        return $data->result_array();
    }

    function v_artikel($slug){
        $data = $this->db->query("SELECT * FROM web_article WHERE slug ='$slug';");
        return $data->result_array();
    }
    
    function informasi(){
        $data = $this->db->query("SELECT * FROM web_article WHERE article_category='1' AND status='1';");
        return $data->result_array();
    }
    function link(){
        $data = $this->db->query("SELECT * FROM web_link WHERE status='1';");
        return $data->result_array();
    }

    function kontak_send()
    {
        date_timezone_set('Asia/Jakarta');
        $data = array(
            "name"          => $this->input->post('nama'),
            "email"         => $this->input->post('email'),
            "description"   => $this->input->post('description'),
            "created_at"    => date('Y-m-d H:i:s')
        );
    $this->db->insert('web_kontak', $data);
    }







    
 }