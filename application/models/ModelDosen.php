<?php  
 
class ModelDosen extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this ->load ->database(); 
	}

public function get_user(){
	$this->db->join('tmst_ta','tmst_ta.tmst_dosen_nip = tmst_dosen.nip');
	$this->db->from('tmst_dosen');
	return $this->db->get()->result();

}

public function get_nim_mahasiswa(){
	$this->db->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_ta.tmst_mahasiswa_nim');
	$this->db->from('tmst_ta');
	return $this->db->get()->row_array();

}

public function get_datados(){
		$datados = $this->db->get('tmst_ta');
		return $datados;
	}

} 