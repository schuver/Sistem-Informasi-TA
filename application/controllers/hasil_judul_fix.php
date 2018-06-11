<?php
class hasil_judul_fix extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_hasil_judul_fix');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_hasil_judul_fix->get_data(),
		"menu" => "MenuMhs",
                 "panelbody" => "mahasiswa/index");
				 $this->load->view('panelbody', $data);
		$this->load->view('hasil_judul_fix/v_hasil_judul_fix',$data);
	}
	}
?>
