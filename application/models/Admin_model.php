<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public $table = 'admin';
	public $id = 'admin.id';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'adminrole');
	}
	public function get()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getBy()
	{
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	public function tuser()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
        return $query->num_rows();
	}
}