<?php

Class Koordinator extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('pdf');
		$this ->load ->model('ModelKoordinator');
        $this ->load ->model('ModelReviewer');
        $this ->load ->model('ModelMahasiswa');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 1){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $list = $this->ModelKoordinator->get_data_penelitian();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/index",
                "list" => $list
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

    public function editJadwal(){
            $id = $this->uri->segment(3);
            $jadwal = $this->ModelKoordinator->get_editJadwal($id)->row_array();
            $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editJadwal",
            "formJadwal" => "apps/koordinator/formJadwal",
            "jadwal" => $jadwal
        );
        $this->load->view('panelbody', $data);
    }

    public function simpanJadwal(){
        $id = $this->input->post('id');
        $data = array(
            'tgl_awal'=> $this->input->post('tanggal_awal'),
            'tgl_akhir'=> $this->input->post('tanggal_akhir'),
            'keterangan'=> $this->input->post('keterangan')
        );
        $this->db->where('id', $id);
        $this->db->update('td_tanggal', $data);
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

    public function reviewJudul(){

        $list = $this->ModelReviewer->get_list_ta()->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/listJudulta",
                'list' => $list

        );
        $this->load->view('panelbody', $data);
    }

    public function editReview(){

        $id = $this->uri->segment(3);
        $data = $this->ModelReviewer->get_list_ta_edit($id)->row_array();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editReview",
            "formReview" => "apps/koordinator/formReview",
            "data" => $data
        );
        $this->load->view('panelbody', $data);
    }

    public function saveReview(){
        $id = $this ->input->post('id');
        $nip = $this->input->post('nip');
        $data = array(
            'hasil_review' => $this ->input ->post('review'),
            'status' => $this ->input ->post('status'),
            'tmst_ta_id' => $id,
            'status' => $this ->input ->post('status'),
            'tmst_dosen_nip' => $nip
        );
        
        $this ->db ->insert("td_review",$data);

        $this->db->set('status',1);
        $this->db->where('id', $id);
        $this->db->update('tmst_ta');

        redirect('koordinator/reviewJudul');
    }
 
    public function listPenelitian(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelReviewer->get_penelitian($id)->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/listPenelitian",
                "list" => $list
        );
        $this->load->view('panelbody', $data);

    }

    public function editPenelitian(){
        $id = $this->uri->segment(3);
        $data = $this->ModelReviewer->get_data_penelitian($id)->row_array();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editPenelitian",
            "formPenelitian" => "apps/koordinator/formPenelitian",
            "data" => $data
        );
        $this->load->view('panelbody', $data);
    }

    public function savePenelitian(){
        $id = $this ->input->post('id');
        $data = array(
            'judul_penelitian' => $this ->input ->post('judul'),
            'kuota' => $this ->input ->post('kuota'),
        );
        $this ->db ->where('id',$id);
        $this ->db ->update('tmst_penelitian',$data);

        redirect('koordinator/listPenelitian');
    }

    public function delJudulPenelitian(){
        $id = $this ->uri ->segment(3);
        $this ->db ->where_in('id',$id);
        $this ->db ->delete('tmst_penelitian');

        $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert2('Berhasil Dihapus !','success'));
        redirect('koordinator/listPenelitian');
    }

// firhan
    public function pilihBimbingan(){

        $id = $this->session->userdata('id_session');
        $list_mhs = $this->ModelReviewer->get_datados($id)->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/listPilihBimbingan",
                'list_mhs' => $list_mhs

        );
        $this->load->view('panelbody', $data);
    }

    public function editPilihBimbingan(){
        $id = $this->uri->segment(3);
        $data = $this->ModelReviewer->get_datados($id)->row_array();
        $data = array(
            "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editPilihBimbingan",
            "formPilihBimbingan" => "apps/koordinator/formPilihBimbingan",
            "data" => $data
        );
        $this->load->view('panelbody', $data);
    }

    public function savePilihBimbingan(){
        $id = $this->input->post('id');
        $nip = $this->input->post('tmst_dosen_nip');
        $nim = $this->input->post('tmst_mahasiswa_nim');
        $data = array(
            'status'=> $this->input->post('status')
        );
        $data2 = array(
            'tmst_mahasiswa_nim'=> $this->input->post('nim'),
            'tmst_dosen_nip'=> $nip,
            'status'=> 'Belum',
            'tmst_ta_final_id'=> $id
        );
        $this->db->where('id', $id);
        $this->db->update('tmst_ta_final', $data);
        $this ->db ->insert("tmst_bimbingan",$data2);

        $this->db->set('kuota','kuota-1',false);
        $this->db->where('nip', $nip);
        $this->db->update('tmst_dosen');
        redirect('koordinator/pilihBimbingan');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $user = $this->ModelReviewer->get_dataFinal($id)->result();
       // $prodi = $this ->ModelReviewer ->get_prodi();
        // $nim_mahasiswa = $this->ModelReviewer->get_nim_mahasiswa($id);
        $data = array(
                "menu" => "MenuAdmin",
            "panelbody" => "apps/koordinator/editPilih",
            "formPemilihan" => "apps/koordinator/formPilih",
            // "nim_mahasiswa" => $nim_mahasiswa,
            "user" => $user
         //   "prodi" => $prodi
            // "visi" => $visi
        );
        $this->load->view('panelbody', $data);
    }

    public function update(){
        $id = $this ->input ->post('id');
        // $id = $this ->uri->segment(3);
        $data = array(
            'status' => 'Belum');
        $this ->db ->where('id',$id);
        $this ->db ->update('tmst_bimbingan',$data);
        redirect('koordinator/pilih');
    }

//firda

    public function input_judul(){
        $data = array(
                "menu" => "MenuAdmin",
            'panelbody' => 'apps/koordinator/list_judul'
            
        );
        $this ->load ->view('panelbody',$data);
    }

    public function simpan(){
       
        $datapenelitian = array(
            'judul_penelitian' => $this ->input ->post('judul_penelitian'),
            'kuota' => $this ->input ->post('kuota'),
            'tmst_dosen_nip' => $this ->session->userdata('id_session'));
        
        $this ->db ->insert("tmst_penelitian" ,$datapenelitian);
        
        $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert2('Berhasil Ditambahkan !','success'));
        redirect('koordinator/listPenelitian');
    }

    public function chart(){
        $data = array(
                "menu" => "MenuAdmin",
            'panelbody' => 'apps/koordinator/chartUsulanJudul'
        );
        $this->load->view('panelbody',$data);
    }

    public function printBimbingan(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Kartu Bimbingan Mahasiswa',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,10,'NIM',1,0);
        $pdf->Cell(85,10,'NAMA MAHASISWA',1,0);
        $pdf->Cell(50,10,'DOSEN PEMBIMBING',1,0);
        $pdf->Cell(100,10,'JUDUL TUGAS AKHIR',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->ModelKoordinator->bimbingan()->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(40,10,$row->nim,1,0);
            $pdf->Cell(85,10,$row->nama,1,0);
            $pdf->Cell(50,10,$row->nama_dosen,1,0);
            $pdf->Cell(100,10,$row->judul,1,1); 
        }
        $pdf->Output();
    }

    public function printDaftarBimbingan(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Daftar Bimbingan Mahasiswa',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,10,'NIM',1,0);
        $pdf->Cell(80,10,'NAMA MAHASISWA',1,0);
        $pdf->Cell(100,10,'JUDUL TUGAS AKHIR',1,1);
        $pdf->SetFont('Arial','',10);
        $id = $this->session->userdata('id_session');
        $mahasiswa = $this->ModelKoordinator->get_daftar_bimbingan($id)->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(40,10,$row->nim,1,0);
            $pdf->Cell(80,10,$row->nama,1,0);
            $pdf->Cell(100,10,$row->judul,1,1); 
        }
        $pdf->Output();
    }

    public function printDaftarUsulan(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Daftar Usulan Tugas Akhir Mahasiswa',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,10,'NIM',1,0);
        $pdf->Cell(60,10,'NAMA MAHASISWA',1,0);
        $pdf->Cell(85,10,'JUDUL TUGAS AKHIR',1,0);
        $pdf->Cell(60,10,'DOSEN PEMBIMBING',1,0);
        $pdf->Cell(35,10,'KATEGORI',1,1);
        $pdf->SetFont('Arial','',10);
        $id = $this->session->userdata('id_session');
        $mahasiswa = $this->ModelKoordinator->get_list_ta()->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(35,10,$row->nim,1,0);
            $pdf->Cell(60,10,$row->nama,1,0);
            $pdf->Cell(85,10,$row->judul,1,0);
            $pdf->Cell(60,10,$row->nama_dosen,1,0);
            $pdf->Cell(35,10,$row->kategori,1,1); 
        }
        $pdf->Output();
    }

    public function printDaftarUsulanFix(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Daftar Usulan Tugas Akhir Fix Mahasiswa',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,10,'NIM',1,0);
        $pdf->Cell(60,10,'NAMA MAHASISWA',1,0);
        $pdf->Cell(85,10,'JUDUL TUGAS AKHIR',1,0);
        $pdf->Cell(60,10,'DOSEN PEMBIMBING',1,0);
        $pdf->Cell(35,10,'KATEGORI',1,1);
        $pdf->SetFont('Arial','',10);
        $id = $this->session->userdata('id_session');
        $mahasiswa = $this->ModelKoordinator->get_list_ta_final()->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(35,10,$row->nim,1,0);
            $pdf->Cell(60,10,$row->nama,1,0);
            $pdf->Cell(85,10,$row->judul,1,0);
            $pdf->Cell(60,10,$row->nama_dosen,1,0);
            $pdf->Cell(35,10,$row->kategori,1,1); 
        }
        $pdf->Output();
    }
    

}