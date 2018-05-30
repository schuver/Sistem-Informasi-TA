<?php

Class DataMaster extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelRegister');
	}

    public function index(){
    	$data = array(
    		'menu' => 'MenuAdmin',
    		'panelbody' => 'data-master/DataMaster',
			'prodi' => $this ->ModelRegister ->get_prodi()
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
}