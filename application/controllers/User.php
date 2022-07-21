<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('Jenis_model');
		$this->load->model('Jasa_model');
		$this->load->model('Teknisi_model');
		$this->load->model('User_model');
		$this->load->library('session');
	}

	public function index()
	{
		$data['user'] = $this->User_model->getByUser();
		$this->load->view('layout/header_user', $data);
		$this->load->view('dashboard/user', $data);
		$this->load->view('layout/footer');
	}

	public function servisUser($id){

	    if(!$this->session->userdata('email')){
			redirect(base_url('login'));
	    } else {
			$btn_nav['btn'] = null;
		if($this->session->userdata('email')== null){
			
			$btn_nav['btn'] ="Login";
			
		}
		else{
			
			$btn_nav['btn'] ="keluar";
			
		}
		$data["service"]=$this->Jenis_model->getById($id);
		$data["title"]=$this->Jenis_model->getjasa($id);
		$data["teknisi"]=$this->Teknisi_model->getById($id);
		$data["user"]=$this->User_model->getBy();
		$this->load->view('layout/header',$btn_nav);
		$this->load->view('user/Service',$data);
		$this->load->view('layout/footer');
	   }
	}
	
	public function pembelianJasa(){
		$idjenis =null ;
		$idjasa = null ;
		$harga = null ;
		foreach(($this->Jenis_model->getidjenisjasa($this->input->post('jenisjasa'))) as $a){
			$idjenis = $a['id_jenis'];
			$idjasa = $a['id_jasa'];
			$harga = $a['harga'];
		}
		$data = [
			
			'keterangan' => $this->input->post('ket'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
		
			'id_teknisi' => $this->input->post('id_teknisi'),
		
			'id_jasa' => $idjasa,
			'id_jenis' =>  $idjenis,
			'id_pengguna' => $this->input->post('id_pengguna'),
			'harga' => $harga,
			'status' => "Proses",
			
			
			// 'nama' => htmlspecialchars($this->input->post('nama', true)),
			// 'email' => htmlspecialchars($this->input->post('email', true)),
			// 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			// 'no_hp' => $this->input->post('no_hp'),
			// 'id_jasa' => $this->input->post('id_jasa'),
			// 'rating' => $this->input->post('radioServis')
		];
		
		$this->User_model->insertpesanan($data);
		$pesan["wait"] = $this->User_model->getpesananby($this->input->post('id_pengguna'));
		$pesan["pengguna"] = $this->User_model->getby();
		$pesan['user'] = $this->User_model->getByIdUser($this->input->post('id_pengguna'));
		$this->load->view('layout/header_user', $pesan);
		$this->load->view('dashboard/user', $pesan);
		$this->load->view('layout/footer');

		// $this->teknisirole->insert($data, $upload_image);
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		// Selamat, akun teknisi telah berhasil terdaftar!</div>');
		// redirect('Admin');
	}

	public function user($id)
	{
		$data['teknisi'] = $this->Teknisi_model->getById($id);
		$data['jasa'] = $this->Jasa_model->get();
		$data['pesanan'] = $this->Teknisi_model->lihat_pesanUser($id);
		$data['pengguna'] = $this->User_model->getbyid($id);
		$data['jenis'] = $this->Jasa_model->getjenisUser($id);
		$data['namajasa'] = $this->Jasa_model->getjasaUser($id);
		$data['user'] = $this->User_model->getByIdUser($id);
		$this->load->view('layout/header_user', $data);
		$this->load->view('user/vw_user', $data);
		$this->load->view('layout/footer');
	}

	public function userTerima($id)
	{
		$id = $this->session->userdata('id');
		$data['teknisi'] = $this->Teknisi_model->getById($id);
		$data['jasa'] = $this->Jasa_model->get();
		$data['pesanan'] = $this->User_model->terimaPesanan($id);
		$data['pengguna'] = $this->User_model->getbyid($id);
		$data['jenis'] = $this->Jasa_model->getjenisUser($id);
		$data['namajasa'] = $this->Jasa_model->getjasaUser($id);
		$data['user'] = $this->User_model->getByIdUser($id);
		$this->load->view('layout/header_user', $data);
		$this->load->view('user/vw_terimauser', $data);
		$this->load->view('layout/footer');
	}

		public function userRiwayatData($id)
	{
		$id = $this->session->userdata('id');
		$data['teknisi'] = $this->Teknisi_model->getById($id);
		$data['jasa'] = $this->Jasa_model->get();
		$data['pesanan'] = $this->User_model->riwayatUser($id);
		$data['pengguna'] = $this->User_model->getbyid($id);
		$data['jenis'] = $this->Jasa_model->getjenisUser($id);
		$data['namajasa'] = $this->Jasa_model->getjasaUser($id);
		$data['user'] = $this->User_model->getByIdUser($id);
		$this->load->view('layout/header_user', $data);
		$this->load->view('user/vw_riwayat', $data);
		$this->load->view('layout/footer');
	}
	
}
