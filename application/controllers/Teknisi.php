<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jasa_model');
		$this->load->model('Jenis_model');
		$this->load->model('User_model');
		$this->load->model('Teknisi_model', 'teknisirole');
	}

	public function index()
	{
		$data['teknisi'] = $this->teknisirole->getBy();
		$this->load->view('layout/header_teknisi', $data);
		$this->load->view('dashboard/teknisi', $data);
		$this->load->view('layout/footer');
	}

	public function teknisi($id)
	{
		$data['teknisi'] = $this->teknisirole->getByIdTech($id);
		$data['jasa'] = $this->Jasa_model->get();
		$data['pesanan'] = $this->teknisirole->lihat_pesan($id);
		$data["pengguna"] = $this->User_model->getbyid($id);
		$data["jenis"] = $this->Jasa_model->getjenis($id);
		$data["namajasa"] = $this->Jasa_model->getjasa($id);
		$this->load->view('layout/header_teknisi', $data);
		$this->load->view('teknisi/vw_teknisi', $data);
		$this->load->view('layout/footer');
	}
	public function tolakpesan($id){
		$this->User_model->updatePesanantolak($id);
		redirect('Teknisi');
	}
	public function terimapesan($id){
		$this->User_model->updatePesanan($id);
		redirect('Teknisi');
	}
	public function halterima(){
		$id = $this->session->userdata('id');
		$data['teknisi'] = $this->teknisirole->getByIdTech($id);
		$data['jasa'] = $this->Jasa_model->get();
		$data['pesanan'] = $this->teknisirole->getpesananterima($id);
		$data["pengguna"] = $this->User_model->getbyid($id);
		$data["jenis"] = $this->Jasa_model->getjenis($id);
		$data["namajasa"] = $this->Jasa_model->getjasa($id);
		
		$this->load->view('layout/header_teknisi', $data);
		$this->load->view('teknisi/vw_terimateknisi', $data);
		$this->load->view('layout/footer');
	}
	public function selesaipesan($id){
		$this->User_model->updatePesananselesai($id);
		redirect('Teknisi');
	}

	public function ratingUser($id)
	{
		$resRating = $this->input->post('rating');
		$idp = $this->input->post('idp');
		$this->User_model->ratingTeknisi($id, $idp, $resRating);
		redirect('User');
	}
}