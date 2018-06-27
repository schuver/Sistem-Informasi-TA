<?php

Class Reviewer extends CI_Controller{
 
	public function __construct(){
		
		parent::__construct(); 
         $this->load->helper('url');
		$this ->load ->model('ModelReviewer');
        $this ->load ->model('ModelUi');
		 if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 2){

			 redirect(base_url('login'));
		}
	}
 
	public function index(){
        $id = $this->session->userdata('id_session');
        $list_mhs = $this->ModelReviewer->get_datados($id)->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/reviewer/list_mhs",
                'list_mhs' => $list_mhs

        );
        $this->load->view('panelbody', $data);

    }

    public function reviewJudul(){

        $list = $this->ModelReviewer->get_list_ta()->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/reviewer/listJudulta",
                'list' => $list

        );
        $this->load->view('panelbody', $data);
    }

    public function editReview(){

        $id = $this->uri->segment(3);
        $data = $this->ModelReviewer->get_list_ta_edit($id)->row_array();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/reviewer/editReview",
            "formReview" => "apps/reviewer/formReview",
            "data" => $data
        );
        $this->load->view('panelbody', $data);
    }

    public function saveReview(){
        $id = $this ->input->post('id');
        $nip = $this->input->post('nip');
        $data = array(
            'hasil_review' => $this ->input ->post('review'),
            'status' => $this ->input ->post('status'),
            'tmst_ta_id' => $id,
            'status' => $this ->input ->post('status'),
            'tmst_dosen_nip' => $nip
        );
        
        $this ->db ->insert("td_review",$data);

        $this->db->set('status',1);
        $this->db->where('id', $id);
        $this->db->update('tmst_ta');

        redirect('reviewer/reviewJudul');
    }
 
    public function listPenelitian(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelReviewer->get_penelitian($id)->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/reviewer/listPenelitian",
                "list" => $list
        );
        $this->load->view('panelbody', $data);

    }

    public function editPenelitian(){
        $id = $this->uri->segment(3);
        $data = $this->ModelReviewer->get_data_penelitian($id)->row_array();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/reviewer/editPenelitian",
            "formPenelitian" => "apps/reviewer/formPenelitian",
            "data" => $data
        );
        $this->load->view('panelbody', $data);
    }

    public function savePenelitian(){
        $id = $this ->input->post('id');
        $data = array(
            'judul_penelitian' => $this ->input ->post('judul'),
            'kuota' => $this ->input ->post('kuota'),
        );
        $this ->db ->where('id',$id);
        $this ->db ->update('tmst_penelitian',$data);

        redirect('reviewer/listPenelitian');
    }

    public function delJudulPenelitian(){
        $id = $this ->uri ->segment(3);
        $this ->db ->where_in('id',$id);
        $this ->db ->delete('tmst_penelitian');

        $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert2('Berhasil Dihapus !','success'));
        redirect('reviewer/listPenelitian');
    }

// firhan
    public function pilihBimbingan(){

        $id = $this->session->userdata('id_session');
        $list_mhs = $this->ModelReviewer->get_datados($id)->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/reviewer/listPilihBimbingan",
                'list_mhs' => $list_mhs

        );
        $this->load->view('panelbody', $data);
    }

    public function editPilihBimbingan(){
        $id = $this->uri->segment(3);
        $data = $this->ModelReviewer->get_datados($id)->row_array();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/reviewer/editPilihBimbingan",
            "formPilihBimbingan" => "apps/reviewer/formPilihBimbingan",
            "data" => $data
        );
        $this->load->view('panelbody', $data);
    }

    public function savePilihBimbingan(){
        $id = $this->input->post('id');
        $nip = $this->input->post('tmst_dosen_nip');
        $nim = $this->input->post('tmst_mahasiswa_nim');
        $data = array(
            'status'=> $this->input->post('status')
        );
        $data2 = array(
            'tmst_mahasiswa_nim'=> $this->input->post('nim'),
            'tmst_dosen_nip'=> $nip,
            'status'=> 'Belum',
            'tmst_ta_final_id'=> $id
        );
        $this->db->where('id', $id);
        $this->db->update('tmst_ta_final', $data);
        $this ->db ->insert("tmst_bimbingan",$data2);

        $this->db->set('kuota','kuota-1',false);
        $this->db->where('nip', $nip);
        $this->db->update('tmst_dosen');
        redirect('reviewer/pilihBimbingan');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $user = $this->ModelReviewer->get_dataFinal($id)->result();
       // $prodi = $this ->ModelReviewer ->get_prodi();
        // $nim_mahasiswa = $this->ModelReviewer->get_nim_mahasiswa($id);
        $data = array(
                "menu" => "MenuAdmin",
            "panelbody" => "apps/reviewer/editPilih",
            "formPemilihan" => "apps/reviewer/formPilih",
            // "nim_mahasiswa" => $nim_mahasiswa,
            "user" => $user
         //   "prodi" => $prodi
            // "visi" => $visi
        );
        $this->load->view('panelbody', $data);
    }

    public function update(){
        $id = $this ->input ->post('id');
        // $id = $this ->uri->segment(3);
        $data = array(
            'status' => 'Belum');
        $this ->db ->where('id',$id);
        $this ->db ->update('tmst_bimbingan',$data);
        redirect('reviewer/pilih');
    }

//firda

    public function input_judul(){
        $data = array(
                "menu" => "MenuAdmin",
            'panelbody' => 'apps/reviewer/list_judul'
            
        );
        $this ->load ->view('panelbody',$data);
    }

    public function simpan(){
       
        $datapenelitian = array(
            'judul_penelitian' => $this ->input ->post('judul_penelitian'),
            'kuota' => $this ->input ->post('kuota'),
            'tmst_dosen_nip' => $this ->session->userdata('id_session'));
        
        $this ->db ->insert("tmst_penelitian" ,$datapenelitian);
        
        $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert2('Berhasil Ditambahkan !','success'));
        redirect('reviewer/listPenelitian');
    }

}