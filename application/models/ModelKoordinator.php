<?php

class ModelKoordinator extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function get_user_id($id){
		// return $this ->db ->get_where("tmst_user",array("tmst_dosen_nip" => $id))->result();
        $this->db->join('tmst_dosen','tmst_dosen.nip = tmst_user.tmst_dosen_nip');
        $this->db->from('tmst_user');
        $this->db->where('tmst_dosen_nip',$id);
        return $this->db->get();
	}

	public function get_user(){
		// return $this ->db ->get_where("tmst_user",array("tmst_dosen_nip" => $id))->result();
        $this->db->join('tmst_dosen','tmst_dosen.nip = tmst_user.tmst_dosen_nip');
        $this->db->from('tmst_user');
        return $this->db->get();
	}

	/*public function get_datados(){
		$datados = $this->db->get('tmst_dosen');
		return $datados;
	}*/

	public function get_prodi(){
		// return $this ->db ->get_where("tmst_user",array("tmst_dosen_nip" => $id))->result();
        $this->db->join('tmst_prodi','tmst_prodi.id = tmst_dosen.tmst_prodi_id');
        $this->db->from('tmst_dosen');
        return $this->db->get()->row_array();
	}

	public function get_prodi_id($id){
		// return $this ->db ->get_where("tmst_user",array("tmst_dosen_nip" => $id))->result();
        $this->db->join('tmst_prodi','tmst_prodi.id = tmst_dosen.tmst_prodi_id');
        $this->db->from('tmst_dosen');
        $this->db->where('nip',$id);
        return $this->db->get()->row_array();
	}

    public function get_privileges($id){
        // return $this->db->get('tmst_user');
        		$this ->db ->select('level');
		$this ->db ->from('tmst_user');
		$this ->db ->where('tmst_dosen_nip',$id);

		$query = $this ->db ->get();

		return $query;
    }


    public function get_datados(){
		return $this->db->get('tmst_dosen');
		//return $datados;
	}


	public function get_nip($nip){
		$this ->db ->select('*');
		$this ->db ->from('tmst_dosen');
		$this ->db ->where('nip',$nip);

		$query = $this ->db ->get();

		return $query;
	}

}

?>