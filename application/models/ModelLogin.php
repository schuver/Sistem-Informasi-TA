<?php

class ModelLogin extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function cek_dosen($user){

		// return $this ->db ->query("select count(*) from tmst_user where tmst_dosen_nip='$user'
		// ");
		$sql = "select count(tmst_dosen_nip) from tmst_user where tmst_dosen_nip='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
		// return $row['tmst_dosen_nip'] ==1;
	}

	public function cek_mhs($user){

		// return $this ->db ->query("select count(*) from tmst_user where tmst_dosen_nip='$user'
		// ");
		$sql = "select count(tmst_mahasiswa_nim) from tmst_user where tmst_mahasiswa_nim='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
		// return $row['tmst_dosen_nip'] ==1;
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
}

?>