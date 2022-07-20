<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jasa_model');
		$this->load->model('Jenis_model');
		$this->load->model('Teknisi_model', 'teknisirole');
	}

	public function index()
	{
		$data['judul'] = "Data Teknisi";
		$data['teknisi'] = $this->teknisirole->get();
		$this->load->view('layout/header_admin', $data);
		$this->load->view('admin/dataTeknisi', $data);
		$this->load->view('layout/footer_admin');
	}

	public function registrasi_teknisi()
	{
		$data = [
			'nik' => $this->input->post('nik'),
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'no_hp' => $this->input->post('no_hp'),
			'id_jasa' => $this->input->post('id_jasa'),
			'rating' => $this->input->post('rating')
		];
		$upload_image = $_FILES['profil']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpeg|jpg|png';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/img/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('profil')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('profil', $new_image);
			} 
			else {
				echo $this->upload->display_errors();
			}
		}
		$this->teknisirole->insert($data, $upload_image);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Selamat, akun teknisi telah berhasil terdaftar!</div>');
		redirect('Admin');
	}

	public function daftar()
	{
		$data['judul'] = "Daftar Teknisi";
		$data['jasa'] = $this->Jasa_model->get();
		$this->load->view('layout/header_admin', $data);
		$this->load->view('admin/daftarTeknisi', $data);
		$this->load->view('layout/footer_admin');
	}

	public function jasa()
	{
		$data['judul'] = "Data Jasa";
		$data['jasa'] = $this->Jasa_model->get();
		$this->load->view('layout/header_admin', $data);
		$this->load->view('admin/dataJasa', $data);
		$this->load->view('layout/footer_admin', $data);
	}

	public function jenis()
	{
		$data['judul'] = "Data Jenis Jasa";
		$data['jenis'] = $this->Jenis_model->get();
		$this->load->view('layout/header_admin', $data);
		$this->load->view('admin/dataJenisJasa', $data);
		$this->load->view('layout/footer_admin', $data);
	}

	public function detail($id)
	{
		$data['judul'] = "Detail Teknisi";
		$data['teknisi'] = $this->teknisirole->getById($id);
		$data['jasa'] = $this->Jasa_model->get();
		$this->load->view('layout/header_admin', $data);
		$this->load->view('admin/detailDataTeknisi', $data);
		$this->load->view('layout/footer_admin');
	}

	public function hapus($id)
	{
		$this->teknisirole->delete($id);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Dihapus!</div>');
		redirect('Admin');
	}
}
