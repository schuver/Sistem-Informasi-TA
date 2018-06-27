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

	public function get_list_ta(){
		$this->db->select('tmst_ta.*,tmst_mahasiswa.nim,tmst_mahasiswa.nama,tmst_dosen.nama as nama_dosen');
		$this->db->join('tmst_dosen','tmst_dosen.nip = tmst_ta.tmst_dosen_nip');
		$this->db->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_ta.tmst_mahasiswa_nim');
		$this->db->from('tmst_ta');
		return $this->db->get();
	}

	public function get_list_ta_final(){
		$this->db->select('tmst_ta_final.*,tmst_mahasiswa.nim,tmst_mahasiswa.nama,tmst_dosen.nama as nama_dosen');
		$this->db->join('tmst_dosen','tmst_dosen.nip = tmst_ta_final.tmst_dosen_nip');
		$this->db->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_ta_final.tmst_mahasiswa_nim');
		$this->db->from('tmst_ta_final');
		return $this->db->get();
	}

	public function get_editJadwal($id){
		$this ->db ->select('*');
		$this ->db ->from('td_tanggal');
		$this ->db ->where('id',$id);

		$query = $this ->db ->get();

		return $query;
	}

	public function bimbingan(){
		$this->db->select('tmst_bimbingan.*,tmst_mahasiswa.nim,tmst_mahasiswa.nama,tmst_ta_final.judul,tmst_dosen.nama as nama_dosen');
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
    
	public function get_daftar_bimbingan($id){
	
	$this->db->select('*');
    $this->db->from('tmst_bimbingan'); 
    $this->db->where('tmst_dosen_nip',$id);
    return $this->db->get();
	}
    
	public function get_data_penelitian(){
	
	$this->db->select('*');
    $this->db->join('tmst_dosen', 'tmst_dosen.nip = tmst_penelitian.tmst_dosen_nip');
    $this->db->from('tmst_penelitian'); 
    $data = $this->db->get(); 
    return $data->result(); 
	}


}

?>