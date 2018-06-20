<?php
class m_hasil_review extends CI_Model {
	
	function get_table(){
        return $this->db->get("td_review");
    }
    
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('td_review'); 
    $this->db->join('tmst_ta', 'tmst_ta.id = td_review.tmst_ta_id', 'left');
	$this->db->join('tmst_mahasiswa', 'tmst_mahasiswa.nim = tmst_ta.tmst_mahasiswa_nim', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>