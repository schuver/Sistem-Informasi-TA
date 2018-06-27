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

public function get_datados($id){
		$this ->db ->select('*');
		$this->db->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_ta_final.tmst_mahasiswa_nim');
		$this->db->join('tmst_dosen','tmst_dosen.nip = tmst_ta_final.tmst_dosen_nip');
		$this ->db ->from('tmst_ta_final');
		$data = array(
			'tmst_dosen_nip'=>$id,
			'status'=>0);
		$this ->db ->where($data,$id);

		$query = $this ->db ->get();

		return $query;
	}

public function get_penelitian($id){
		$this ->db ->select('*');
		$this ->db ->from('tmst_penelitian');
		$this ->db ->where('tmst_dosen_nip',$id);

		$query = $this ->db ->get();

		return $query;
	}

public function get_data_penelitian($id){
		$this ->db ->select('*');
		$this ->db ->from('tmst_penelitian');
		$this ->db ->where('id',$id);

		$query = $this ->db ->get();

		return $query;
	}

//firhan


	public function get_dataFinal($id){
		 $this->db->select('tmst_ta_final.*,tmst_mahasiswa.nim,tmst_mahasiswa.nama,tmst_dosen.nip');
         // $this->db->join('tmst_penelitian','tmst_penelitian.id = tmst_ta_final.tmst_penelitian_id');
         $this->db->join('tmst_dosen','tmst_dosen.nip = tmst_ta_final.tmst_dosen_nip');
         $this->db->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_ta_final.tmst_mahasiswa_nim');
         $this->db->from('tmst_ta_final');
         $this->db->where('id',$id);
        return $this->db->get();
	}

	 public function get_nip_dosen(){
         $this->db->join('tmst_dosen','tmst_dosen.nip = tmst_ta.tmst_dosen_nip');
         $this->db->from('tmst_ta');
         return $this->db->get()->row_array();
	 }


	 public function get_nim_mhs(){
         $this->db->join('tmst_mahasiswa','tmst_mahasiswa.nim = tmst_ta.tmst_mahasiswa_nim');
         $this->db->from('tmst_ta');
         return $this->db->get()->row_array();
	 }

} 