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
}