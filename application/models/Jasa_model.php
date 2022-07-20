<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa_model extends CI_Model
{
	public $table = 'jasa';
	public $id = 'jasa.id';
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
		$this->db->from($this->table);
		$this->db->where('id_jasa',$id);

		$query = $this->db->get();
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
	public function getjenis($id){
		$query =  $this->db->query("select * from jenis_jasa jj, pesanan p WHERE jj.id_jenis = p.id_jenis AND p.id_teknisi = ".$id);
		
		return $query->result_array();
	}
	public function getjasa($id){
		$query =  $this->db->query("select * from jasa jj, pesanan p WHERE jj.id_jasa = p.id_jasa AND p.id_teknisi = ".$id);
		
		return $query->result_array();
	}
	public function getjasaUser($id){
		$query =  $this->db->query("select * from jasa jj, pesanan p WHERE jj.id_jasa = p.id_jasa AND p.id_pengguna = ".$id);
		
		return $query->result_array();
	}
		public function getjenisUser($id){
		$query =  $this->db->query("select * from jenis_jasa jj, pesanan p WHERE jj.id_jenis = p.id_jenis AND p.id_pengguna = ".$id);
		
		return $query->result_array();
	}
}
