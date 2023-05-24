<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_news_category extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'qh_post_category';
		$this->dichvu = 1;
		$website = $this->session->userdata('ss_website');
		if(isset($website)){
			$this->id_website = $website['id_website'];
		}else{
			$this->id_website = 1;
		}
	}
	public function show_all(){
		$this->db->select('*');
		$this->db->where('post_type_id', $this->dichvu);
		$this->db->where('post_website', $this->id_website);
		$this->db->order_by('id', 'asc');
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function show_all_by_service($id){
		$this->db->select('*');
		$this->db->where('post_type_id', $this->dichvu);
		$this->db->where('post_website', $this->id_website);
		$this->db->order_by('num', 'asc');
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function show_all_by_father($id){
		$this->db->select('*');
		$this->db->where('father_id', $id);
		$this->db->where('post_website', $this->id_website);
		$this->db->order_by('num', 'asc');
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function checkname($name){
		$this->db->select('*');
		$this->db->where('name', $name);
		$this->db->where('post_type_id', $this->dichvu);
		$this->db->where('post_website', $this->id_website);
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function viewid($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->where('post_website', $this->id_website);
		$query = $this->db->get($this->table);
        return $query->row_array();
	}
	public function add($thongtin)
	{
		$this->db->insert($this->table, $thongtin);
		return $this->db->insert_id();
	}
	public function update($id,$thongtin)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $thongtin);

	}
		public function delete($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete($this->table);
		if($query){ return true; }else{ return False; }
	}

}