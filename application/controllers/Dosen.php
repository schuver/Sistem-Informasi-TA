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
}