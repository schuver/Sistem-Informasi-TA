<?php

Class Register extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelRegister');
		// die(var_dump($_POST));
	}

    public function index(){
    	$data = array(
    		'prodi' => $this ->ModelRegister ->get_prodi()
    	);
        $this ->load->view('public/homeRegister',$data);
    }

    public function simpan(){
    	$dataMhs = array(
    		'nim' => $this ->input ->post('nim'),
    		'nama' => $this ->input ->post('nama'),
    		'golongan' => $this ->input ->post('golongan'),
    		'tmst_prodi_id' => $this ->input ->post('id_prodi'));
    	$dataUser = array(
    		'tmst_mahasiswa_nim' => $this ->input ->post('nim'),
    		'password' => $this ->input ->post('password'),
    		'level' => '4');
    	$this ->db ->insert("tmst_mahasiswa",$dataMhs);
    	$this ->db ->insert("tmst_user",$dataUser);
    	redirect('register');
    }
}