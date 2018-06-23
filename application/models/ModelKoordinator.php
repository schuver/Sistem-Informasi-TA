<?php

class ModelKoordinator extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function get_user_id($id){
        $this->db->join('tmst_dosen','tmst_dosen.nip = tmst_user.tmst_dosen_nip');
        $this->db->from('tmst_user');
        $this->db->where('tmst_dosen_nip',$id);
        return $this->db->get();
	}

	public function get_user(){
		$this->db->select('tmst_user.*,tmst_dosen.nip,tmst_dosen.nama,tmst_dosen.kuota,tmst_prodi.nama_prodi');
        $this->db->join('tmst_dosen','tmst_dosen.nip = tmst_user.tmst_dosen_nip');
        $this->db->join('tmst_prodi','tmst_prodi.id = tmst_dosen.tmst_prodi_id');
        $this->db->from('tmst_user');
        return $this->db->get();
	}


	public function get_user_edit($nip){
		$this->db->select('tmst_user.*,tmst_dosen.nip,tmst_dosen.nama,tmst_dosen.kuota,tmst_prodi.nama_prodi');
        $this->db->join('tmst_dosen','tmst_dosen.nip = tmst_user.tmst_dosen_nip');
        $this->db->join('tmst_prodi','tmst_prodi.id = tmst_dosen.tmst_prodi_id');
        $this->db->from('tmst_user');
        $this->db->where('nip',$nip);
        return $this->db->get();
	}

    public function get_privileges($id){
        $this ->db ->select('level');
		$this ->db ->from('tmst_user');
		$this ->db ->where('tmst_dosen_nip',$id);

		$query = $this ->db ->get();

		return $query;
    }


    public function get_datados(){
		return $this->db->get('tmst_dosen');
	}


	public function get_nip($nip){
		$this ->db ->select('*');
		$this ->db ->from('tmst_dosen');
		$this ->db ->where('nip',$nip);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_jadwal(){
		return $this ->db ->get('td_tanggal');
	}

	public function bimbingan(){
		$this->db->select('tmst_bimbingan.*,tmst_mahasiswa.nim,tmst_mahasiswa.nama as nama_mhs,tmst_ta_final.judul,tmst_dosen.nama');
		$this->db->join('tmst_ta_final','tmst_ta_final.id = tmst_bimbingan.tmst_ta_final_id');
		$this->db->join('tmst_dosen','tmst_dosen.nip = tmst_bimbingan.tmst_dosen_nip');
		$this->db->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_bimbingan.tmst_mahasiswa_nim');
		$this->db->from('tmst_bimbingan');
		return $this->db->get();
	}

	public function get_bimbingan($id){
		$this ->db ->select('tmst_bimbingan.*,tmst_mahasiswa.nama as nama_mhs,tmst_dosen.nama,tmst_ta_final.judul');
		$this ->db ->join('tmst_ta_final','tmst_ta_final.id = tmst_bimbingan.tmst_ta_final_id');
		$this ->db ->join('tmst_dosen','tmst_dosen.nip = tmst_bimbingan.tmst_dosen_nip');
		$this ->db ->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_bimbingan.tmst_mahasiswa_nim');
		$this ->db ->from('tmst_bimbingan');
		$this ->db ->where('tmst_bimbingan.id',$id);

		$query = $this ->db ->get();

		return $query;
	}

}

?>