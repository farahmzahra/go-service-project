<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teknisi_model extends CI_Model
{
	public $table = 'teknisi';
	public $id = 'teknisi.id_teknisi';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Teknisi_model', 'teknisirole');
	}
	public function get()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->select('t.*,j.nama_jasa as id_jasa');
		$this->db->from('teknisi t');
		$this->db->join('jasa j', 't.id_jasa = j.id_jasa');
		$this->db->where('t.id_jasa', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getByIdTech($id)
	{
		$this->db->select('t.*,j.nama_jasa as id_jasa');
		$this->db->from('teknisi t');
		$this->db->join('jasa j', 't.id_jasa = j.id_jasa');
		$this->db->where('t.id_teknisi', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
		public function getByidTeknisi($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_teknisi', $id);
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
	public function getByteknisi()
	{
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->row_array();
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
	public function lihat_pesan($id){
		$this->db->from("pesanan");
		$this->db->where('id_teknisi',$id);
		$this->db->where('status',"Proses");
		$query = $this->db->get();
		return $query->result_array();

	}
	public function lihat_pesanUser($id){
		$this->db->from("pesanan");
		$this->db->where('id_pengguna',$id);
		$this->db->where('status',"Proses");
		$query = $this->db->get();
		return $query->result_array();

	}
	public function getpesananterima($id){
		$this->db->from('pesanan');
		$this->db->where('id_teknisi',$id);
		$this->db->where('status','Terima');
		$query = $this->db->get();
		return $query->result_array();
	}
}