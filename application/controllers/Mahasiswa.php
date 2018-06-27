<?php

Class Mahasiswa extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelMahasiswa');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 4){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $list = $this->ModelMahasiswa->get_data_penelitian();
        $data = array(
            "menu"      => "MenuMhs",
            "panelbody" => "mahasiswa/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    public function daftarujian(){
        $id = $this->session->userdata('id_session');
        $data = array(
            'menu' => 'MenuMhs',
            'panelbody' => 'mahasiswa/DaftarUjian',
            'id' => $id
        );
        $this ->load ->view('panelbody',$data);
    }

    public function simpandaftar(){
        $config = array(
            'upload_path' => './file/',
            'allowed_types' => 'pdf|gif|jpg|png',
            'max_size' => 1024
        );

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('berkas')) //jika gagal upload
          {
              $error = array('error' => $this->upload->display_errors()); //tampilkan error
              $this->load->view('Mahasiswa/daftarujian', $error);
          } else
          //jika berhasil upload
          {
              $file = $this->upload->data('file_name');
              //mengambil data di form

            $datados = array(
            'tanggal' => $this ->input ->post('tanggal'),
            'waktu' => $this ->input ->post('waktu'),
            'tempat' => $this ->input ->post('tempat'),
            'tmst_mahasiswa_nim' => $this->session->userdata('id_session'),
            'file' => $file
            );

            $this ->db ->insert("tmst_proposal",$datados);
            $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert2('Berhasil Mendaftar !','success'));
                            
            redirect('Mahasiswa/daftarujian');

          }
    }
    
     public function listTa(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelMahasiswa->get_ta($id)->result();
        $data = array(
               "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/listTa",
               "list" => $list
           );
        $this->load->view('panelbody', $data);
    }
    
     public function listTafinal(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelMahasiswa->get_ta_final($id)->result();
        $data = array(
               "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/listTafinal",
               "list" => $list
           );
        $this->load->view('panelbody', $data);
    }

    public function inputTa(){
        $tgl_awal = $this ->ModelMahasiswa->get_jadwal_awal();
        $tgl_akhir = $this ->ModelMahasiswa->get_jadwal_akhir();
        $dosen = $this ->ModelMahasiswa->get_dosen()->result();
        $penelitian = $this ->ModelMahasiswa->get_penelitian()->result();
        date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            // $val = $this->ModelMahasiswa->get_jadwal()->result();

            // if($val!=0){
                if(@($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
                    $l=1;
                }else{
                    $l=0;
                } 
                // if($val<1){
                //     $l=2;
                // }
            // }else{
            //     $l=2;
            // }
        $data = array(
               "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/inputTa",
               "tgl_awal" => $tgl_awal,
               "tgl_akhir" => $tgl_akhir,
               "dosen" => $dosen,
               "penelitian" => $penelitian,
               "limit"=>$l
           );
        $this->load->view('panelbody', $data);
    }

    public function saveInputTa(){
        $nim = $this ->session ->userdata('id_session');
        $data = array(
            'judul' => $this ->input ->post('judul'),
            'deskripsi' => $this ->input ->post('deskripsi'),
            'tmst_mahasiswa_nim' => $nim,
            'tmst_dosen_nip' => $this ->input ->post('nip'),
            'tmst_penelitian_id' => $this ->input ->post('penelitian'),
            'kategori' => $this ->input ->post('kategori'),
            'status' => 0
        );
        $this ->db ->insert('tmst_ta',$data);
        redirect('mahasiswa/inputTa');
    }

    public function editJudulta(){
        $id = $this->uri->segment(3);
        $list = $this ->ModelMahasiswa ->get_ta_edit($id)->row_array();
        $dosen = $this ->ModelMahasiswa ->get_dosen()->result();
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'mahasiswa/editJudulta',
            "formJudulta" => "mahasiswa/formJudulta",
            'list' => $list,
            'dosen' =>$dosen
        );
        $this ->load ->view('panelbody',$data);
    }

    public function editJudultafinal(){
        $id = $this->uri->segment(3);
        $list = $this ->ModelMahasiswa ->get_ta_final_edit($id)->row_array();
        $dosen = $this ->ModelMahasiswa ->get_dosen()->result();
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'mahasiswa/editJudultafinal',
            "formJudultafinal" => "mahasiswa/formJudultafinal",
            'list' => $list,
            'dosen' =>$dosen
        );
        $this ->load ->view('panelbody',$data);
    }

    public function simpanEdit_ta(){
        $id = $this->input->post('id');
        $data = array(
            'judul'=> $this->input->post('judul'),
            'deskripsi'=> $this->input->post('desk'),
            'tmst_dosen_nip'=> $this->input->post('dosen'),
            'kategori'=> $this->input->post('kategori')
        );
        $this->db->where('id', $id);
        $this->db->update('tmst_ta', $data);
        redirect('mahasiswa/listTa');
    }

    public function simpanEdit_tafinal(){
        $id = $this->input->post('id');
        $data = array(
            'judul'=> $this->input->post('judul'),
            'deskripsi'=> $this->input->post('desk'),
            'tmst_dosen_nip'=> $this->input->post('dosen'),
            'kategori'=> $this->input->post('kategori')
        );
        $this->db->where('id', $id);
        $this->db->update('tmst_ta_final', $data);
        redirect('mahasiswa/listTafinal');
    }

    public function delJudulta(){
        $id = $this ->uri ->segment(3);
        $this ->db ->where_in('id',$id);
        $this ->db ->delete('tmst_ta');

        redirect('mahasiswa/listTa');
    }

    public function delJudultafinal(){
        $id = $this ->uri ->segment(3);
        $this ->db ->where_in('id',$id);
        $this ->db ->delete('tmst_ta_final');

        redirect('mahasiswa/listTafinal');
    }

    public function inputTafinal(){
        $tgl_awal = $this ->ModelMahasiswa->get_jadwal_awal_final();
        $tgl_akhir = $this ->ModelMahasiswa->get_jadwal_akhir_final();
        $dosen = $this ->ModelMahasiswa->get_dosen()->result();
        $penelitian = $this ->ModelMahasiswa->get_penelitian()->result();
        date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            // $val = $this->ModelMahasiswa->get_jadwal()->result();

            // if($val!=0){
                if(@($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
                    $l=1;
                }else{
                    $l=0;
                } 
                // if($val<1){
                //     $l=2;
                // }
            // }else{
            //     $l=2;
            // }
        $data = array(
               "menu" => "MenuMhs",
               "panelbody" => "mahasiswa/input_fix",
               "dosen" => $dosen,
               "penelitian" => $penelitian,
               "tgl_awal" => $tgl_awal,
               "tgl_akhir" => $tgl_akhir,
               "limit"=>$l
           );
        $this->load->view('panelbody', $data);
    }

    public function saveInputTafinal(){
        $nim = $this ->session ->userdata('id_session');
        $data = array(
            'judul' => $this ->input ->post('judul'),
            'deskripsi' => $this ->input ->post('deskripsi'),
            'tmst_mahasiswa_nim' => null,
            'tmst_dosen_nip' => $this ->input ->post('nip'),
            'tmst_penelitian_id' => $this ->input ->post('penelitian'),
            'kategori' => $this ->input ->post('kategori'),
            'status' => 0
        );

        $this ->db ->insert('tmst_ta_final',$data);
        redirect('mahasiswa/inputTafinal');
    }

    public function hasil_judul_fix(){
        $list = $this->ModelMahasiswa->get_data_judul_fix();
        $data = array(
            "menu" => "MenuMhs",
            "panelbody" => "mahasiswa/hasil_judul_fix/v_hasil_judul_fix",
            "list" => $list);
        $this->load->view('panelbody', $data);

    }

    public function hasil_review(){
    $list = $this->ModelMahasiswa->get_data_review();
    $data = array(
        "menu" => "MenuMhs",
        "panelbody" => "mahasiswa/hasil_review/v_hasil_review",
        "list"=>$list
    );
        $this->load->view('panelbody', $data);

    }
}