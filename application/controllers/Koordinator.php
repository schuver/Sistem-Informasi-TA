<?php

Class Koordinator extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper('url');
		$this ->load ->model('ModelKoordinator');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 1){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/index"
        );
        $this->load->view('panelbody', $data);
    }

    public function privileges(){
    	$id = $this ->session ->userdata('id_session');
    	$list = $this ->ModelKoordinator ->get_user()->result();
    	$data = array(
    		'menu' => 'MenuAdmin',
    		'panelbody' => 'apps/koordinator/list',
    		'list' => $list
    	);
    	$this ->load ->view('panelbody',$data);
    }

     public function tampildos(){
        $this ->load->model('ModelKoordinator');
        $dosen = $this->ModelKoordinator->get_datados()->result();
        $data = array(   
            'menu' => 'MenuAdmin',
            'panelbody' => 'apps/koordinator/EditKuotaDos',
            'dosen' => $dosen
        );
        $this ->load ->view('panelbody',$data);
    }

    public function editPrivileges(){
        $id = $this->uri->segment(3);
        $user = $this->ModelKoordinator->get_user_id($id)->row_array();
        $privileges = $this->ModelKoordinator->get_privileges($id)->row_array();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editPrivileges",
            "formPrivileges" => "apps/koordinator/formPrivileges",
            "privileges" => $privileges,
            "user" => $user
        );
        $this->load->view('panelbody', $data);
    }

    public function updatePrivileges(){
        $id = $this ->input->post('nip');
        $data = array(
            'level' => $this ->input ->post('level'));
        $this ->db ->where('tmst_dosen_nip',$id);
        $this ->db ->update('tmst_user',$data);

        redirect('koordinator/privileges');
    }

    /*---------------------------------------------------------------------------------------------------------------------*/

    public function editkuota(){
        /*$this ->load->model('ModelKoordinator');
        $dosen = $this->ModelKoordinator->get_datados()->result();
        $data = array(   
            'menu' => 'MenuAdmin',
            'panelbody' => 'apps/koordinator/EditKuotaDos',
            'dosen' => $dosen
        );
        $this ->load ->view('panelbody',$data);*/
        $id = $this ->session ->userdata('id_session');
        $list = $this ->ModelKoordinator ->get_user()->result();
        $prodi = $this ->ModelKoordinator ->get_prodi($id);
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'apps/koordinator/EditKuotaDos',
            'list' => $list,
            'prodi' => $prodi
        );
        $this ->load ->view('panelbody',$data);
    }

     public function tampildiformkuota(){
            $id = $this->uri->segment(3);
            $list = $this->ModelKoordinator->get_nip($id)->row_array();
            $prodi = $this ->ModelKoordinator ->get_prodi($id);
            $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editkuota",
            "formKuota" => "apps/koordinator/formKuota",
            "list" => $list,
            "prodi"=> $prodi
            //"user" => $user,
            //"prodi" => $prodi
            // "visi" => $visi
        );
             $this->load->view('panelbody', $data);
    }

     public function simpan_kuota(){
        $id = $this->input->post('nip');
        $data = array(
            'kuota'=> $this->input->post('kuota')
        );
        $this->db->where('nip', $id);
        $this->db->update('tmst_dosen', $data);
        redirect('koordinator/editkuota');

    }
}