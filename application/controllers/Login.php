<?php

Class Login extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelLogin');
		$this ->load ->model('ModelUi');
		// die(var_dump($_POST));

	}

    public function index(){
        $this ->load->view('public/homeLogin');
    }

    public function prosesLogin(){

    	$user = $this ->input ->post('username');
    	$pass = $this ->input ->post('password');


    	$vD = $this ->ModelLogin ->cek_dosen($user);
    	$vM = $this ->ModelLogin ->cek_mhs($user);
    	// echo var_dump($user);
    	// echo var_dump($val);
    	if($vD != 0){
    	
    		$val_pass = $this ->ModelLogin ->get_pass_dosen($user)->row_array();

	    	if($val_pass['password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_dosen($user)->row_array();

	    		// echo var_dump($data);
	    		if($data['level'] == '1'){

	    			$this ->session ->set_userdata('level', '1');
	    			$this ->session ->set_userdata('id_session', $data['tmst_dosen_nip']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			redirect('koordinator');
	    			// $this ->load ->view('apps/koordinator/index.php');
	    		}else if($data['level'] == '2'){

	    			$this ->session ->set_userdata('level', '2');
	    			$this ->session ->set_userdata('id_session', $data['tmst_dosen_nip']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			// redirect('dosen');
	    			$this ->load ->view('apps/dosen/index.php');
	    		}else if($data['level'] == '3'){

	    			$this ->session ->set_userdata('level', '3');
	    			$this ->session ->set_userdata('id_session', $data['tmst_dosen_nip']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			// redirect('reviewer');
	    			$this ->load ->view('apps/reviewer/index.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}
    	}
    	if($vM != 0){

    		$val_pass = $this ->ModelLogin ->get_pass_mhs($user)->row_array();

	    	if($val_pass['password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_mhs($user)->row_array();

	    		// echo var_dump($data);
	    		if($data['level'] == '4'){

	    			$this ->session ->set_userdata('level', '4');
	    			$this ->session ->set_userdata('id_session', $data['tmst_mahasiswa_nim']);
	    			// $this ->session ->set_userdata('name_session', $data['nama']);

	    			redirect('mahasiswa');
	    			// $this ->load ->view('apps/koordinator/index.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}else{
    			$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
    			redirect('login');
    		}

    	}else{
    		$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Anda belum terdaftar !','danger'));
    		redirect('login');
    	}
    	// if($vD && $vM == 0){
    	// 	$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Anda belum terdaftar !','danger'));
    	// 	redirect('login');
    	// }
    }

    public function logout(){

    	$this ->session ->sess_destroy();
    	redirect(base_url("login"));
    }
}