<?php

Class Mahasiswa extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelMahasiswa');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 4){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $this->load->helper('url');
        $data = array(
                "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/index");
        $this->load->view('panelbody', $data);
    }

   //--------------------------------------------------------------------------------

    public function daftarujian(){
        $data = array(
            'menu' => 'MenuMhs',
            'panelbody' => 'mahasiswa/DaftarUjian'
        );
        $this ->load ->view('panelbody',$data);
    }

    public function simpandaftar(){
    		$datados = array(
    		'tanggal' => $this ->input ->post('tanggal'),
    		'waktu' => $this ->input ->post('waktu'),
    		'tempat' => $this ->input ->post('tempat'),
			'tmst_mahasiswa_nim' => $this ->input ->post('tmst_mahasiswa_nim')
			);

    	$this ->db ->insert("tmst_proposal",$datados);
    					
		redirect('Mahasiswa');
    }
    
     public function listTa(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelMahasiswa->get_ta($id)->result();
        $data = array(
               "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/listTa",
               "list" => $list
           );
        $this->load->view('panelbody', $data);
    }

    public function inputTa(){
        $tgl_awal = $this ->ModelMahasiswa->get_jadwal_awal();
        $tgl_akhir = $this ->ModelMahasiswa->get_jadwal_akhir();
        $dosen = $this ->ModelMahasiswa->get_dosen()->result();
        $penelitian = $this ->ModelMahasiswa->get_penelitian()->result();
        date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            if(($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
                $l=1;
             }
            else{
                $l=0;
            }
        $data = array(
               "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/inputTa",
               "dosen" => $dosen,
               "penelitian" => $penelitian,
               "tgl_awal" => $tgl_awal,
               "tgl_akhir" => $tgl_akhir,
               "limit"=>$l
           );
        $this->load->view('panelbody', $data);
    }

    public function saveInputTa(){
        $nim = $this ->session ->userdata('id_session');
        $data = array(
            'judul' => $this ->input ->post('judul'),
            'deskripsi' => $this ->input ->post('deskripsi'),
            'tmst_mahasiswa_nim' => null,
            'tmst_dosen_nip' => $this ->input ->post('nip'),
            'tmst_penelitian_id' => $this ->input ->post('penelitian'),
            'kategori' => $this ->input ->post('kategori')
        );

        $this ->db ->insert('tmst_ta',$data);
        redirect('mahasiswa/inputTa');
    }
}