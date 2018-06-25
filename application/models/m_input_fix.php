<?php

class m_input_fix extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function get_dosen(){
		return $this ->db ->get("tmst_dosen");
	}

	public function get_penelitian(){
		return $this ->db ->get("tmst_penelitian");
	}

    public function get_jadwal_awal(){
        $this ->db ->select('tgl_awal');
		$this ->db ->from('td_tanggal');

		$query = $this ->db ->get()->row_array();

		return $query;
    }

    public function get_jadwal_akhir(){
        $this ->db ->select('tgl_akhir');
		$this ->db ->from('td_tanggal');

		$query = $this ->db ->get()->row_array();

		return $query;
    }

	public function get_ta($id){
        $this ->db ->select('*');
		$this ->db ->from('tmst_ta_final');
		$this->db ->where('tmst_mahasiswa_nim',$id);

		$query = $this ->db ->get();

		return $query;
	}

}

?>