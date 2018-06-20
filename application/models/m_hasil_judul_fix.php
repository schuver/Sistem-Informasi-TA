<?php
class m_hasil_judul_fix extends CI_Model {
	
	function get_table(){
        return $this->db->get("ta_final");
    }
    
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('tmst_ta_final'); 
    $this->db->join('tmst_dosen', 'tmst_dosen.nip = tmst_ta_final.tmst_dosen_nip', 'left');
	$this->db->join('tmst_mahasiswa', 'tmst_mahasiswa.nim = tmst_ta_final.tmst_mahasiswa_nim', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>