<?php

class ModelLogin extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function cek_dosen($user){
		$sql = "select count(tmst_dosen_nip) from tmst_user where tmst_dosen_nip='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}

	public function cek_mhs($user){
		$sql = "select count(tmst_mahasiswa_nim) from tmst_user where tmst_mahasiswa_nim='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}

	public function get_pass_dosen($user){

		$this ->db ->select('password');
		$this ->db ->from('tmst_user');
		$this ->db ->where('tmst_dosen_nip',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_pass_mhs($user){

		$this ->db ->select('password');
		$this ->db ->from('tmst_user');
		$this ->db ->where('tmst_mahasiswa_nim',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_level_dosen($user){

		$this ->db ->select('*');
		$this ->db ->from('tmst_user');
		$this ->db ->where('tmst_dosen_nip',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_level_mhs($user){

		$this ->db ->select('*');
		$this ->db ->from('tmst_user');
		$this ->db ->where('tmst_mahasiswa_nim',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_name_dosen($user){
	
	$this->db->select('tmst_user.*,tmst_dosen.*'); 
    $this->db->from('tmst_user'); 
    $this->db->join('tmst_dosen', 'tmst_dosen.nip = tmst_user.tmst_dosen_nip');
	$this->db->where('tmst_dosen_nip',$user);
    return $data = $this->db->get();
	}

	public function get_name_mhs($user){
	
	$this->db->select('tmst_user.*,tmst_mahasiswa.*'); 
    $this->db->from('tmst_user'); 
	$this->db->join('tmst_mahasiswa', 'tmst_mahasiswa.nim = tmst_user.tmst_mahasiswa_nim');
	$this->db->where('tmst_mahasiswa_nim',$user);
    return $data = $this->db->get(); 
	}
}

?>