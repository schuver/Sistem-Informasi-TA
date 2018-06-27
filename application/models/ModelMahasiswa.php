<?php

class ModelMahasiswa extends CI_Model{

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

	public function get_jadwal(){
		return $this ->db ->get("td_tanggal");	
	}

    public function get_jadwal_awal(){
        $this ->db ->select('tgl_awal');
		$this ->db ->from('td_tanggal');
		$this ->db ->where('keterangan','Awal');

		$query = $this ->db ->get()->row_array();

		return $query;
    }

    public function get_jadwal_akhir(){
        $this ->db ->select('tgl_akhir');
		$this ->db ->from('td_tanggal');
		$this ->db ->where('keterangan','Awal');

		$query = $this ->db ->get()->row_array();

		return $query;
    }

    public function get_jadwal_awal_final(){
        $this ->db ->select('tgl_awal');
		$this ->db ->from('td_tanggal');
		$this ->db ->where('keterangan','Final');

		$query = $this ->db ->get()->row_array();

		return $query;
    }

    public function get_jadwal_akhir_final(){
        $this ->db ->select('tgl_akhir');
		$this ->db ->from('td_tanggal');
		$this ->db ->where('keterangan','Final');

		$query = $this ->db ->get()->row_array();

		return $query;
    }

	public function get_ta($id){
        $this ->db ->select('tmst_ta.*,tmst_dosen.nama');
        $this ->db ->join('tmst_dosen','tmst_dosen.nip = tmst_ta.tmst_dosen_nip');
		$this ->db ->from('tmst_ta');
		$this ->db ->where('tmst_mahasiswa_nim',$id);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_ta_final($id){
        $this ->db ->select('tmst_ta_final.*,tmst_dosen.nama');
        $this ->db ->join('tmst_dosen','tmst_dosen.nip = tmst_ta_final.tmst_dosen_nip');
		$this ->db ->from('tmst_ta_final');
		$this ->db ->where('tmst_mahasiswa_nim',$id);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_ta_edit($id){
        $this ->db ->select('tmst_ta.*,tmst_dosen.nama,tmst_dosen.nip');
        $this ->db ->join('tmst_dosen','tmst_dosen.nip = tmst_ta.tmst_dosen_nip');
		$this ->db ->from('tmst_ta');
		$this ->db ->where('id',$id);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_ta_final_edit($id){
        $this ->db ->select('tmst_ta_final.*,tmst_dosen.nama,tmst_dosen.nip');
        $this ->db ->join('tmst_dosen','tmst_dosen.nip = tmst_ta_final.tmst_dosen_nip');
		$this ->db ->from('tmst_ta_final');
		$this ->db ->where('id',$id);

		$query = $this ->db ->get();

		return $query;
	}
    
	public function get_data_judul_fix(){
	
	$this->db->select('tmst_ta_final.*,tmst_mahasiswa.*,tmst_dosen.nama as nama_dosen'); 
    $this->db->from('tmst_ta_final'); 
    $this->db->join('tmst_dosen', 'tmst_dosen.nip = tmst_ta_final.tmst_dosen_nip', 'left');
	$this->db->join('tmst_mahasiswa', 'tmst_mahasiswa.nim = tmst_ta_final.tmst_mahasiswa_nim', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
    
	public function get_data_penelitian(){
	
	$this->db->select('*'); 
    $this->db->from('tmst_penelitian'); 
    $this->db->join('tmst_dosen', 'tmst_dosen.nip = tmst_penelitian.tmst_dosen_nip', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
    
	public function get_data_review(){
	
	$this->db->select('td_review.*,tmst_mahasiswa.*,tmst_ta.*,tmst_dosen.nama as nama_dosen'); 
    $this->db->from('td_review'); 
    $this->db->join('tmst_ta', 'tmst_ta.id = td_review.tmst_ta_id', 'left');
    $this->db->join('tmst_dosen', 'tmst_dosen.nip = td_review.tmst_dosen_nip', 'left');
	$this->db->join('tmst_mahasiswa', 'tmst_mahasiswa.nim = tmst_ta.tmst_mahasiswa_nim', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}

}

?>