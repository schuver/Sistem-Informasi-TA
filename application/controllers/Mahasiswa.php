<?php

Class Mahasiswa extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		// $this ->load ->model(''); -- Masukkan model
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
}