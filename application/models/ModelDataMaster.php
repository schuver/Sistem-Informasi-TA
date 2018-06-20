<?php

class ModelDataMaster extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function get_prodi(){
		return $this ->db ->get("tmst_prodi")->result();
	}

}

?>