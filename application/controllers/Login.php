<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
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
}