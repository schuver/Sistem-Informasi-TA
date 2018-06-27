<?php
class m_daftar_judul extends CI_Model {
	
	function get_table(){
        return $this->db->get("tmst_penelitian");
    }
    
	function get_data(){
	
	$this->db->select('tmst_penelitian.*, tmst_dosen.nama'); 
    $this->db->from('tmst_penelitian'); 
    $this->db->join('tmst_dosen', 'tmst_dosen.nip = tmst_penelitian.tmst_dosen_nip', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>