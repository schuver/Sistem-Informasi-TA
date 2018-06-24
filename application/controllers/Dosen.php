<?php

Class Dosen extends CI_Controller{
 
	public function __construct(){
		
		parent::__construct(); 
         $this->load->helper('url');
		$this ->load ->model('ModelDosen');
		 if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 3){

			 redirect(base_url('login'));
		}
	}
 
	public function index(){
         
        $data = array(
                "menu" => "MenuDosen",
                "panelbody" => "apps/dosen/index"
        );
        $this->load->view('panelbody', $data);

}

 public function pemilihan(){
    $id = $this ->session ->userdata('id_session');
    $list_mhs = $this ->ModelDosen ->get_user($id);
    $nim_mahasiswa = $this ->ModelDosen ->get_nim_mahasiswa($id);
    $data = array(
        'menu' => 'MenuDosen',
        'panelbody' => 'apps/dosen/list_mhs',
        'list_mhs' => $list_mhs,
        'nim_mahasiswa' => $nim_mahasiswa
    );
    $this ->load ->view('panelbody',$data);

 }

 public function tampilmhs(){
        $this ->load->model('ModelDosen');
        $list_mhs = $this->ModelDosen->get_datados()->result();
        $data = array(   
            'menu' => 'MenuDosen',
            'panelbody' => 'apps/dosen/list_mhs',
            'list_mhs' => $list_mhs
        );
        $this ->load ->view('panelbody',$data);
    }

// firhan
    public function pilih(){
        $id = $this ->session ->userdata('id_session');
        $list = $this ->ModelDosen ->get_userpilih($id)->result();
        // $nim_mahasiswa = $this ->ModelDosen ->get_nim_mahasiswa($id);
        // $nip_dosen = $this ->ModelDosen ->get_nip_dosen($id);
        $data = array(
            'menu' => 'MenuDosen',
            'panelbody' => 'apps/Dosen/list',
            'listData' => $list,
            'id' => $id
            // 'nim_mahasiswa' => $nim_mahasiswa,
            // 'nip_dosen' => $nip_dosen
        );
        $this ->load ->view('panelbody',$data);
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $user = $this->ModelDosen->get_dataFinal($id)->result();
       // $prodi = $this ->ModelDosen ->get_prodi();
        // $nim_mahasiswa = $this->ModelDosen->get_nim_mahasiswa($id);
        $data = array(
            "menu" => "MenuDosen",
            "panelbody" => "apps/dosen/editPilih",
            "formPemilihan" => "apps/dosen/formPilih",
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
        redirect('dosen/pilih');
    }


}