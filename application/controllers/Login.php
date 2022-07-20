<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'userrole');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('auth/login');
		$this->load->view('layout/footer');
	}

	public function registrasi()
	{
		$this->load->view('layout/header');
		$this->load->view('auth/regist');
		$this->load->view('layout/footer');
	}

	public function registrasi_user()
	{
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'no_hp' => $this->input->post('no_hp')
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
		$this->userrole->insert($data, $upload_image);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Selamat, akunmu telah berhasil terdaftar, Silahkan Login!</div>');
		redirect('Login');
	}

	public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
       
        $pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();
        $teknisi = $this->db->get_where('teknisi', ['email' => $email])->row_array();
        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();
        $flag = null;

        if ($pengguna != null){
            $flag = 1;
        }
        else if ($teknisi != null){
            $flag = 2;
        } 
        else {
        	$flag = 3;
        }

        if($flag == 1){
            if(password_verify($password, $pengguna['password'])){
                $data = [
                    'email' => $pengguna['email'],
                    'id' => $pengguna['id_pengguna']
                ];
                $this->session->set_userdata($data);
                redirect('User');
            } 
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email atau Password Salah!</div>');
                redirect('Login');
            }
        } else if ($flag == 2) {
        	if(password_verify($password, $teknisi['password'])){
                $data = [
                    'email' => $teknisi['email'],
                    'id' => $teknisi['id_teknisi']
                ];
                $this->session->set_userdata($data);
                redirect('Teknisi');
            } 
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email atau Password Salah!</div>');
                redirect('Login');
            }
        } else if ($flag == 3) {
        	if($password){
                $data = [
                    'email' => $admin['email'],
                    'id' => $admin['id_admin']
                ];
                $this->session->set_userdata($data);
                redirect('Admin');
            } 
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email atau Password Salah!</div>');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email Belum Terdaftar!</div>');
            redirect('Login');
        }
    }

   	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
		redirect('Login');
	}
}