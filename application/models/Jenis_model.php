<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_model extends CI_Model
{
	public $table = 'jenis_jasa';
	public $id = 'jenis_jasa.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
	public function getById($id)
	{
		// $this->db->select('*');
		// $this->db->from($this->table);
		// $this->db->where('id_jasa', $id);
		$query = $this->db->query("SELECT * FROM jenis_jasa WHERE id_jasa = '$id' ");
		return $query->result_array();
	}
	public function getByIdjenis($id)
	{
		// $this->db->select('*');
		// $this->db->from($this->table);
		// $this->db->where('id_jasa', $id);
		$query = $this->db->query("SELECT * FROM jenis_jasa WHERE id_jenis = '$id' ");
		return $query->result_array();
	}
	public function getjasa($id)
	{
		$query = $this->db->query("SELECT ja.nama_jasa FROM jasa ja,jenis_jasa jj WHERE ja.id_jasa = jj.id_jenis AND ja.id_jasa='$id'");
		return $query->result_array();
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
	return $this->db->affected_rows();
	}
	public function getidjenisjasa($namajenis)
	{
		$query=$this->db->query("SELECT id_jenis,id_jasa,harga FROM `jenis_jasa` WHERE jenis_jasa= '".$namajenis."'");
	
		return $query->result_array();
	}
}
