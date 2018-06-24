<?php

Class Login extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelLogin');
		$this ->load ->model('ModelUi');

	}

    public function index(){
        $this ->load->view('public/homeLogin');
    }

    public function prosesLogin(){

    	$user = $this ->input ->post('username');
    	$pass = $this ->input ->post('pass');


    	$vD = $this ->ModelLogin ->cek_dosen($user);
    	$vM = $this ->ModelLogin ->cek_mhs($user);
    	
    	if($vD != 0 && $vM !=0){
    	
    		$val_pass_dosen = $this ->ModelLogin ->get_pass_dosen($user)->row_array();
    		$val_pass_mhs = $this ->ModelLogin ->get_pass_mhs($user)->row_array();

	    	if($val_pass_dosen['password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_dosen($user)->row_array();

	    		if($data['level'] == 1){

	    			$this ->session ->set_userdata('level', '1');
	    			$this ->session ->set_userdata('id_session', $data['tmst_dosen_nip']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			redirect('koordinator');
	    		}else if($data['level'] == 2){

	    			$this ->session ->set_userdata('level', '2');
	    			$this ->session ->set_userdata('id_session', $data['tmst_dosen_nip']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			// redirect('dosen');
	    			$this ->load ->view('apps/reviewer/index.php');
	    		}else if($data['level'] == 3){

	    			$this ->session ->set_userdata('level', '3');
	    			$this ->session ->set_userdata('id_session', $data['tmst_dosen_nip']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			 redirect('dosen');
	    			$this ->load ->view('apps/dosen/index.php');
	    		}else if($data['level'] == 5){

	    			$this ->session ->set_userdata('level', '5');
	    			$this ->session ->set_userdata('id_session', $data['tmst_dosen_nip']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			redirect('DataMaster');
	    		}else{
	    			echo "no akses";
	    		}
    		}else if($val_pass_mhs['password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_mhs($user)->row_array();

	    		if($data['level'] == 4){

	    			$this ->session ->set_userdata('level', '4');
	    			$this ->session ->set_userdata('id_session', $data['tmst_mahasiswa_nim']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			redirect('mahasiswa');
	    		}else{
	    			echo "no akses";
	    		}
    		}else{
    			$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
    			redirect('login');
    		}
    	}else {

    		$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Anda belum terdaftar !','danger'));
    		redirect('login');
    	}
}
    

    public function logout(){

    	$this ->session ->sess_destroy();
    	redirect(base_url("login"));
    }
}