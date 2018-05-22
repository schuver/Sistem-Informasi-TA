<?php

Class Koordinator extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		// $this ->load ->model('ModelLogin');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 1){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $this->load->helper('url');
        $data = array(
                "menu" => "MenuAdmin",
                "body" => "panelbody"
        );
        $this->load->view('panelbody', $data);
    }
}