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

    public function editkuota(){
        // $id = $this ->session ->userdata('id_session');
        $list = $this ->ModelKoordinator ->get_user()->result();
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'apps/koordinator/EditKuotaDos',
            'list' => $list
        );
        $this ->load ->view('panelbody',$data);
    }

     public function tampildiformkuota(){
            $id = $this->uri->segment(3);
            $list = $this->ModelKoordinator->get_nip($id)->row_array();
            $list2 = $this ->ModelKoordinator ->get_user_edit($id)->row_array();
            $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editkuota",
            "formKuota" => "apps/koordinator/formKuota",
            "list" => $list,
            "list2" => $list2
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

    public function listJadwal(){
        $list = $this ->ModelKoordinator ->get_jadwal()->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/listJadwal",
                "list" => $list
        );
        $this->load->view('panelbody', $data);
    }

    public function tglInput(){
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/inputTgl"
        );
        $this->load->view('panelbody', $data);
    }

    public function save_tglInput(){
        $data = array(
            'tgl_awal' => $this ->input ->post('tanggal_awal'),
            'tgl_akhir' => $this ->input ->post('tanggal_akhir'),
            'keterangan' => $this ->input ->post('ket')
        );

        $this ->db ->insert('td_tanggal',$data);
        redirect('koordinator/listJadwal');
    }

    public function delJadwal(){
        $id = $this ->uri ->segment(3);
        $this ->db ->where_in('id',$id);
        $this ->db ->delete('td_tanggal');

        redirect('koordinator/listJadwal');
    }

    public function bimbinganMhs(){
        $list = $this->ModelKoordinator->bimbingan()->result();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/listbimbingan",
            "list" => $list
        );

        $this ->load ->view('panelbody',$data);
    }

    public function editBimbingan(){
            $id = $this->uri->segment(3);
            $bimbingan = $this->ModelKoordinator->get_bimbingan($id)->row_array();
            $list2 = $this ->ModelKoordinator ->get_user_edit($id)->row_array();
            $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editBimbingan",
            "formBimbingan" => "apps/koordinator/formBimbingan",
            "bimbingan" => $bimbingan,
            "list2" => $list2
        );
        $this->load->view('panelbody', $data);
    }

    public function simpanBimbingan(){
        $id = $this->input->post('id');
        $data = array(
            'status'=> $this->input->post('status')
        );
        $this->db->where('tmst_bimbingan.id', $id);
        $this->db->update('tmst_bimbingan', $data);
        redirect('koordinator/bimbinganMhs');
    }
}