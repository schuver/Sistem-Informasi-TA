<?php
class review_judul extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_review_judul');
      
	}

	
	
	function index(){
	$data = array(
		"menu" => "MenuReviewer",
        "panelbody" => "apps/reviewer/view_review_judul",
		"list"=> $this->m_review_judul->get_data());
	$this->load->view('panelbody', $data);
	}


	
	}
?>