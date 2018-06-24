<?php

Class input_fix extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('m_input_fix');
        $this ->load->helper('url');
	
	}

    public function index(){
        $data = array(
               "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/index"
           );
        $this->load->view('panelbody', $data);
    }

 

    public function inputTa(){
    	$tgl_awal = $this ->m_input_fix->get_jadwal_awal();
    	$tgl_akhir = $this ->m_input_fix->get_jadwal_akhir();
    	$dosen = $this ->m_input_fix->get_dosen()->result();
    	$penelitian = $this ->m_input_fix->get_penelitian()->result();
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
               "panelbody" => "mahasiswa/input_fix",
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

        $this ->db ->insert('tmst_ta_final',$data);
        redirect('mahasiswa/input_fix');
    }
}