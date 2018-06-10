<?php

Class DataMaster extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this ->load ->helper('url');
		$this ->load ->model('ModelDataMaster');
        $this ->load ->model('ModelLogin');
        if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 5){

            redirect(base_url('login'));
        }
    }

    public function index(){
    	$data = array(
    		'menu' => 'MenuAdmin',
    		'panelbody' => 'data-master/index'
    	);
    	$this ->load ->view('panelbody',$data);
    }

    public function tambahDosen(){
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'data-master/DataMaster',
            'prodi' => $this ->ModelDataMaster ->get_prodi()
        );
        $this ->load ->view('panelbody',$data);
    }

    public function tambahDataMaster(){
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'data-master/TambahDataMaster'
        );
        $this ->load ->view('panelbody',$data);
    }

    public function simpan(){
    		$datados = array(
    		'nip' => $this ->input ->post('nip'),
    		'nama' => $this ->input ->post('nama'),
    		'no_hp' => $this ->input ->post('no_hp'),
			'tmst_prodi_id' => $this ->input ->post('id_prodi'));
			$dataUser = array(
    		'tmst_dosen_nip' => $this ->input ->post('nip'),
    		'password' => $this ->input ->post('nip'),
    		'level' => '3');
    	$this ->db ->insert("tmst_dosen",$datados);
    	$this ->db ->insert("tmst_user",$dataUser);
				
		redirect('DataMaster');
    }

    public function simpanDataMaster(){
            $datados = array(
            'nip' => $this ->input ->post('nip'),
            'nama' => $this ->input ->post('nama'),
            'no_hp' => 0,
            'tmst_prodi_id' => 1);
            $dataUser = array(
            'tmst_dosen_nip' => $this ->input ->post('nip'),
            'password' => $this ->input ->post('password'),
            'level' => '5');
        $this ->db ->insert("tmst_dosen",$datados);
        $this ->db ->insert("tmst_user",$dataUser);
                
        redirect('DataMaster');
    }
}