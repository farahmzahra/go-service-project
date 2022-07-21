<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public $table = 'pengguna';
	public $id = 'pengguna.id';
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
	public function getBy()
	{
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->result_array();
	}
		public function getByUser()
	{
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function getByid($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_pengguna', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getByIdUser($id)
	{
		$this->db->select('p.*');
		$this->db->from('pengguna p');
		$this->db->where('p.id_pengguna', $id);
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
	public function tuser()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
        return $query->num_rows();
	}
	public function insertpesanan($data){
		$this->db->insert('pesanan', $data);
	}
	public function getpesananby($id){
		$this->db->from('pesanan');
		$this->db->where('id_pengguna',$id);
		$this->db->where('status','Proses');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function terimaPesanan($id){
		$status= array('Terima', 'Tolak', 'Selesai');
		$query = $this->db->query("SELECT * FROM pesanan WHERE id_pengguna = '$id' AND status='Tolak' OR status='Terima' OR status='Selesai'");
		return $query->result_array();
	}

	public function riwayatUser($id){
		$query = $this->db->query("SELECT * FROM pesanan WHERE id_pengguna = '$id' AND status='Selesai Rating'");
		return $query->result_array();
	}

	public function updatePesanan($id){
		$this->db->query(" UPDATE pesanan SET status = 'Terima' where id_pesanan = ".$id);
		return $this->db->affected_rows();
	}
	public function updatePesananselesai($id){
		$this->db->query(" UPDATE pesanan SET status = 'Selesai' where id_pesanan = ".$id);
		return $this->db->affected_rows();
	}
	public function updatePesanantolak($id){
		$this->db->query(" UPDATE pesanan SET status = 'Tolak' where id_pesanan = ".$id);
		return $this->db->affected_rows();
	}

	public function ratingTeknisi($id, $idp, $rating){
		$this->db->select('rating')->from('teknisi')->where('id_teknisi','3');
		$rate = $this->db->get()->row()->rating;
		if ($rate == 0) {
			$result = $rating;
		} else {
			$result = ($rating + $rate) / 2;
		}
		$this->db->query("UPDATE teknisi SET rating = $result where id_teknisi = ".$id);
		$this->db->query("UPDATE pesanan SET status = 'Selesai Rating' where id_pesanan = ".$idp);
		return $this->db->affected_rows();
	}
}